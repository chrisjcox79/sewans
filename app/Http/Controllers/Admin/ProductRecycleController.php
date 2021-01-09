<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductRecycleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $products=Product::withTrashed()->orderBy('deleted_at','DESC')->paginate(30);
        return  view('admin.pages.recycle.index',compact('products'));
    }

  public function restore($id){

        $re = Product::withTrashed()->where('id',$id)->restore();
        if($re){
            return response()->json(['code'=>200,'msg'=>'商品还原成功']);
        }else{
            return response()->json(['code'=>400,'msg'=>'商品还原失败']);

        }
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $re = Product::withTrashed()->where('id',$id)->first()->forceDelete();
        if($re){
            return response()->json(['code'=>200,'msg'=>'商品已永久删除']);


        }
        return response()->json(['code'=>400,'msg'=>'商品不存在,请稍后再试']);

    }
}
