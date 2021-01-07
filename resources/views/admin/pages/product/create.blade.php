@extends('admin.layout.master')
@push('plugin-styles')
    <link href="{{ asset('backend/assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}"
          rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}"
          rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}"
          rel="stylesheet"/>


    <link href="{{ asset('backend/css/webupload.css') }}"
          rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">


@endpush
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">商品管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增商品</li>
        </ol>
    </nav>
    @include('admin.layout.error')
    @include('admin.layout.message')
    <form class="cmxform" id="" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">

        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">商品基本信息</h4>
                        @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">商品名称</label>
                                        <input class="form-control" name="product_name" type="text"
                                               value="{{ old('product_name') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">商品价格</label>
                                        <input class="form-control" name="product_price" type="number"
                                               autocomplete="off"
                                               value="{{ old('product_price') }}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">市场价格</label>
                                        <input class="form-control" name="market_price" type="number" autocomplete="off"
                                               value="{{ old('market_price') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">成本价格</label>
                                        <input id="name" class="form-control" name="cost_price" type="number"
                                               autocomplete="off"
                                               value="{{ old('cost_price') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class=""><label for="name">商品货号</label> <span href="#"
                                                                                           class="badge badge-primary float-right"
                                                                                           style="cursor: pointer"
                                                                                           id="product_code_generate">自动产生</span>
                                        </div>
                                        <input class="form-control" name="product_code" type="text"
                                               autocomplete="off"
                                               value="{{ old('product_code') }}">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">SKU编号</label>
                                        <input id="name" class="form-control" name="sku_code" type="text"
                                               value="{{ old('sku_code') }}">

                                    </div>
                                </div>
                            </div>

                        </fieldset>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">分类及品牌信息</h4>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">所属品牌</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" id="brand" name="brands_id">
                                        <option selected disabled>请选择商品品牌</option>
                                        @foreach ($brands as $v)
                                            <option value="{{ $v->id }}">{{ $v->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">商品分类</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" id="cate_1">
                                        <option selected disabled>请选择分类</option>
                                        @foreach ($category as $v)
                                            <option value="{{ $v->id }}">{{ $v->cate_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" id="cate_2">
                                        <option selected disabled>请选择二级分类</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" id="cate_3" name="category_id">
                                        <option selected disabled>请选择三级分类</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">商品运费及基本信息:</h6>
                        <div class="row">
                            <div class="col-3">
                                <label>是否新品:</label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_new" id="is_new"
                                                   value="1" checked>
                                            是
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_new" id="is_new1"
                                                   value="0">
                                            否
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-3">
                                <label>是否推荐:</label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_recommend"
                                                   id="is_recommend" value="1">
                                            是
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_recommend"
                                                   id="is_recommend1" value="0" checked>
                                            否
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="col-3">
                                <label>是否热销:</label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_hot" id="is_hot"
                                                   value="1">
                                            是
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_hot" id="is_hot1"
                                                   value="0" checked>
                                            否
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="col-3">
                                <label>是否上架:</label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status"
                                                   value="1">
                                            是
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status"
                                                   id="is_recommend1" value="0" checked>
                                            否
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">商品封面图</h6>

                        <div id="imgThumb"></div>
                        <div  class="dropzone"   id="product_thumb"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">商品详情:</h4>
                        <textarea class="form-control" name="product_content" id="product_editor" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">商品相册</h6>
<div id="wrapper"></div>
                        <div
                            class="dropzone"
                            id="my-awesome-dropzone"></div>
                        {{--                        <div id="wrapper">--}}
                        {{--                            <div id="container">--}}
                        {{--                                <!--头部，相册选择和格式选择-->--}}

                        {{--                                <div id="uploader">--}}
                        {{--                                    <div class="queueList">--}}
                        {{--                                        <div id="dndArea" class="placeholder">--}}
                        {{--                                            <div id="filePicker"></div>--}}
                        {{--                                            <p>或将照片拖到这里，单次最多可选300张</p>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="statusBar" style="display:none;">--}}
                        {{--                                        <div class="progress">--}}
                        {{--                                            <span class="text">0%</span>--}}
                        {{--                                            <span class="percentage"></span>--}}
                        {{--                                        </div><div class="info"></div>--}}
                        {{--                                        <div class="btns">--}}
                        {{--                                            <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                    </div>
                </div>
            </div>

        </div>

        <div class="row py-4">

            <div class="col-md-6 stretch-card ">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">商品模型</h6>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">所属模型</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" id="goods_type_id" name="goods_type_id">
                                        <option selected disabled>请选择商品模型</option>
                                        @foreach ($types as $v)
                                            <option value="{{ $v->id }}">{{ $v->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row d-none product-attr-row">
                            <div class="col-12">
                                <div class="py-3">
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered text-center" id="product-attr-table">
                                            <tbody class=" text-center">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6  stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">商品关键字(用于搜索):</h6>
                        <div>
                            <input name="keywords" id="tags" value=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">商品属性:</h4>
                        <div class="table-responsive pt-3">

                            <table class="table  text-center" id="spec_input_table">


                                <tbody class=" text-center">


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-success float-right" type="submit">添加</button>
            </div>
        </div>
    </form>


@endsection

@push('plugin-scripts')

    <script src="{{ asset('backend/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/tinymce/tinymce.min.js') }}"></script>




@endpush

@push('custom-scripts')

    <script src="{{ asset('backend/assets/js/tinymce.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tags-input.js') }}"></script>
    <script src="{{ asset('backend/assets/js/webuploader.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/webupload.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.18.0/js/md5.min.js"
            integrity="sha512-Hmp6qDy9imQmd15Ds1WQJ3uoyGCUz5myyr5ijainC1z+tP7wuXcze5ZZR3dF7+rkRALfNy7jcfgS5hH8wJ/2dQ=="
            crossorigin="anonymous"></script>
    <script>
        Dropzone.autoDiscover = false;

        $(function () {


            $("#cate_1").on('change', function () {
                let pid = $(this).val();

                $.ajax({
                    type: "get",
                    url: "{{ route('category.api') }}",
                    data: {
                        'pid': pid,
                        "_token": '{{ csrf_token() }}'
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.code != 200) {
                            return;
                        }
                        let str = ` <option value="">请选择二级分类</option>`;
                        $.each(response.data, function (i, v) {
                            str +=
                                `<option value="${v.id}">${v.cate_name}</option>`;
                        });
                        $('#cate_2').html(str);
                        $('#cate_3').html(`<option value="">请选择三级分类</option>`);


                    }
                });
            });
            $("#cate_2").on('change', function () {
                let pid = $(this).val();

                $.ajax({
                    type: "get",
                    url: "{{ route('category.api') }}",
                    data: {
                        'pid': pid,
                        "_token": '{{ csrf_token() }}'
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.code != 200) {
                            return;
                        }
                        let str = ` <option value="">请选择三级分类</option>`;
                        $.each(response.data, function (i, v) {
                            str +=
                                `<option value="${v.id}">${v.cate_name}</option>`;
                        });
                        $('#cate_3').html(str);


                    }
                });
            });


            $(document).on('click', '.delete-item', function () {
                $(this).closest('tr').remove();
            })
        });

        $("#goods_type_id").on('change', function () {
            type_id = $(this).val();
            var sku_no = $("input[name=sku_code]").val();
            $.ajax({
                type: "get",
                url: "{{ route('type.getAttr') }}",
                data: {
                    'type_id': type_id,
                    "_token": '{{ csrf_token() }}'
                },
                dataType: "JSON",
                'success': function (response) {
                    if (response.code != 200) {
                        alert(response.msg);
                        return;
                    }
                    //根据获取的数据，拼接html代码，显示到页面
                    // var attrs = response.data.attrs;
                    var specs = response.data.attrs;
                    //遍历数组，一条一条数据拼接处理
                    var spec_html = '<tr><td colspan="2" class=" text-left">商品规格</td></tr>';
                    $.each(specs, function (i, v) {
                        //i 是数组中的索引，v是一条数据（json格式对象）
                        //属性名称
                        spec_html += '<tr class="spec_name text-center" spec_id="' +
                            v.id +
                            '">';
                        spec_html += '<td spec_name="' + v.attribute_name +
                            '" >' + v
                                .attribute_name + '：</td>';
                        spec_html += '<td>';
                        $.each(v.attr_values, function (index, value) {
                            spec_html +=
                                '<button type="button" spec_value_id="' +
                                value.id +
                                '" class="btn " style="color:' + value.attribute_color_value + '" data-color="' + value.attribute_color_value + '">' +
                                value
                                    .attribute_value + '</button> ';
                        });
                        spec_html += '</td>';
                        spec_html += '</tr>';
                    });
                    //将拼接好的html字符串，放到页面显示
                    $('#product-attr-table').find('tbody').html(spec_html);
                    $(".product-attr-row").removeClass('d-none');


                    $('#product-attr-table').on('click', 'button', function () {
                        $(this).toggleClass('btn-primary').toggleClass('btn-light');
                        var spec_data = {};
                        $('.spec_name').find('button.btn-light').each(function (i, v) {

                            let index = $(v).closest('tr').index();
                            let spec_id = $(v).closest('tr').attr('spec_id');
                            let data_color = $(v).data('color');

                            let spec_name = $(v).closest('tr').find('td:first').attr(
                                'spec_name');
                            let spec_value_id = $(v).attr('spec_value_id');
                            let spec_value = $(v).text();
                            if (spec_data[index] == undefined) spec_data[index] = [];
                            spec_data[index].push({
                                spec_id: spec_id,
                                spec_name: spec_name,
                                spec_value_id: spec_value_id,
                                spec_value: spec_value,
                                data_color: data_color,

                            });
                        });
                        var spec_arr = [];
                        for (var i in spec_data) {
                            spec_arr.push(spec_data[i]);
                        }
                        //计算笛卡尔积
                        var result = spec_arr[0];
                        for (var i = 1; i < spec_arr.length; i++) {
                            var temp = [];
                            $.each(result, function (j, v1) {
                                $.each(spec_arr[i], function (k, v2) {
                                    if ($.isArray(v1)) {
                                        v1.push(v2);
                                        temp.push(v1);
                                    } else {
                                        temp.push([v1, v2])
                                    }

                                });
                            });
                            result = temp;
                        }
                        var html = ``;
                        //拼接第一行
                        html += '<tr>';
                        if ($.isArray(result[0]) == false) {
                            html += '<td style="text-align: center; font-size: 14px;"><b>' +
                                result[0].spec_name + '</b></td>';
                        } else {
                            $.each(result[0], function (i, v) {
                                html +=
                                    '<td style="text-align: center; font-size: 14px; "><b>' +
                                    v.spec_name + '</b></td>';
                            });
                        }
                        html += '<td><b>购买价</b></td>';
                        html += '<td><b>成本价</b></td>';
                        html += '<td><b>库存</b></td>';
                        html += '<td><b>库存预警</b></td>';
                        html += '<td><b>SKU编号</b></td>';
                        html +=
                            '<td style="text-align: center; font-size: 14px;"><b>操作</b></td>';
                        html += '</tr>';
                        //拼接批量填充行
                        html += '<tr >';
                        if ($.isArray(result[0]) == false) {
                            html += '<td><b></b></td>';
                        } else {
                            $.each(result[0], function (i, v) {
                                html += '<td><b></b></td>';
                            });
                        }
                        html +=
                            '<td><input id="item_price" value="0" class="form-control"></td>';
                        html +=
                            '<td><input id="item_cost_price" value="0" class="form-control"></td>';
                        html +=
                            '<td><input id="item_store_count" value="0" class="form-control"></td>';
                        html +=
                            '<td><input id="item_store_alert" value="0" class="form-control"></td>';
                        html +=
                            '<td style="text-align:center;"><button id="item_fill" type="button" class="btn-primary btn" >批量填充</button></td>';
                        html += '</tr>';
                        //继续拼接
                        $.each(result, function (i, v) {
                            let sku_code = '';
                            let goods_value_id = $("input[name=product_code]").val();
                            html +=
                                '<tr style="text-align: center;"class="spec_table">';
                            if ($.isArray(v) == false) {
                                var value_ids = goods_value_id + v.spec_value_id;
                                var value_names = v.spec_name + ':' + v.spec_value;
                                sku_code += v.spec_value;
                                html += '<td >' + v.spec_value + '</td>';
                            } else {
                                var value_ids = '';
                                var value_names = '';
                                $.each(v, function (i2, v2) {

                                    html += '<td style="color:' + v2.data_color + '">' + v2.spec_value + '</td>';
                                    value_ids += goods_value_id + v2.spec_value_id + '_';
                                    value_names += v2.spec_name + ':' + v2
                                            .spec_value +
                                        ' ';
                                    sku_code += '-' + v2.spec_value;
                                });
                                value_ids = value_ids.slice(0, -1);
                                value_names = value_names.slice(0, -1);
                            }
                            html +=
                                '<td ><input class="item_price form-control" name="item[' +
                                value_ids +
                                '][price]" value="0"><input type="hidden" name="item[' +
                                value_ids +
                                '][value_names]" value="' + value_names +
                                '"><input type="hidden" name="item[' + value_ids +
                                '][value_ids]" value="' + value_ids + '"></td>';
                            html +=
                                '<td><input class="item_cost_price form-control" name="item[' +
                                value_ids +
                                '][cost_price]" value="0"></td>';
                            html +=
                                '<td><input class="item_store_count form-control" name="item[' +
                                value_ids +
                                '][store_count]" value="0"></td>';
                            html +=
                                '<td><input class="item_store_alert form-control" name="item[' +
                                value_ids +
                                '][store_alert]" value="0"></td>';
                            html +=
                                '<td><input class="form-control" name="item[' +
                                value_ids +
                                '][sku_no]"  type="text" value="' + sku_no + sku_code + '"></td>';
                            html +=
                                '<td ><i class="fa fa-trash delete-item" style="font-size: 20px; cursor:pointer"></i></td>';

                            html += '</tr>';
                        });
                        $('#spec_input_table').find('tbody').html(html);


                    });

                }
            });


            $(document).on('click', '#item_fill', function () {
                var item_price = $('#item_price').val();
                var item_cost_price = $('#item_cost_price').val();
                var item_store_count = $('#item_store_count').val();
                var item_store_alert = $('#item_store_alert').val();
                $('.item_price').val(item_price);
                $('.item_cost_price').val(item_cost_price);
                $('.item_store_count').val(item_store_count);
                $('.item_store_alert').val(item_store_alert);

            });
            $(document).on('click', '.delete-item', function () {
                $(this).closest('tr').remove();

            });
            //oss upload


        });
        $(function () {
            $(document).on('click', "#product_code_generate", function () {
                let $code = String(Math.random()).substring(2, 15);

                $("input[name=product_code]").val($code);


            });
            $("#my-awesome-dropzone").dropzone({
                url: 'https://sewans-upload.oss-cn-shanghai.aliyuncs.com',
                method: "post",
                autoProcessQueue: true,
                maxfiles: 15,
                timeout: null,
                parallelUploads: 3,
                accept: function (file, done) {

                    $.ajax({
                        url: "{{route('oss.upload')}}",
                        data: {
                            _token: '{{csrf_token()}}'
                        },
                        type: 'POST',
                        dataType: 'json',
                        success: function (re) {
                            var res = JSON.parse(re);
                            file.policy = res.policy;
                            file.KeyId = res.accessid;
                            file.signature = res.signature;
                            file.newName = 'product/' + new Date().getFullYear() + '-' + new Date().getMonth() + 1 + '-' + new Date().getDay() +'/'+ md5(file.name) + '.' + file.name.split('.').pop();
                            console.log(file.newName);
                            $(file.previewTemplate).addClass('uploading');
                            done();
                        },

                    });
                },

                sending: function (file, xhr, formData) {
                    formData.append("key",file.newName);
                    formData.append("policy", file.policy);
                    formData.append("OSSAccessKeyId", file.KeyId);
                    formData.append("success_action_status", "200");//让服务端返回200,不然，默认会返回204
                    formData.append("signature", file.signature);
                },
                success: function (re) {

                    $('#wrapper').append('<input type="hidden" name="goods_images[]" value="'+re.newName+'">');


                }
                {{--  autoProcessQueue : true,--}}
                {{-- addRemoveLinks: true,--}}
                {{-- url: 'https://sewans-upload.oss-cn-shanghai.aliyuncs.com',--}}

                {{-- // renameFile: function (file) {--}}
                {{-- //    return  md5(file.name) + file.name;--}}
                {{-- //--}}
                {{-- // },--}}
                {{--init:function(){--}}
                {{--     $.ajax({--}}
                {{--         url: "{{route('oss.upload')}}",--}}
                {{--         data: {--}}
                {{--             _token: '{{csrf_token()}}'--}}
                {{--         },--}}
                {{--         type: 'POST',--}}
                {{--         dataType: 'JSON',--}}
                {{--         success: function (re) {--}}
                {{--             var res = JSON.parse(re);--}}
                {{--             var policy = res.policy;--}}
                {{--             var KeyId =res.accessid;--}}
                {{--             var signature = res.signature;--}}

                {{--         }--}}
                {{--     });--}}
                {{-- },--}}
                {{-- sending: function(file, xhr, formData) {--}}

                {{--     formData.append("key",md5(file.name) + file.name);--}}
                {{--    formData.append("policy",policy);--}}
                {{--    formData.append("KeyId" , KeyId);--}}
                {{--     formData.append("success_action_status", "200");//让服务端返回200,不然，默认会返回204--}}
                {{--      formData.append("signature",res.signature);--}}

                {{--     console.log(formData)--}}

                {{-- }--}}


            });
            $("#product_thumb").dropzone({
                url: 'https://sewans-upload.oss-cn-shanghai.aliyuncs.com',
                method: "post",
                autoProcessQueue: true,
                maxfiles: 1,
                timeout: null,
                accept: function (file, done) {

                    $.ajax({
                        url: "{{route('oss.upload')}}",
                        data: {
                            _token: '{{csrf_token()}}'
                        },
                        type: 'POST',
                        dataType: 'json',
                        success: function (re) {
                            var res = JSON.parse(re);
                            file.policy = res.policy;
                            file.KeyId = res.accessid;
                            file.signature = res.signature;
                            file.newName = 'product/' + new Date().getFullYear() + '-' + new Date().getMonth() + 1 + '-' + new Date().getDay() +'/thumb_'+ md5(file.name) + '.' + file.name.split('.').pop();
                            $(file.previewTemplate).addClass('uploading');
                            done();
                        },

                    });
                },

                sending: function (file, xhr, formData) {
                    formData.append("key",file.newName);
                    formData.append("policy", file.policy);
                    formData.append("OSSAccessKeyId", file.KeyId);
                    formData.append("success_action_status", "200");//让服务端返回200,不然，默认会返回204
                    formData.append("signature", file.signature);
                },
                success: function (re) {

                    $('#imgThumb').append('<input type="hidden" name="product_thumb" value="'+re.newName+'">');


                }
                {{--  autoProcessQueue : true,--}}
                {{-- addRemoveLinks: true,--}}
                {{-- url: 'https://sewans-upload.oss-cn-shanghai.aliyuncs.com',--}}

                {{-- // renameFile: function (file) {--}}
                {{-- //    return  md5(file.name) + file.name;--}}
                {{-- //--}}
                {{-- // },--}}
                {{--init:function(){--}}
                {{--     $.ajax({--}}
                {{--         url: "{{route('oss.upload')}}",--}}
                {{--         data: {--}}
                {{--             _token: '{{csrf_token()}}'--}}
                {{--         },--}}
                {{--         type: 'POST',--}}
                {{--         dataType: 'JSON',--}}
                {{--         success: function (re) {--}}
                {{--             var res = JSON.parse(re);--}}
                {{--             var policy = res.policy;--}}
                {{--             var KeyId =res.accessid;--}}
                {{--             var signature = res.signature;--}}

                {{--         }--}}
                {{--     });--}}
                {{-- },--}}
                {{-- sending: function(file, xhr, formData) {--}}

                {{--     formData.append("key",md5(file.name) + file.name);--}}
                {{--    formData.append("policy",policy);--}}
                {{--    formData.append("KeyId" , KeyId);--}}
                {{--     formData.append("success_action_status", "200");//让服务端返回200,不然，默认会返回204--}}
                {{--      formData.append("signature",res.signature);--}}

                {{--     console.log(formData)--}}

                {{-- }--}}


            });
            {{--(function( $ ){--}}
            {{--    // 当domReady的时候开始初始化--}}
            {{--    $(function() {--}}
            {{--        let imageArr = [];--}}
            {{--        var $wrap = $('#uploader'),--}}

            {{--            // 图片容器--}}
            {{--            $queue = $( '<ul class="filelist"></ul>' )--}}
            {{--                .appendTo( $wrap.find( '.queueList' ) ),--}}

            {{--            // 状态栏，包括进度和控制按钮--}}
            {{--            $statusBar = $wrap.find( '.statusBar' ),--}}

            {{--            // 文件总体选择信息。--}}
            {{--            $info = $statusBar.find( '.info' ),--}}

            {{--            // 上传按钮--}}
            {{--            $upload = $wrap.find( '.uploadBtn' ),--}}

            {{--            // 没选择文件之前的内容。--}}
            {{--            $placeHolder = $wrap.find( '.placeholder' ),--}}

            {{--            $progress = $statusBar.find( '.progress' ).hide(),--}}

            {{--            // 添加的文件数量--}}
            {{--            fileCount = 0,--}}

            {{--            // 添加的文件总大小--}}
            {{--            fileSize = 0,--}}

            {{--            // 优化retina, 在retina下这个值是2--}}
            {{--            ratio = window.devicePixelRatio || 1,--}}

            {{--            // 缩略图大小--}}
            {{--            thumbnailWidth = 110 * ratio,--}}
            {{--            thumbnailHeight = 110 * ratio,--}}

            {{--            // 可能有pedding, ready, uploading, confirm, done.--}}
            {{--            state = 'pedding',--}}

            {{--            // 所有文件的进度信息，key为file id--}}
            {{--            percentages = {},--}}
            {{--            // 判断浏览器是否支持图片的base64--}}
            {{--            isSupportBase64 = ( function() {--}}
            {{--                var data = new Image();--}}
            {{--                var support = true;--}}
            {{--                data.onload = data.onerror = function() {--}}
            {{--                    if( this.width != 1 || this.height != 1 ) {--}}
            {{--                        support = false;--}}
            {{--                    }--}}
            {{--                }--}}
            {{--                data.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";--}}
            {{--                return support;--}}
            {{--            } )(),--}}

            {{--            // 检测是否已经安装flash，检测flash的版本--}}
            {{--            flashVersion = ( function() {--}}
            {{--                var version;--}}

            {{--                try {--}}
            {{--                    version = navigator.plugins[ 'Shockwave Flash' ];--}}
            {{--                    version = version.description;--}}
            {{--                } catch ( ex ) {--}}
            {{--                    try {--}}
            {{--                        version = new ActiveXObject('ShockwaveFlash.ShockwaveFlash')--}}
            {{--                            .GetVariable('$version');--}}
            {{--                    } catch ( ex2 ) {--}}
            {{--                        version = '0.0';--}}
            {{--                    }--}}
            {{--                }--}}
            {{--                version = version.match( /\d+/g );--}}
            {{--                return parseFloat( version[ 0 ] + '.' + version[ 1 ], 10 );--}}
            {{--            } )(),--}}

            {{--            supportTransition = (function(){--}}
            {{--                var s = document.createElement('p').style,--}}
            {{--                    r = 'transition' in s ||--}}
            {{--                        'WebkitTransition' in s ||--}}
            {{--                        'MozTransition' in s ||--}}
            {{--                        'msTransition' in s ||--}}
            {{--                        'OTransition' in s;--}}
            {{--                s = null;--}}
            {{--                return r;--}}
            {{--            })(),--}}

            {{--            // WebUploader实例--}}
            {{--            uploader;--}}

            {{--        if ( !WebUploader.Uploader.support('flash') && WebUploader.browser.ie ) {--}}

            {{--            // flash 安装了但是版本过低。--}}
            {{--            if (flashVersion) {--}}
            {{--                (function(container) {--}}
            {{--                    window['expressinstallcallback'] = function( state ) {--}}
            {{--                        switch(state) {--}}
            {{--                            case 'Download.Cancelled':--}}
            {{--                                alert('您取消了更新！')--}}
            {{--                                break;--}}

            {{--                            case 'Download.Failed':--}}
            {{--                                alert('安装失败')--}}
            {{--                                break;--}}

            {{--                            default:--}}
            {{--                                alert('安装已成功，请刷新！');--}}
            {{--                                break;--}}
            {{--                        }--}}
            {{--                        delete window['expressinstallcallback'];--}}
            {{--                    };--}}

            {{--                    var swf = './expressInstall.swf';--}}
            {{--                    // insert flash object--}}
            {{--                    var html = '<object type="application/' +--}}
            {{--                        'x-shockwave-flash" data="' +  swf + '" ';--}}

            {{--                    if (WebUploader.browser.ie) {--}}
            {{--                        html += 'classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" ';--}}
            {{--                    }--}}

            {{--                    html += 'width="100%" height="100%" style="outline:0">'  +--}}
            {{--                        '<param name="movie" value="' + swf + '" />' +--}}
            {{--                        '<param name="wmode" value="transparent" />' +--}}
            {{--                        '<param name="allowscriptaccess" value="always" />' +--}}
            {{--                        '</object>';--}}

            {{--                    container.html(html);--}}

            {{--                })($wrap);--}}

            {{--                // 压根就没有安转。--}}
            {{--            } else {--}}
            {{--                $wrap.html('<a href="http://www.adobe.com/go/getflashplayer" target="_blank" border="0"><img alt="get flash player" src="http://www.adobe.com/macromedia/style_guide/images/160x41_Get_Flash_Player.jpg" /></a>');--}}
            {{--            }--}}

            {{--            return;--}}
            {{--        } else if (!WebUploader.Uploader.support()) {--}}
            {{--            alert( 'Web Uploader 不支持您的浏览器！');--}}
            {{--            return;--}}
            {{--        }--}}

            {{--        // 实例化--}}
            {{--        uploader = WebUploader.create({--}}
            {{--            pick: {--}}
            {{--                id: '#filePicker',--}}
            {{--                label: '点击选择图片'--}}
            {{--            },--}}
            {{--            formData: {--}}
            {{--                // 这里的token是外部生成的长期有效的，如果把token写死，是可以上传的。--}}
            {{--                _token:'{{csrf_token()}}'--}}
            {{--                // 我想上传时再请求服务器返回token，改怎么做呢？反复尝试而不得。谢谢大家了！--}}
            {{--                //uptoken_url: '127.0.0.1:8080/examples/upload_token.php'--}}
            {{--            },--}}
            {{--            dnd: '#dndArea',--}}
            {{--            paste: '#uploader',--}}
            {{--            swf: '../../dist/Uploader.swf',--}}
            {{--            chunked: false,--}}
            {{--            chunkSize: 512 * 1024,--}}
            {{--            server: 'https://sewans-upload.oss-cn-shanghai.aliyuncs.com',--}}
            {{--            // runtimeOrder: 'flash',--}}

            {{--            accept: {--}}
            {{--                title: 'Images',--}}
            {{--                extensions: 'gif,jpg,jpeg,bmp,png',--}}
            {{--                mimeTypes: 'image/*'--}}
            {{--            },--}}

            {{--            // 禁掉全局的拖拽功能。这样不会出现图片拖进页面的时候，把图片打开。--}}
            {{--            disableGlobalDnd: true,--}}
            {{--            fileNumLimit: 300,--}}
            {{--            fileSizeLimit: 200 * 1024 * 1024,    // 200 M--}}
            {{--            fileSingleSizeLimit: 50 * 1024 * 1024    // 50 M--}}
            {{--        });--}}

            {{--        uploader.on('uploadBeforeSend', function (obj, data, headers) {--}}


            {{--            // expire 过期才去获取下面的信息--}}
            {{--            $.ajax({--}}
            {{--                type : "POST",--}}
            {{--                url : "{{route('oss.upload')}}",--}}
            {{--                timeout : 10000,--}}
            {{--                dataType:"JSON",--}}

            {{--                success : function(res) {--}}

            {{--                    // var res = JSON.parse(obj2);--}}
            {{--                    let $res = JSON.parse(res);--}}
            {{--                    let suffix = data.name.split('.').pop();--}}
            {{--                    let imgName = md5(data.name)+'.'+suffix;--}}
            {{--                    imageArr.push(imgName);--}}
            {{--                    data = $.extend(data,{--}}
            {{--                        'key' : `product/${imgName}`,--}}
            {{--                        'policy': $res.policy,--}}
            {{--                        'OSSAccessKeyId': $res.accessid,--}}
            {{--                        'success_action_status' : '200', //让服务端返回200,不然，默认会返回204--}}
            {{--                        'signature': $res.signature,--}}
            {{--                    });--}}


            {{--                },--}}
            {{--                error : function(XMLHttpRequest, textStatus, errorThrown) {--}}
            {{--                    alert("ajax error");--}}
            {{--                },--}}

            {{--                async : false--}}
            {{--            });--}}

            {{--            headers['Access-Control-Allow-Origin'] = "*";--}}
            {{--        });--}}

            {{--        // 拖拽时不接受 js, txt 文件。--}}
            {{--        uploader.on( 'dndAccept', function( items ) {--}}
            {{--            var denied = false,--}}
            {{--                len = items.length,--}}
            {{--                i = 0,--}}
            {{--                // 修改js类型--}}
            {{--                unAllowed = 'text/plain;application/javascript ';--}}

            {{--            for ( ; i < len; i++ ) {--}}
            {{--                // 如果在列表里面--}}
            {{--                if ( ~unAllowed.indexOf( items[ i ].type ) ) {--}}
            {{--                    denied = true;--}}
            {{--                    break;--}}
            {{--                }--}}
            {{--            }--}}

            {{--            return !denied;--}}
            {{--        });--}}

            {{--        // uploader.on('filesQueued', function() {--}}
            {{--        //     uploader.sort(function( a, b ) {--}}
            {{--        //         if ( a.name < b.name )--}}
            {{--        //           return -1;--}}
            {{--        //         if ( a.name > b.name )--}}
            {{--        //           return 1;--}}
            {{--        //         return 0;--}}
            {{--        //     });--}}
            {{--        // });--}}

            {{--        // 添加“添加文件”的按钮，--}}
            {{--        uploader.addButton({--}}
            {{--            id: '#filePicker2',--}}
            {{--            label: '继续添加'--}}
            {{--        });--}}

            {{--        uploader.on('ready', function() {--}}
            {{--            window.uploader = uploader;--}}
            {{--        });--}}

            {{--        // 当有文件添加进来时执行，负责view的创建--}}
            {{--        function addFile( file ) {--}}
            {{--            var $li = $( '<li id="' + file.id + '">' +--}}
            {{--                '<p class="title">' + file.name + '</p>' +--}}
            {{--                '<p class="imgWrap"></p>'+--}}
            {{--                '<p class="progress"><span></span></p>' +--}}
            {{--                '</li>' ),--}}

            {{--                $btns = $('<div class="file-panel">' +--}}
            {{--                    '<span class="cancel">删除</span>' +--}}
            {{--                    '<span class="rotateRight">向右旋转</span>' +--}}
            {{--                    '<span class="rotateLeft">向左旋转</span></div>').appendTo( $li ),--}}
            {{--                $prgress = $li.find('p.progress span'),--}}
            {{--                $wrap = $li.find( 'p.imgWrap' ),--}}
            {{--                $info = $('<p class="error"></p>'),--}}

            {{--                showError = function( code ) {--}}
            {{--                    switch( code ) {--}}
            {{--                        case 'exceed_size':--}}
            {{--                            text = '文件大小超出';--}}
            {{--                            break;--}}

            {{--                        case 'interrupt':--}}
            {{--                            text = '上传暂停';--}}
            {{--                            break;--}}

            {{--                        default:--}}
            {{--                            text = '上传失败，请重试';--}}
            {{--                            break;--}}
            {{--                    }--}}

            {{--                    $info.text( text ).appendTo( $li );--}}
            {{--                };--}}

            {{--            if ( file.getStatus() === 'invalid' ) {--}}
            {{--                showError( file.statusText );--}}
            {{--            } else {--}}
            {{--                // @todo lazyload--}}
            {{--                $wrap.text( '预览中' );--}}
            {{--                uploader.makeThumb( file, function( error, src ) {--}}
            {{--                    var img;--}}

            {{--                    if ( error ) {--}}
            {{--                        $wrap.text( '不能预览' );--}}
            {{--                        return;--}}
            {{--                    }--}}

            {{--                    if( isSupportBase64 ) {--}}
            {{--                        img = $('<img src="'+src+'">');--}}
            {{--                        $wrap.empty().append( img );--}}
            {{--                    } else {--}}
            {{--                        $.ajax('../../server/preview.php', {--}}
            {{--                            method: 'POST',--}}
            {{--                            data: src,--}}
            {{--                            dataType:'json'--}}
            {{--                        }).done(function( response ) {--}}
            {{--                            if (response.result) {--}}
            {{--                                img = $('<img src="'+response.result+'">');--}}
            {{--                                $wrap.empty().append( img );--}}
            {{--                            } else {--}}
            {{--                                $wrap.text("预览出错");--}}
            {{--                            }--}}
            {{--                        });--}}
            {{--                    }--}}
            {{--                }, thumbnailWidth, thumbnailHeight );--}}

            {{--                percentages[ file.id ] = [ file.size, 0 ];--}}
            {{--                file.rotation = 0;--}}
            {{--            }--}}

            {{--            file.on('statuschange', function( cur, prev ) {--}}
            {{--                if ( prev === 'progress' ) {--}}
            {{--                    $prgress.hide().width(0);--}}
            {{--                } else if ( prev === 'queued' ) {--}}
            {{--                    $li.off( 'mouseenter mouseleave' );--}}
            {{--                    $btns.remove();--}}
            {{--                }--}}

            {{--                // 成功--}}
            {{--                if ( cur === 'error' || cur === 'invalid' ) {--}}
            {{--                    // console.log( file.statusText );--}}
            {{--                    showError( file.statusText );--}}
            {{--                    percentages[ file.id ][ 1 ] = 1;--}}
            {{--                } else if ( cur === 'interrupt' ) {--}}
            {{--                    showError( 'interrupt' );--}}
            {{--                } else if ( cur === 'queued' ) {--}}
            {{--                    percentages[ file.id ][ 1 ] = 0;--}}
            {{--                } else if ( cur === 'progress' ) {--}}
            {{--                    $info.remove();--}}
            {{--                    $prgress.css('display', 'block');--}}
            {{--                } else if ( cur === 'complete' ) {--}}
            {{--                    $li.append( '<span class="success"></span>' );--}}
            {{--                }--}}

            {{--                $li.removeClass( 'state-' + prev ).addClass( 'state-' + cur );--}}
            {{--            });--}}

            {{--            $li.on( 'mouseenter', function() {--}}
            {{--                $btns.stop().animate({height: 30});--}}
            {{--            });--}}

            {{--            $li.on( 'mouseleave', function() {--}}
            {{--                $btns.stop().animate({height: 0});--}}
            {{--            });--}}

            {{--            $btns.on( 'click', 'span', function() {--}}
            {{--                var index = $(this).index(),--}}
            {{--                    deg;--}}

            {{--                switch ( index ) {--}}
            {{--                    case 0:--}}
            {{--                        uploader.removeFile( file );--}}
            {{--                        return;--}}

            {{--                    case 1:--}}
            {{--                        file.rotation += 90;--}}
            {{--                        break;--}}

            {{--                    case 2:--}}
            {{--                        file.rotation -= 90;--}}
            {{--                        break;--}}
            {{--                }--}}

            {{--                if ( supportTransition ) {--}}
            {{--                    deg = 'rotate(' + file.rotation + 'deg)';--}}
            {{--                    $wrap.css({--}}
            {{--                        '-webkit-transform': deg,--}}
            {{--                        '-mos-transform': deg,--}}
            {{--                        '-o-transform': deg,--}}
            {{--                        'transform': deg--}}
            {{--                    });--}}
            {{--                } else {--}}
            {{--                    $wrap.css( 'filter', 'progid:DXImageTransform.Microsoft.BasicImage(rotation='+ (~~((file.rotation/90)%4 + 4)%4) +')');--}}
            {{--                    // use jquery animate to rotation--}}
            {{--                    // $({--}}
            {{--                    //     rotation: rotation--}}
            {{--                    // }).animate({--}}
            {{--                    //     rotation: file.rotation--}}
            {{--                    // }, {--}}
            {{--                    //     easing: 'linear',--}}
            {{--                    //     step: function( now ) {--}}
            {{--                    //         now = now * Math.PI / 180;--}}

            {{--                    //         var cos = Math.cos( now ),--}}
            {{--                    //             sin = Math.sin( now );--}}

            {{--                    //         $wrap.css( 'filter', "progid:DXImageTransform.Microsoft.Matrix(M11=" + cos + ",M12=" + (-sin) + ",M21=" + sin + ",M22=" + cos + ",SizingMethod='auto expand')");--}}
            {{--                    //     }--}}
            {{--                    // });--}}
            {{--                }--}}


            {{--            });--}}

            {{--            $li.appendTo( $queue );--}}
            {{--        }--}}

            {{--        // 负责view的销毁--}}
            {{--        function removeFile( file ) {--}}
            {{--            var $li = $('#'+file.id);--}}

            {{--            delete percentages[ file.id ];--}}
            {{--            updateTotalProgress();--}}
            {{--            $li.off().find('.file-panel').off().end().remove();--}}
            {{--        }--}}

            {{--        function updateTotalProgress() {--}}
            {{--            var loaded = 0,--}}
            {{--                total = 0,--}}
            {{--                spans = $progress.children(),--}}
            {{--                percent;--}}

            {{--            $.each( percentages, function( k, v ) {--}}
            {{--                total += v[ 0 ];--}}
            {{--                loaded += v[ 0 ] * v[ 1 ];--}}
            {{--            } );--}}

            {{--            percent = total ? loaded / total : 0;--}}


            {{--            spans.eq( 0 ).text( Math.round( percent * 100 ) + '%' );--}}
            {{--            spans.eq( 1 ).css( 'width', Math.round( percent * 100 ) + '%' );--}}
            {{--            updateStatus();--}}
            {{--        }--}}

            {{--        function updateStatus() {--}}
            {{--            var text = '', stats;--}}

            {{--            if ( state === 'ready' ) {--}}
            {{--                text = '选中' + fileCount + '张图片，共' +--}}
            {{--                    WebUploader.formatSize( fileSize ) + '。';--}}
            {{--            } else if ( state === 'confirm' ) {--}}
            {{--                stats = uploader.getStats();--}}
            {{--                if ( stats.uploadFailNum ) {--}}
            {{--                    text = '已成功上传' + stats.successNum+ '张照片至XX相册，'+--}}
            {{--                        stats.uploadFailNum + '张照片上传失败，<a class="retry" href="#">重新上传</a>失败图片或<a class="ignore" href="#">忽略</a>'--}}
            {{--                }--}}

            {{--            } else {--}}
            {{--                stats = uploader.getStats();--}}
            {{--                text = '共' + fileCount + '张（' +--}}
            {{--                    WebUploader.formatSize( fileSize )  +--}}
            {{--                    '），已上传' + stats.successNum + '张';--}}

            {{--                if ( stats.uploadFailNum ) {--}}
            {{--                    text += '，失败' + stats.uploadFailNum + '张';--}}
            {{--                }--}}
            {{--            }--}}

            {{--            $info.html( text );--}}
            {{--        }--}}

            {{--        function setState( val ) {--}}
            {{--            var file, stats;--}}

            {{--            if ( val === state ) {--}}
            {{--                return;--}}
            {{--            }--}}

            {{--            $upload.removeClass( 'state-' + state );--}}
            {{--            $upload.addClass( 'state-' + val );--}}
            {{--            state = val;--}}

            {{--            switch ( state ) {--}}
            {{--                case 'pedding':--}}
            {{--                    $placeHolder.removeClass( 'element-invisible' );--}}
            {{--                    $queue.hide();--}}
            {{--                    $statusBar.addClass( 'element-invisible' );--}}
            {{--                    uploader.refresh();--}}
            {{--                    break;--}}

            {{--                case 'ready':--}}
            {{--                    $placeHolder.addClass( 'element-invisible' );--}}
            {{--                    $( '#filePicker2' ).removeClass( 'element-invisible');--}}
            {{--                    $queue.show();--}}
            {{--                    $statusBar.removeClass('element-invisible');--}}
            {{--                    uploader.refresh();--}}
            {{--                    break;--}}

            {{--                case 'uploading':--}}
            {{--                    $( '#filePicker2' ).addClass( 'element-invisible' );--}}
            {{--                    $progress.show();--}}
            {{--                    $upload.text( '暂停上传' );--}}
            {{--                    break;--}}

            {{--                case 'paused':--}}
            {{--                    $progress.show();--}}
            {{--                    $upload.text( '继续上传' );--}}
            {{--                    break;--}}

            {{--                case 'confirm':--}}
            {{--                    $progress.hide();--}}
            {{--                    $( '#filePicker2' ).removeClass( 'element-invisible' );--}}
            {{--                    $upload.text( '开始上传' );--}}

            {{--                    stats = uploader.getStats();--}}
            {{--                    if ( stats.successNum && !stats.uploadFailNum ) {--}}
            {{--                        setState( 'finish' );--}}
            {{--                        return;--}}
            {{--                    }--}}
            {{--                    break;--}}
            {{--                case 'finish':--}}
            {{--                    stats = uploader.getStats();--}}
            {{--                    if ( stats.successNum ) {--}}
            {{--                        alert( '上传成功' );--}}
            {{--                    } else {--}}
            {{--                        // 没有成功的图片，重设--}}
            {{--                        state = 'done';--}}
            {{--                        location.reload();--}}
            {{--                    }--}}
            {{--                    break;--}}
            {{--            }--}}

            {{--            updateStatus();--}}
            {{--        }--}}

            {{--        uploader.onUploadProgress = function( file, percentage ) {--}}
            {{--            var $li = $('#'+file.id),--}}
            {{--                $percent = $li.find('.progress span');--}}

            {{--            $percent.css( 'width', percentage * 100 + '%' );--}}
            {{--            percentages[ file.id ][ 1 ] = percentage;--}}
            {{--            updateTotalProgress();--}}
            {{--        };--}}

            {{--        uploader.onFileQueued = function( file ) {--}}

            {{--            fileCount++;--}}
            {{--            fileSize += file.size;--}}

            {{--            if ( fileCount === 1 ) {--}}
            {{--                $placeHolder.addClass( 'element-invisible' );--}}
            {{--                $statusBar.show();--}}
            {{--            }--}}

            {{--            addFile( file );--}}
            {{--            setState( 'ready' );--}}
            {{--            updateTotalProgress();--}}
            {{--        };--}}

            {{--        uploader.onFileDequeued = function( file ) {--}}
            {{--            fileCount--;--}}
            {{--            fileSize -= file.size;--}}

            {{--            if ( !fileCount ) {--}}
            {{--                setState( 'pedding' );--}}
            {{--            }--}}

            {{--            removeFile( file );--}}
            {{--            updateTotalProgress();--}}

            {{--        };--}}

            {{--        uploader.on( 'all', function( type ) {--}}
            {{--            var stats;--}}
            {{--            switch( type ) {--}}
            {{--                case 'uploadFinished':--}}
            {{--                    setState( 'confirm' );--}}
            {{--                    break;--}}

            {{--                case 'startUpload':--}}
            {{--                    setState( 'uploading' );--}}
            {{--                    break;--}}

            {{--                case 'stopUpload':--}}
            {{--                    setState( 'paused' );--}}
            {{--                    break;--}}

            {{--            }--}}
            {{--        });--}}
            {{--        uploader.on( 'uploadSuccess', function( file, response ) {--}}

            {{--          $.each(imageArr,function (i,v) {--}}
            {{--              $('#wrapper').append('<input type="hidden" name="goods_images[]" value="'+v+'">');--}}
            {{--          })--}}


            {{--        });--}}

            {{--        uploader.onError = function( code ) {--}}
            {{--            alert( 'Eroor: ' + code );--}}
            {{--        };--}}

            {{--        $upload.on('click', function() {--}}
            {{--            if ( $(this).hasClass( 'disabled' ) ) {--}}
            {{--                return false;--}}
            {{--            }--}}

            {{--            if ( state === 'ready' ) {--}}
            {{--                uploader.upload();--}}
            {{--            } else if ( state === 'paused' ) {--}}
            {{--                uploader.upload();--}}
            {{--            } else if ( state === 'uploading' ) {--}}
            {{--                uploader.stop();--}}
            {{--            }--}}
            {{--        });--}}

            {{--        $info.on( 'click', '.retry', function() {--}}
            {{--            uploader.retry();--}}
            {{--        } );--}}

            {{--        $info.on( 'click', '.ignore', function() {--}}
            {{--            alert( 'todo' );--}}
            {{--        } );--}}

            {{--        $upload.addClass( 'state-' + state );--}}
            {{--        updateTotalProgress();--}}
            {{--    });--}}

            {{--})( jQuery );--}}



        })


    </script>
@endpush
