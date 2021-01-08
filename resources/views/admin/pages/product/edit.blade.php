@extends('admin.layout.master')
@push('plugin-styles')
    <link href="{{ asset('backend/assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet"/>
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
                                               value="{{ $data["product_name"] }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">商品价格</label>
                                        <input class="form-control" name="product_price" type="number"
                                               autocomplete="off"
                                               value="{{ $data["product_price"] }}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">市场价格</label>
                                        <input class="form-control" name="market_price" type="number" autocomplete="off"
                                               value="{{$data["market_price"] }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">成本价格</label>
                                        <input id="name" class="form-control" name="cost_price" type="number"
                                               autocomplete="off"
                                               value="{{ $data["cost_price"] }}">
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
                                               value="{{ $data["product_code"] }}">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">SKU编号</label>
                                        <input id="name" class="form-control" name="sku_code" type="text"
                                               value="{{ $data["sku_code"] }}">

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
                                            <option
                                                value="{{ $v->id }}" {{$v->id == $data["brands_id"] ?'selected':''}}>{{ $v->brand_name }}</option>
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
                                        @foreach ($category_one as $v)
                                            <option
                                                value="{{ $v->id }}" {{$v->id == $data["brands_id"] ?'selected':''}}>{{ $v->cate_name }}</option>
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
                                        @foreach ($category_two as $v)
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
                                    <select class="form-control" id="cate_3" name="category_id">
                                        @foreach ($category_three as $v)
                                            <option value="{{ $v->id }}">{{ $v->cate_name }}</option>
                                        @endforeach

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
                                                   {{$data["is_recommend"]==1 ?'checked':''}}
                                                   id="is_recommend" value="1">
                                            是
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_recommend"
                                                   id="is_recommend1"
                                                   value="0" {{$data["is_recommend"]==0 ?'checked':''}}>
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
                                                   {{$data["is_hot"]==1 ?'checked':''}}
                                                   value="1">
                                            是
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_hot" id="is_hot1"
                                                   value="0" {{$data["is_hot"]==0 ?'checked':''}}>
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
                                                   value="1" {{$data["status"]==1 ?'checked':''}}>
                                            是
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status"
                                                   id="is_recommend1" value="0" {{$data["status"]==1 ?'checked':''}}>
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

                        <div id="imgThumb" data-thumb="{{$data["product_thumb"]}}"></div>
                        <div class="dropzone" id="product_thumb"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">商品详情:</h4>
                        <textarea class="form-control" name="product_content" id="product_editor" rows="10">
                            {{$data["product_content"]}}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">商品相册</h6>
                        <div id="wrapper" data-images="{{json_encode($data['images'])}}"></div>
                        <div class="dropzone" id="my-awesome-dropzone"></div>

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
                                            <option
                                                value="{{ $v->id }}" {{$data['goods_type_id']==$v->id?'selected':''}}>{{ $v->type_name }}</option>
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
                            <input name="keywords" id="tags" value="{{$data['keywords']}}"/>
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

                            <table class="table  text-center" id="spec_input_table"
                                   data-spec="{{json_encode($data['product_spec'])}}">


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
    <script src="{{ asset('backend/assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/tinymce/tinymce.min.js') }}"></script>



@endpush

@push('custom-scripts')

    <script src="{{ asset('backend/assets/js/tinymce.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tags-input.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.18.0/js/md5.min.js"
            integrity="sha512-Hmp6qDy9imQmd15Ds1WQJ3uoyGCUz5myyr5ijainC1z+tP7wuXcze5ZZR3dF7+rkRALfNy7jcfgS5hH8wJ/2dQ=="
            crossorigin="anonymous"></script>
    <script>
        Dropzone.autoDiscover = false;
        $(function () {
            {
                let spec_data = $("#spec_input_table").data('spec');
                console.log(spec_data);
                let str_data = `
                <tr><td style="text-align: center; font-size: 14px; "><b>颜色</b></td><td style="text-align: center; font-size: 14px; "><b>尺寸</b></td><td><b>购买价</b></td><td><b>市场价</b></td><td><b>库存</b></td><td><b>库存预警</b></td><td><b>SKU编号</b></td><td style="text-align: center; font-size: 14px;"><b>操作</b></td></tr>
                <tr><td><b></b></td><td><b></b></td><td><input id="item_price" value="0" class="form-control"></td><td><input id="item_cost_price" value="0" class="form-control"></td><td><input id="item_store_count" value="0" class="form-control"></td><td><input id="item_store_alert" value="0" class="form-control"></td><td></td><td style="text-align:center;"><button id="item_fill" type="button" class="btn-primary btn">批量填充</button></td></tr>
`;
                for (v of spec_data) {
                    str_data += `
            <tr style="text-align: center;" class="spec_table">
                <td style="color:#000000">${v.颜色}</td>
                <td style="color:#000000">${v.尺寸}</td>
                <td><input class="item_price form-control" name="item[${v.value_ids}][price]" value="${v.price}">
                    <input type="hidden" name="item[${v.value_ids}][value_names]" value="${v.value_names}">
                    <input type="hidden" name="item[${v.value_ids}][value_ids]" value="${v.value_ids}">
                </td>
                <td><input class="item_cost_price form-control" name="item[${v.value_ids}][cost_price]" value="${v.cost_price}"></td>
                <td><input class="item_store_count form-control" name="item[${v.value_ids}][store_count]" value="${v.store_count}"></td>
                <td><input class="item_store_alert form-control" name="item[${v.value_ids}][store_alert]" value="${v.store_alert}"></td>
                <td><input class="form-control" name="item[${v.value_ids}][sku_no]" type="text" value="${v.sku_no}"></td>
                <td><i class="fa fa-trash delete-item" style="font-size: 20px; cursor:pointer"></i></td>
            </tr>
            `;
                }

                $('#spec_input_table').find('tbody').html(str_data);


            }
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

        {{--$("#goods_type_id").on('change', function () {--}}
        {{--    type_id = $(this).val();--}}
        {{--    var sku_no = $("input[name=sku_code]").val();--}}
        {{--    $.ajax({--}}
        {{--        type: "get",--}}
        {{--        url: "{{ route('type.getAttr') }}",--}}
        {{--        data: {--}}
        {{--            'type_id': type_id,--}}
        {{--            "_token": '{{ csrf_token() }}'--}}
        {{--        },--}}
        {{--        dataType: "JSON",--}}
        {{--        'success': function (response) {--}}
        {{--            if (response.code != 200) {--}}
        {{--                alert(response.msg);--}}
        {{--                return;--}}
        {{--            }--}}
        {{--            //根据获取的数据，拼接html代码，显示到页面--}}
        {{--            // var attrs = response.data.attrs;--}}
        {{--            var specs = response.data.attrs;--}}
        {{--            //遍历数组，一条一条数据拼接处理--}}
        {{--            var spec_html = '<tr><td colspan="2" class=" text-left">商品规格</td></tr>';--}}
        {{--            $.each(specs, function (i, v) {--}}
        {{--                //i 是数组中的索引，v是一条数据（json格式对象）--}}
        {{--                //属性名称--}}
        {{--                spec_html += '<tr class="spec_name text-center" spec_id="' +--}}
        {{--                    v.id +--}}
        {{--                    '">';--}}
        {{--                spec_html += '<td spec_name="' + v.attribute_name +--}}
        {{--                    '" >' + v--}}
        {{--                        .attribute_name + '：</td>';--}}
        {{--                spec_html += '<td>';--}}
        {{--                $.each(v.attr_values, function (index, value) {--}}
        {{--                    spec_html +=--}}
        {{--                        '<button type="button" spec_value_id="' +--}}
        {{--                        value.id +--}}
        {{--                        '" class="btn " style="color:' + value.attribute_color_value + '" data-color="' + value.attribute_color_value + '">' +--}}
        {{--                        value--}}
        {{--                            .attribute_value + '</button> ';--}}
        {{--                });--}}
        {{--                spec_html += '</td>';--}}
        {{--                spec_html += '</tr>';--}}
        {{--            });--}}
        {{--            //将拼接好的html字符串，放到页面显示--}}
        {{--            $('#product-attr-table').find('tbody').html(spec_html);--}}
        {{--            $(".product-attr-row").removeClass('d-none');--}}


        {{--            $('#product-attr-table').on('click', 'button', function () {--}}
        {{--                $(this).toggleClass('btn-primary').toggleClass('btn-light');--}}
        {{--                var spec_data = {};--}}
        {{--                $('.spec_name').find('button.btn-light').each(function (i, v) {--}}

        {{--                    let index = $(v).closest('tr').index();--}}
        {{--                    let spec_id = $(v).closest('tr').attr('spec_id');--}}
        {{--                    let data_color = $(v).data('color');--}}

        {{--                    let spec_name = $(v).closest('tr').find('td:first').attr(--}}
        {{--                        'spec_name');--}}
        {{--                    let spec_value_id = $(v).attr('spec_value_id');--}}
        {{--                    let spec_value = $(v).text();--}}
        {{--                    if (spec_data[index] == undefined) spec_data[index] = [];--}}
        {{--                    spec_data[index].push({--}}
        {{--                        spec_id: spec_id,--}}
        {{--                        spec_name: spec_name,--}}
        {{--                        spec_value_id: spec_value_id,--}}
        {{--                        spec_value: spec_value,--}}
        {{--                        data_color: data_color,--}}

        {{--                    });--}}
        {{--                });--}}
        {{--                var spec_arr = [];--}}
        {{--                for (var i in spec_data) {--}}
        {{--                    spec_arr.push(spec_data[i]);--}}
        {{--                }--}}
        {{--                //计算笛卡尔积--}}
        {{--                var result = spec_arr[0];--}}
        {{--                for (var i = 1; i < spec_arr.length; i++) {--}}
        {{--                    var temp = [];--}}
        {{--                    $.each(result, function (j, v1) {--}}
        {{--                        $.each(spec_arr[i], function (k, v2) {--}}
        {{--                            if ($.isArray(v1)) {--}}
        {{--                                v1.push(v2);--}}
        {{--                                temp.push(v1);--}}
        {{--                            } else {--}}
        {{--                                temp.push([v1, v2])--}}
        {{--                            }--}}

        {{--                        });--}}
        {{--                    });--}}
        {{--                    result = temp;--}}
        {{--                }--}}
        {{--                var html = ``;--}}
        {{--                //拼接第一行--}}
        {{--                html += '<tr>';--}}
        {{--                if ($.isArray(result[0]) == false) {--}}
        {{--                    html += '<td style="text-align: center; font-size: 14px;"><b>' +--}}
        {{--                        result[0].spec_name + '</b></td>';--}}
        {{--                } else {--}}
        {{--                    $.each(result[0], function (i, v) {--}}
        {{--                        html +=--}}
        {{--                            '<td style="text-align: center; font-size: 14px; "><b>' +--}}
        {{--                            v.spec_name + '</b></td>';--}}
        {{--                    });--}}
        {{--                }--}}
        {{--                html += '<td><b>购买价</b></td>';--}}
        {{--                html += '<td><b>成本价</b></td>';--}}
        {{--                html += '<td><b>库存</b></td>';--}}
        {{--                html += '<td><b>库存预警</b></td>';--}}
        {{--                html += '<td><b>SKU编号</b></td>';--}}
        {{--                html +=--}}
        {{--                    '<td style="text-align: center; font-size: 14px;"><b>操作</b></td>';--}}
        {{--                html += '</tr>';--}}
        {{--                //拼接批量填充行--}}
        {{--                html += '<tr >';--}}
        {{--                if ($.isArray(result[0]) == false) {--}}
        {{--                    html += '<td><b></b></td>';--}}
        {{--                } else {--}}
        {{--                    $.each(result[0], function (i, v) {--}}
        {{--                        html += '<td><b></b></td>';--}}
        {{--                    });--}}
        {{--                }--}}
        {{--                html +=--}}
        {{--                    '<td><input id="item_price" value="0" class="form-control"></td>';--}}
        {{--                html +=--}}
        {{--                    '<td><input id="item_cost_price" value="0" class="form-control"></td>';--}}
        {{--                html +=--}}
        {{--                    '<td><input id="item_store_count" value="0" class="form-control"></td>';--}}
        {{--                html +=--}}
        {{--                    '<td><input id="item_store_alert" value="0" class="form-control"></td>';--}}
        {{--                html +=--}}
        {{--                    '<td style="text-align:center;"><button id="item_fill" type="button" class="btn-primary btn" >批量填充</button></td>';--}}
        {{--                html += '</tr>';--}}
        {{--                //继续拼接--}}
        {{--                $.each(result, function (i, v) {--}}
        {{--                    let sku_code = '';--}}
        {{--                    let goods_value_id = $("input[name=product_code]").val();--}}
        {{--                    html +=--}}
        {{--                        '<tr style="text-align: center;"class="spec_table">';--}}
        {{--                    if ($.isArray(v) == false) {--}}
        {{--                        var value_ids = goods_value_id + v.spec_value_id;--}}
        {{--                        var value_names = v.spec_name + ':' + v.spec_value;--}}
        {{--                        sku_code += v.spec_value;--}}
        {{--                        html += '<td >' + v.spec_value + '</td>';--}}
        {{--                    } else {--}}
        {{--                        var value_ids = '';--}}
        {{--                        var value_names = '';--}}
        {{--                        $.each(v, function (i2, v2) {--}}

        {{--                            html += '<td style="color:' + v2.data_color + '">' + v2.spec_value + '</td>';--}}
        {{--                            value_ids += goods_value_id + v2.spec_value_id + '_';--}}
        {{--                            value_names += v2.spec_name + ':' + v2--}}
        {{--                                    .spec_value +--}}
        {{--                                ' ';--}}
        {{--                            sku_code += '-' + v2.spec_value;--}}
        {{--                        });--}}
        {{--                        value_ids = value_ids.slice(0, -1);--}}
        {{--                        value_names = value_names.slice(0, -1);--}}
        {{--                    }--}}
        {{--                    html +=--}}
        {{--                        '<td ><input class="item_price form-control" name="item[' +--}}
        {{--                        value_ids +--}}
        {{--                        '][price]" value="0"><input type="hidden" name="item[' +--}}
        {{--                        value_ids +--}}
        {{--                        '][value_names]" value="' + value_names +--}}
        {{--                        '"><input type="hidden" name="item[' + value_ids +--}}
        {{--                        '][value_ids]" value="' + value_ids + '"></td>';--}}
        {{--                    html +=--}}
        {{--                        '<td><input class="item_cost_price form-control" name="item[' +--}}
        {{--                        value_ids +--}}
        {{--                        '][cost_price]" value="0"></td>';--}}
        {{--                    html +=--}}
        {{--                        '<td><input class="item_store_count form-control" name="item[' +--}}
        {{--                        value_ids +--}}
        {{--                        '][store_count]" value="0"></td>';--}}
        {{--                    html +=--}}
        {{--                        '<td><input class="item_store_alert form-control" name="item[' +--}}
        {{--                        value_ids +--}}
        {{--                        '][store_alert]" value="0"></td>';--}}
        {{--                    html +=--}}
        {{--                        '<td><input class="form-control" name="item[' +--}}
        {{--                        value_ids +--}}
        {{--                        '][sku_no]"  type="text" value="' + sku_no + sku_code + '"></td>';--}}
        {{--                    html +=--}}
        {{--                        '<td ><i class="fa fa-trash delete-item" style="font-size: 20px; cursor:pointer"></i></td>';--}}

        {{--                    html += '</tr>';--}}
        {{--                });--}}
        {{--                $('#spec_input_table').find('tbody').html(html);--}}


        {{--            });--}}

        {{--        }--}}
        {{--    });--}}


        {{--    $(document).on('click', '#item_fill', function () {--}}
        {{--        var item_price = $('#item_price').val();--}}
        {{--        var item_cost_price = $('#item_cost_price').val();--}}
        {{--        var item_store_count = $('#item_store_count').val();--}}
        {{--        var item_store_alert = $('#item_store_alert').val();--}}
        {{--        $('.item_price').val(item_price);--}}
        {{--        $('.item_cost_price').val(item_cost_price);--}}
        {{--        $('.item_store_count').val(item_store_count);--}}
        {{--        $('.item_store_alert').val(item_store_alert);--}}

        {{--    });--}}
        {{--    $(document).on('click', '.delete-item', function () {--}}
        {{--        $(this).closest('tr').remove();--}}

        {{--    });--}}
        {{--    //oss upload--}}


        {{--});--}}
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
                addRemoveLinks: true,

                init: function () {
                    let arr = $('#wrapper').data('images');
                    myDropzone = this;
                    for (v of arr) {
                        let mockFile = {name: v, size: "125"};
                        myDropzone.emit("addedfile", mockFile);
                        myDropzone.emit("thumbnail", mockFile, v + ',h_120,w_120');
                        myDropzone.emit("complete", v);
                    }
                },
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
                            file.newName = 'product/' + new Date().getFullYear() + '-' + new Date().getMonth() + 1 + '-' + new Date().getDay() + '/' + md5(file.name) + '.' + file.name.split('.').pop();
                            console.log(file.newName);
                            $(file.previewTemplate).addClass('uploading');
                            done();
                        },

                    });
                },

                sending: function (file, xhr, formData) {
                    formData.append("key", file.newName);
                    formData.append("policy", file.policy);
                    formData.append("OSSAccessKeyId", file.KeyId);
                    formData.append("success_action_status", "200");//让服务端返回200,不然，默认会返回204
                    formData.append("signature", file.signature);
                },
                success: function (re) {

                    $('#wrapper').append('<input type="hidden" name="goods_images[]" value="' + re.newName + '">');


                }


            });
            $("#product_thumb").dropzone({

                init: function () {


                    let url = $("#imgThumb").data('thumb');
                    let suffix = url.substr(-11).replace(/\d+/g, "120");
                    let newUrl = url.slice(0, -11) + suffix;
                    myDropzone = this;
                    var mockFile = {name: url, size: "125"};
                    myDropzone.emit("addedfile", mockFile);
                    myDropzone.emit("thumbnail", mockFile, newUrl);
                    myDropzone.emit("complete", mockFile);
                },
                url: 'https://sewans-upload.oss-cn-shanghai.aliyuncs.com',
                method: "post",
                autoProcessQueue: true,
                addRemoveLinks: true,
                maxfiles: 1,
                timeout: null,
                thumbnailHeight: 120,
                thumbnailWidth: 120,
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
                            file.newName = 'product/' + new Date().getFullYear() + '-' + new Date().getMonth() + 1 + '-' + new Date().getDay() + '/thumb_' + md5(file.name) + '.' + file.name.split('.').pop();
                            $(file.previewTemplate).addClass('uploading');
                            done();
                        },

                    });
                },

                sending: function (file, xhr, formData) {
                    formData.append("key", file.newName);
                    formData.append("policy", file.policy);
                    formData.append("OSSAccessKeyId", file.KeyId);
                    formData.append("success_action_status", "200");//让服务端返回200,不然，默认会返回204
                    formData.append("signature", file.signature);
                },
                success: function (re) {

                    $('#imgThumb').append('<input type="hidden" name="product_thumb" value="' + re.newName + '">');


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

        })
    </script>
@endpush
