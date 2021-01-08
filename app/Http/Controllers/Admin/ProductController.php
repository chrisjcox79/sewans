<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductForm;
use App\Models\Brands;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\ProductSpec;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\GoodsType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(30);
        return view('admin.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::where('pid', 0)->get();
        $brands = Brands::all();
        $types = GoodsType::where('status', 1)->get();
        return view('admin.pages.product.create', compact('category', 'brands', 'types'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        DB::beginTransaction();
        try {

            $data["product_thumb"] = getenv('OSS_BUCKET_URL') . '/' . $data["product_thumb"] . '?x-oss-process=image/resize,m_fixed,h_350,w_270';
            $data["product_content"] = clean( $data["product_content"]);
            $product = Product::create($data);
            self::handleProductImageUpload($data, $product->id);

            foreach ($data['item'] as $item) {
                $item['product_id'] = $product->id;
                ProductSpec::create($item);
            }
            DB::commit();
            session()->flash('success', '商品添加成功');
            return redirect()->route('product.index');
        } catch (Exception $e) {


            DB::rollBack();

            session()->flash('danger', '商品添加失败');
            return redirect()->back();
        }


    }

    /**
     * Insert the image and handle the thumb method
     * @param $data
     * @param $id
     *
     */
    private static function handleProductImageUpload($data, $id)
    {
        foreach ($data['goods_images'] as $img) {
            $small_img = getenv('OSS_BUCKET_URL') . '/' . $img . '?x-oss-process=image/resize,m_fixed,h_350,w_270';
            $big_img = getenv('OSS_BUCKET_URL') . '/' . $img . '?x-oss-process=image/resize,m_fixed,h_555,w_555';
            $row = [
                'product_id' => $id,
                'small_img' => $small_img,
                'big_img' => $big_img,
            ];
            ProductImages::create($row);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //


        $data = Product::with('brands', 'productImages', 'productSpec', 'category')->find($product->id)->toArray();
        foreach ($data['product_images'] as $k => $v) {
            $data['product_images'][$k]['small_img'] = rtrim($v['small_img'], 'h_350,w_270');
        }
        foreach ($data['product_spec'] as $k => $v) {
            foreach (explode(' ', $v["value_names"]) as $i => $j) {
                $data['product_spec'][$k][substr($j, '0', strrpos($j, ':'))] = substr($j, strrpos($j, ':') + 1);
            }
        }


        $pid_path = explode('_', $data["category"]["pid_path"]);
        $category_one = Category::where('pid', 0)->get();
        $category_two = Category::where('pid', $pid_path[1])->get();
        $category_three = Category::where('pid', $pid_path[2])->get();
        $brands = Brands::all();
        $types = GoodsType::where('status', 1)->get();

        return view('admin.pages.product.edit', compact('data', 'category_one', 'category_two', 'category_three', 'brands', 'types'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $data = $request->all();

        DB::beginTransaction();
        try {
            if (isset($data["product_thumb"]) && !empty($data["product_thumb"])) {
                $data["product_thumb"] = getenv('OSS_BUCKET_URL') . '/' . $data["product_thumb"] . '?x-oss-process=image/resize,m_fixed,h_350,w_270';
            }
            $data["product_content"] = clean( $data["product_content"]);
                $product->update($data);
            if (isset($data["product_images"]) && !empty($data["product_images"])) {
                self::handleProductImageUpload($data, $product->id);

            }
            foreach ($data["item"] as $spec) {
                ProductSpec::where('id', $spec["id"])->update($spec);
            }
            DB::commit();
            session()->flash('success', '商品修改成功');
            return redirect()->route('product.index');
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            session()->flash('danger', '商品修改失败');
           return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Product::find($id);
        if ($data['status'] == 1) {
            return response()->json(['code' => 400, 'msg' => '该商品上架中,无法删除']);
        }
        $res = Product::where('id', $id)->delete();
        if ($res) {
            return response()->json(['code' => 200, 'msg' => '商品删除成功']);

        }

    }

    /**
     * Update the product status
     * @param Product $id
     * @return \Illuminate\Http\JsonResponse
     *
     */

    public function updateProductStatus(Product $id)
    {
        $id->status = $id->status == 1 ? 0 : 1;
        $res = $id->save();
        if ($res) {
            $msg = $id->status == 1 ? '已上架' : '下架中';
            return response()->json(['code' => 200, 'msg' => $msg]);

        } else {
            return response()->json(['code' => 400, 'msg' => '内部异常,请稍后再试']);
        }


    }

    /**
     * Delete the product images
     * @param ProductImages $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function deleteProductImage(ProductImages $id)
    {


        $res = $id->delete();
        if ($res) {
            return response()->json(['code' => 200, 'msg' => '删除成功']);

        } else {
            return response()->json(['code' => 400, 'msg' => '删除失败']);

        }

        return response()->json(['code' => 400, 'msg' => '内部异常,图片不存在']);
    }
}
