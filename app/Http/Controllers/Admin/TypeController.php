<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeStoreRequest;
use App\Models\GoodsType;
use App\Models\Product;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = GoodsType::with('attributes')->get();
        return view('admin.pages.type.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.type.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeStoreRequest $typeStoreRequest)
    {
        //
        $data = $typeStoreRequest->validated();
        GoodsType::create($data);
        session()->flash('success','添加成功');
        return  redirect()->route('types.index');
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
    public function edit(GoodsType $type)
    {
        //

        return view('admin.pages.type.edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeStoreRequest $typeStoreRequest, $type)
    {
        //
        $data = $typeStoreRequest->validated();
        GoodsType::where('id',$type)->update($data);
        session()->flash('success','修改成功');
        return  redirect()->route('types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoodsType $type)
    {
        //
      
        $total = Product::where('goods_type_id', $type->id)->count();
    
        if ($total>0) {
          
            return response()->json(['code'=>400,'msg'=>'该模型有商品使用中,无法删除']);
        }
        $type->delete();
        return response()->json(['code'=>200,'msg'=>'删除成功']);
    }


    public function getAttr(Request $request)
    {


        $type = GoodsType::with(['attributes','attributes.attrValues'])->where('id',$request->type_id)->get()->toArray();
        foreach($type as $k =>$v){
            $data['attrs'] = $v['attributes'];
         
        }


        return response()->json(['code'=>200,'data'=>$data]);


    }
}
