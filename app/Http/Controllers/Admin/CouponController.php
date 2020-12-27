<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Requests\CouponFormRequest;
use App\Models\CouponCodes;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class CouponController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obj = new CouponCodes();
        $coupons = CouponCodes::orderBy('created_at', 'desc')->paginate(15);
        $coupons = $obj->getDescriptionAttribute($coupons);

        return view('admin.pages.coupons.index',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.coupons.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponFormRequest $request)
    {
        //
        $result = CouponCodes::create($request->validated());
        if($result){
            session()->flash('success','优惠卷添加成功');
            return redirect()->route('coupons.index');
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
    public function edit(CouponCodes $coupon)
    {
        //


        return view('admin.pages.coupons.edit',compact('coupon'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponFormRequest $request, $coupon)
    {
        //

        $result = CouponCodes::where('id',$coupon)->update($request->validated());
        if( $result){
            session()->flash('success','更新成功');
            return redirect()->route('coupons.index');
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
    public function destroy(CouponCodes $coupon)

    {
        //
        $coupon->delete();
        return response()->json(['code'=>200,'msg'=>'删除成功']);
    }
}
