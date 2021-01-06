<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductForm;
use App\Models\Brands;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\GoodsType;
use Illuminate\Support\Facades\DB;

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
            $disk = Storage::disk('oss');
            $path = $disk->put('/product', $data->product_thumb);
            $data["product_thumb"] = $disk->url($path) . '?x-oss-process=image/resize,m_fixed,h_350,w_270';
            $product = Product::create($data);

            foreach (array_values(array_unique($data['goods_images'])) as $img) {
                $small_img = getenv('OSS_BUCKET_URL') . '/' . $img . '?x-oss-process=image/resize,m_fixed,h_350,w_270';
                $big_img = getenv('OSS_BUCKET_URL') . '/' . $img . '?x-oss-process=image/resize,m_fixed,h_625,w_485';
                $row = [
                    'product_id' => $product->id,
                    'small_img' => $small_img,
                    'big_img' => $big_img,
                ];
                ProductImages::create($row);

                DB::commit();
                session()->flash('success', '商品添加成功');
                return redirect()->route('products.index');
            }
        }catch (\Exception $e){


            DB::rollBack();
            session()->flash('danger','商品添加失败');
            return redirect()->back();
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
    public function edit($id)
    {
        //

        return view('admin.pages.product.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
