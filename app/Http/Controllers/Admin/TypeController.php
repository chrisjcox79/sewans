<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Requests\TypeStoreRequest;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\GoodsType;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TypeController extends AdminController
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
    public function store(TypeStoreRequest $request)
    {
        //

        $data = $request->validated();

        DB::beginTransaction();
        try {
            $type = GoodsType::create($data);

            foreach ($data['attr'] as $i => $attr) {
                if (trim($attr['name'] == '')) {
                    unset($attr['attr'][$i]);
                    continue;
                }
                foreach ($attr['value'] as $k => $value) {
                    if (trim($value == '')) {
                        unset($data['attr'][$i]['value'][$k]);
                    }
                    // $arr = explode(',',$value);
                    // unset( $data['spec'][$i]['value']);
                    // $data['spec'][$i]['value'] = $arr;
                }
                if (empty($data['attr'][$i]['value'])) {
                    unset($data['attr'][$i]);
                }
            }


            // 批量添加新的规格值
            // 批量添加新的规格名
            foreach ($data['attr'] as $i => $attr) {
                $row = [
                    'attribute_name' => $attr['name'],
                    'goods_type_id' => $type->id
                ];
                $attrData[] =  Attribute::create($row);
            }

            // 批量添加新的规格值
            foreach ($data['attr'] as $i => $attr) {
                foreach ($attr['value'] as $k=>$value) {
                    $row = [
                        'goods_type_id' =>$type->id,
                        'attribute_id' => $attrData[$i]['id'],
                        'attribute_color_value' => $attr['color'][$k],
                        'attribute_value' => str_replace(' ', '', strtoupper($value))
                    ];
                    AttributeValue::create($row);

                }
            }


            // 去除空的属性值

            DB::commit();
            session()->flash('success', '规格添加成功');
            return redirect()->route('types.index');
        } catch (Exception $e) {
            DB::rollBack();
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
    public function edit(GoodsType $type)
    {
        //
        //$type= $type->with('attributes.attrValues');
        $type= GoodsType::where('id',$type->id)->with('attributes.attrValues')->find($type->id)->toArray();
        return view('admin.pages.type.edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeStoreRequest $request, GoodsType $type)
    {
        //

        $data = $request->validated();
        DB::beginTransaction();
        try {
            $type->update($data);

            foreach ($data['attr'] as $i => $attr) {
                if (trim($attr['name'] == '')) {
                    unset($attr['attr'][$i]);
                    continue;
                }
                foreach ($attr['value'] as $k => $value) {
                    if (trim($value == '')) {
                        unset($data['attr'][$i]['value'][$k]);
                    }
                    // $arr = explode(',',$value);
                    // unset( $data['spec'][$i]['value']);
                    // $data['spec'][$i]['value'] = $arr;
                }
                if (empty($data['attr'][$i]['value'])) {
                    unset($data['attr'][$i]);
                }
            }
                Attribute::where('goods_type_id',$type->id)->delete();

            // 批量添加新的规格值
            // 批量添加新的规格名
            foreach ($data['attr'] as $i => $attr) {
                $row = [
                    'attribute_name' => $attr['name'],
                    'goods_type_id' => $type->id
                ];
                $attrData[] =  Attribute::create($row);
            }
            AttributeValue::where('goods_type_id',$type->id)->delete();
            // 批量添加新的规格值
            foreach ($data['attr'] as $i => $attr) {
                foreach ($attr['value'] as $k=>$value) {
                    $row = [
                        'goods_type_id' =>$type->id,
                        'attribute_id' => $attrData[$i]['id'],
                        'attribute_color_value' => $attr['color'][$k],
                        'attribute_value' => str_replace(' ', '', strtoupper($value))
                    ];
                    AttributeValue::create($row);

                }
            }


            // 去除空的属性值

            DB::commit();
            session()->flash('success', '规格修改成功');
            return redirect()->route('types.index');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput();
        }
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
