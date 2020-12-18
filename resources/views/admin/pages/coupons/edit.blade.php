@extends('admin.layout.master')
@push('plugin-styles')
    <link href="{{ asset('backend/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />

@endpush
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">优惠卷管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">添加优惠卷</li>
        </ol>
    </nav>
    @include('admin.layout.error')
    @include('admin.layout.message')
    <form class="cmxform" id="signupForm" method="post" action="{{ route('coupons.update', $coupon->id) }}"
        novalidate="novalidate" onkeydown="if(event.keyCode==13){return false;}">
        {{ method_field('PUT') }}
        @csrf
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">添加优惠卷</h4>
                        <fieldset>
                            <div class="form-group">
                                <label for="name">优惠卷名称</label>
                                <input id="name" class="form-control" name="name" type="text" placeholder="优惠卷名称"
                                    value="{{ $coupon->name }}">
                            </div>
                            <div class="form-group">
                                <label for="code">优惠码</label>
                                <input id="code" class="form-control" name="code" type="text" placeholder="优惠卷码"
                                    value="{{ $coupon->code }}">
                            </div>
                            <div class="form-group">
                                <label for="password">类型</label>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="type" id="type1"
                                                {{ $coupon->type == 'fixed' ? 'checked' : '' }} value="fixed" checked>
                                            固定金额
                                            <i class="input-frame"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="type" id="type2"
                                                {{ $coupon->type == 'percent' ? 'checked' : '' }} value="percent">
                                            比例
                                            <i class="input-frame"></i></label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="code">折扣</label>
                                <input id="value" class="form-control" name="value" type="text"
                                    value="{{ $coupon->value }}">
                            </div>
                        </fieldset>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">发行数量</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" name="total" id="total" type="number" placeholder="优惠卷数量"
                                    value="{{ $coupon->total }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">最低消费金额</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" name="min_amount" id="min_amount" type="number"
                                    value="{{ $coupon->min_amount }}" placeholder="优惠卷消费金额">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">开始时间</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group date datepicker" id="couponStart">
                                    <input type="text" class="form-control" name="not_before"
                                        value="{{ $coupon->not_before }}"><span class="input-group-addon"><i
                                            data-feather="calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">结束时间</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group date datepicker" id="couponEnd">
                                    <input type="text" class="form-control" name="not_after"
                                        value="{{ $coupon->not_after }}"><span class="input-group-addon"><i
                                            data-feather="calendar"></i></span>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">是否启用</label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="enabled" id="enabled1" value="1"   {{ $coupon->enabled == 1 ? 'checked' : '' }}>
                                        是 <i class="input-frame"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="enabled" id="enabled2"    {{ $coupon->enabled == 0 ? 'checked' : '' }}
                                            value="0">
                                        否
                                        <i class="input-frame"></i></label>
                                </div>

                            </div>
                        </div>

                        <input class="btn btn-primary py-2 float-right mt-4" type="submit" value="更新">

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('plugin-scripts')


    <script src="{{ asset('backend/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush

@push('custom-scripts')



    <script src="{{ asset('backend/assets/js/datepicker.js') }}"></script>

    <script>
        $(function() {
            $('#couponStart ,#couponEnd').datepicker({
                clearBtn: true,
                language: "zh-CN",
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true,
                format: 'yyyy-mm-dd',
                orientation: "bottom left",
            });

        })

    </script>

@endpush
