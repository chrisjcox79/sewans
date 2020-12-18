<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandFormUpdateRequest;
use App\Http\Requests\BrandStoreRequest;
use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\File; 






class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $brands = Brands::all();
        return view('admin.pages.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandStoreRequest $brandFormRequest)
    {
        //
      

        $data = $brandFormRequest->validated();        
        $path = $brandFormRequest->file('logo') ->store(
            'uploads/brand/logo/' . date("Y-m-d", time()),['disk'=>'logo']
          );
        $img = Image::make($path)->resize(400,300);
    
        $img->save( $path );
        $data['logo']= $path;
        $res = Brands::create($data);
        if($res){
            session()->flash('success','添加成功');
            return redirect()->route('brand.index');
        }else{
            session()->flash('danger','添加失败');
            return redirect()->route('brand.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brands $brand)
    {
        //

        return view('admin.pages.brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandFormUpdateRequest $request,$brand)
    {
        //
      
        $data =  $request->validated();  
        if( $request->hasfile('logo')){
            $path =  $request->file('logo') ->store(
                'uploads/brand/logo/' . date("Y-m-d", time()),['disk'=>'logo']
              );
            $img = Image::make($path)->resize(400,300);
        
            $img->save( $path );
            $data['logo']= $path;
            File::delete($data['old_logo']);
        } 
        unset($data['old_logo']); 
      
        $res = Brands::where('id',$brand)->update($data);
        if($res){
            session()->flash('success','更新成功');
            return redirect()->route('brand.index');
        }else{
            session()->flash('danger','更新失败');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brands $brand)
    {
        //

        $total = Product::where('brands_id', $brand->id)->count();

        if ($total > 0) {

            return response()->json(['code' => 400, 'msg' => '该品牌下有商品使用中,无法删除']);
        }
        File::delete($brand->logo);

        $brand->delete();
        return response()->json(['code' => 200, 'msg' => '删除成功']);
    }
}
