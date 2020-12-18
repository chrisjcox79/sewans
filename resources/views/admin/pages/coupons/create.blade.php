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
    <form class="cmxform" id="signupForm" method="post" action="{{ route('coupons.store') }}" novalidate="novalidate"
        onkeydown="if(event.keyCode==13){return false;}">
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
                                    value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="code">优惠码</label>
                                <input id="code" class="form-control" name="code" type="text" placeholder="优惠卷码"
                                    value="{{ old('code') }}">
                            </div>


                            <div class="form-group">
                                <label>类型</label>
                                <select class="form-control form-control-lg" name="type" id="type">
                                    <option selected="">请选择优惠卷类型</option>
                                    <option value="fixed"> 固定金额</option>
                                    <option value="percent">比例</option>
                                </select>
                            </div>

                            <div class="form-group d-none percent">
                                <label for="code">固定比例</label>
                                <div class="input-group datepicker">
                                    <input type="text" class="form-control" name="value" autocomplete="off"><span
                                        class="input-group-addon"><i data-feather="percent" class="h6 font-weight-light"></i></span>
                                </div>
                            </div>
                            <div class="form-group d-none fixed">
                                <label for="code">固定金额</label>
                                <div class="input-group datepicker">
                                    <input type="text" class="form-control" name="value" autocomplete="off"><span
                                        class="input-group-addon"><i data-feather="dollar-sign" class="h6 font-weight-light"></i></span>
                                </div>
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
                                    value="{{ old('total') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">最低消费金额</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" name="min_amount" id="min_amount" type="number"
                                    value="{{ old('min_amount') }}" placeholder="优惠卷消费金额">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">开始时间</label>
                            </div>
                            <div class="col-lg-8">


                                <div class="input-group date datepicker" id="couponStart">
                                    <input type="text" class="form-control" name="not_before" autocomplete="off"><span
                                        class="input-group-addon"><i data-feather="calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">结束时间</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group date datepicker" id="couponEnd">
                                    <input type="text" class="form-control" name="not_after" autocomplete="off"><span
                                        class="input-group-addon"><i data-feather="calendar"></i></span>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">是否启用</label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="enabled" id="enabled1" value="1">
                                        是 <i class="input-frame"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="enabled" id="enabled2" checked
                                            value="0">
                                        否
                                        <i class="input-frame"></i></label>
                                </div>

                            </div>
                        </div>

                        <input class="btn btn-primary py-2 float-right mt-4" type="submit" value="添加">

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
                format: 'yyyy-mm-dd'
            });
            $('#type').on('change', function() {
                if ($(this).val() === 'fixed') {
                    $('.fixed').removeClass('d-none');
                    $('.percent').addClass('d-none');
                } else if ($(this).val() === 'percent') {
                    $('.fixed').addClass('d-none');
                    $('.percent').removeClass('d-none');
                }
            })

        })
  

    </script>


@endpush
