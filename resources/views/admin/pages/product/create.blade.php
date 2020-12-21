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
                            <div class="form-group">
                                <label for="name">商品名称</label>
                                <input id="name" class="form-control" name="product_name" type="text"
                                    value="{{ old('product_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="name">商品价格</label>
                                <input id="name" class="form-control" name="product_price" type="number"
                                    value="{{ old('product_price') }}">
                            </div>
                            <div class="form-group">
                                <label for="name">市场价格</label>
                                <input id="name" class="form-control" name="market_price" type="number"
                                    value="{{ old('market_price') }}">
                            </div>
                            <div class="form-group">
                                <label for="name">成本价格</label>
                                <input id="name" class="form-control" name="product_name" type="number"
                                    value="{{ old('product_name') }}">
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
                                    <select class="form-control" id="cate_3">
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
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">商品运费及基本信息</h6>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-6">
                                        <label>是否包邮:</label>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="is_free_shipping"
                                                        id="is_free_shipping" value="1" checked>
                                                    是
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="is_free_shipping"
                                                        id="is_free_shipping1" value="0">
                                                    否
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>是否推荐:</label>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="is_recommend"
                                                        id="is_recommend" value="1" checked>
                                                    是
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="is_recommend"
                                                        id="is_recommend1" value="0">
                                                    否
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>商品重量(g)</label>
                                <input class="form-control" name="weight" placeholder="(g)" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-6">
                                        <label>是否新货:</label>
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
                                    <div class="col-6">
                                        <label>是否上架:</label>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="product_status"
                                                        id="product_status" value="1" checked>
                                                    是
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="product_status"
                                                        id="product_status1" value="0">
                                                    否
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>商品长度(cm):</label>
                                <input class="form-control" placeholder="(cm)" name="length" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-6">
                                        <label>是否热销:</label>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="is_hot" id="is_hot"
                                                        value="1" checked>
                                                    是
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="is_hot" id="is_hot1"
                                                        value="0">
                                                    否
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-6">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>商品宽度(cm):</label>
                                <input class="form-control" placeholder="(cm)" name="wide" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <label>商品高度(cm):</label>
                                <input class="form-control" placeholder="(cm)" name="height" />
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
                        <h6 class="card-title">商品关键字(用于搜索):</h6>
                        <div>
                            <input name="keyword" id="tags" value="New York,Texas,Florida,New Mexico" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">商品封面图</h6>
                        <input type="file" id="product_thumb" class="border" name="product_thumb"
                            data-allowed-file-extensions="gif png jpg jpeg svg" data-max-file-size-preview="5M" />
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
            <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Dropzone</h6>
                        <p class="card-description">Read the <a href="https://www.dropzonejs.com/" target="_blank"> Official
                                Dropzone.js Documentation </a>for a full list of instructions and other options.</p>
                        {{-- <form action="/file-upload" class="dropzone"
                            id="exampleDropzone"></form> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Dropify</h6>
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

                            <table class="table table-bordered text-center" id="product-attr-table">


                                <tbody class=" text-center">


                                </tbody>
                            </table>
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
    <script src="{{ asset('backend/assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/tinymce/tinymce.min.js') }}"></script>

@endpush

@push('custom-scripts')
    <script src="{{ asset('backend/assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('backend/assets/js/inputmask.js') }}"></script>
    <script src="{{ asset('backend/assets/js/select2.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tinymce.js') }}"></script>
    <script src="{{ asset('backend/assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tags-input.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dropify.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('backend/assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/js/timepicker.js') }}"></script>
    <script>
        $(function() {
            $("#cate_1").on('change', function() {
                let pid = $(this).val();

                $.ajax({
                    type: "get",
                    url: "{{ route('category.api') }}",
                    data: {
                        'pid': pid,
                        "_token": '{{ csrf_token() }}'
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.code != 200) {
                            return;
                        }
                        let str = ` <option value="">请选择二级分类</option>`;
                        $.each(response.data, function(i, v) {
                            str +=
                                `<option value="${v.id}">${v.cate_name}</option>`;
                        });
                        $('#cate_2').html(str);
                        $('#cate_3').html(`<option value="">请选择三级分类</option>`);


                    }
                });
            });
            $("#cate_2").on('change', function() {
                let pid = $(this).val();

                $.ajax({
                    type: "get",
                    url: "{{ route('category.api') }}",
                    data: {
                        'pid': pid,
                        "_token": '{{ csrf_token() }}'
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.code != 200) {
                            return;
                        }
                        let str = ` <option value="">请选择三级分类</option>`;
                        $.each(response.data, function(i, v) {
                            str +=
                                `<option value="${v.id}">${v.cate_name}</option>`;
                        });
                        $('#cate_3').html(str);


                    }
                });
            });


            $(document).on('click', '.delete-item', function() {
                $(this).closest('tr').remove();
            })
        });

        $("#goods_type_id").on('change', function() {
            type_id = $(this).val();
            $.ajax({
                type: "get",
                url: "{{ route('type.getAttr') }}",
                data: {
                    'type_id': type_id,
                    "_token": '{{ csrf_token() }}'
                },
                dataType: "JSON",
                'success': function(response) {
                    if (response.code != 200) {
                        alert(response.msg);
                        return;
                    }
                    //根据获取的数据，拼接html代码，显示到页面
                    // var attrs = response.data.attrs;
                    var specs = response.data.attrs;
                    //遍历数组，一条一条数据拼接处理
                    var spec_html = '<tr><td colspan="2" class=" text-left">商品规格</td></tr>';
                    $.each(specs, function(i, v) {
                        //i 是数组中的索引，v是一条数据（json格式对象）
                        //属性名称
                        spec_html += '<tr class="spec_name text-center" spec_id="' +
                            v.id +
                            '">';
                        spec_html += '<td spec_name="' + v.attribute_name +
                            '" >' + v
                            .attribute_name + '：</td>';
                        spec_html += '<td>';
                        $.each(v.attr_values, function(index, value) {
                            spec_html +=
                                '<button type="button" spec_value_id="' +
                                value.id +
                                '" class="btn " style="color:'+value.attribute_color_value+'" data-color="'+value.attribute_color_value+'">' +
                                value
                                .attribute_value + '</button> ';
                        });
                        spec_html += '</td>';
                        spec_html += '</tr>';
                    });
                    //将拼接好的html字符串，放到页面显示
                    $('#product-attr-table').find('tbody').html(spec_html);



                    $('#product-attr-table').on('click', 'button', function() {
                        $(this).toggleClass('btn-primary').toggleClass('btn-light');
                        var spec_data = {};
                        $('.spec_name').find('button.btn-light').each(function(i, v) {
                           
                            var index = $(v).closest('tr').index();
                            var spec_id = $(v).closest('tr').attr('spec_id');
                            var data_color = $(v).data('color');
                            var spec_name = $(v).closest('tr').find('td:first').attr(
                                'spec_name');
                            var spec_value_id = $(v).attr('spec_value_id');
                            var spec_value = $(v).text();
                            if (spec_data[index] == undefined) spec_data[index] = [];
                            spec_data[index].push({
                                spec_id: spec_id,
                                spec_name: spec_name,
                                spec_value_id: spec_value_id,
                                spec_value: spec_value,
                                data_color:data_color
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
                            $.each(result, function(j, v1) {
                                $.each(spec_arr[i], function(k, v2) {
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
                            $.each(result[0], function(i, v) {
                                html +=
                                    '<td style="text-align: center; font-size: 14px; "><b>' +
                                    v.spec_name + '</b></td>';
                            });
                        }
                        html += '<td><b>购买价</b></td>';
                        html += '<td><b>成本价</b></td>';
                        html += '<td><b>库存</b></td>';
                        html += '<td><b>图片</b></td>';
                        html +=
                            '<td style="text-align: center; font-size: 14px;"><b>操作</b></td>';
                        html += '</tr>';
                        //拼接批量填充行
                        html += '<tr >';
                        if ($.isArray(result[0]) == false) {
                            html += '<td><b></b></td>';
                        } else {
                            $.each(result[0], function(i, v) {
                                html += '<td><b></b></td>';
                            });
                        }
                        html +=
                            '<td><input id="item_price" value="0" class="form-control"></td>';
                        html +=
                            '<td><input id="item_cost_price" value="0" class="form-control"></td>';
                        html +=
                            '<td><input id="item_store_count" value="0" class="form-control"></td>';
                        html += '<td></td>';
                        html +=
                            '<td style="text-align:center;"><button id="item_fill" type="button" class="btn-primary btn" >批量填充</button></td>';
                        html += '</tr>';
                        //继续拼接
                        $.each(result, function(i, v) {
                            
                            html +=
                                '<tr style="text-align: center;"class="spec_table">';
                            if ($.isArray(v) == false) {
                                var value_ids = v.spec_value_id;
                                var value_names = v.spec_name + ':' + v.spec_value;
                                html += '<td >' + v.spec_value + '</td>';
                            } else {
                                var value_ids = '';
                                var value_names = '';
                                $.each(v, function(i2, v2) {
                                    console.log(v2);
                                    html += '<td style="color:'+v2.data_color+'">' + v2.spec_value + '</td>';
                                    value_ids += v2.spec_value_id + '_';
                                    value_names += v2.spec_name + ':' + v2
                                        .spec_value +
                                        ' ';
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
                                '<td><input class="form-control" name="item[' +
                                value_ids +
                                '][file][]"  type="file"></td>';
                            html +=
                                '<td ><i class="fa fa-trash delete-item" style="font-size: 20px; cursor:pointer"></i></td>';

                            html += '</tr>';
                        });
                        $('#spec_input_table').find('tbody').html(html);


                    });

                }
            });



            
            $(document).on('click', '#item_fill', function() {
                var item_price = $('#item_price').val();
                var item_cost_price = $('#item_cost_price').val();
                var item_store_count = $('#item_store_count').val();
                $('.item_price').val(item_price);
                $('.item_cost_price').val(item_cost_price);
                $('.item_store_count').val(item_store_count);

            });
            $(document).on('click', '.delete-item', function() {
                $(this).closest('tr').remove();

            });


        });

    </script>
@endpush
