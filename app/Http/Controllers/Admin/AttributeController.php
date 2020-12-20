<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeFormRequest;
use App\Models\Attribute;
use App\Models\GoodsType;
use App\Models\Product;
use Illuminate\Http\Request;



class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $attributes = Attribute::all();
        $types = GoodsType::where('status', 1)->get();

        return view('admin.pages.attribute.index', compact('attributes','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $types = GoodsType::where('status', 1)->get();
        return view('admin.pages.attribute.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeFormRequest $request)
    {
        //


        $data = $request->validated();
        dd($data);
        $data['attribute_value'] = strtoupper( $data['attribute_value']);
        $res = Attribute::create($data);
        if($res){
            session()->flash('success','规格添加成功');
            return redirect()->route('attribute.index');
        }else{
            session()->flash('error','规格添加失败');
            return redirect()->back()->withInput();
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
    public function edit(Attribute $attribute)
    {
        //
        $types = GoodsType::where('status', 1)->get();
        return view('admin.pages.attribute.edit', compact('types','attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AttributeFormRequest $request , $attribute)
    {
        //
        $data = $request->validated();
        $data['attribute_value'] = strtoupper( $data['attribute_value']);
        $res = Attribute::where('id',$attribute)->update($data);
        if($res){
            session()->flash('success','规格更新成功');
            return redirect()->route('attribute.index');
        }else{
            session()->flash('error','规格更新失败');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute)
    {
        //
        $total = Product::where('goods_type_id', $attribute->id)->count();
    
        if ($total>0) {
          
            return response()->json(['code'=>400,'msg'=>'该属性有商品使用中,无法删除']);
        }
        $attribute->delete();
        return response()->json(['code'=>200,'msg'=>'删除成功']);
    }
}
