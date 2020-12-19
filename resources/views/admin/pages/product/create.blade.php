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
    <form class="cmxform" id="" method="POST" action="{{route('product.store') }}" enctype="multipart/form-data">

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
                        {{-- <form action="/file-upload" class="dropzone" id="exampleDropzone"></form> --}}
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
                                    <select class="form-control" id="brand" name="brands_id">
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
                        <p class="text-right"><button class="btn btn-primary" id="add_attr" type="button">添加属性</button></p>
                        <div class="table-responsive pt-3">
                            <thead>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>颜色</th>
                                        <th>尺码</th>
                                        <th>库存</th>
                                        <th>购买价</th>
                                        <th>成本价</th>
                                        <th>商品图片</th>
                                        <th>操作</th>
                            </thead>
                            <tbody id="product-attr-table">


                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-info" value="add">
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

            $("#add_attr").on('click', function() {
                var index = $("#product-attr-table tr").length;
                console.log(index);
                let $html = `
                    
                    <tr>
                            <td scope="row">
                                <div id="cp-${index}" class="input-group mb-2" title="Using input value">
                                    <input type="text" class="form-control input-lg" value="#DD0F20FF"/ name='product[${index}][color['>
                                    <span class="input-group-append">
                                      <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                    </span>
                                  </div>
                            </td>
                            <td><input type="text" class="form-control" name="product[${index}][size]"></td>
                            <td><input type="text" class="form-control" name="product[${index}][store]"></td>
                            <td><input type="text" class="form-control" name="product[${index}][sale]"></td>
                            <td><input type="text" class="form-control" name="product[${index}][origin]"></td>
                            <td>  <input type="file" id="product_attr_img-${index}" class="border" name="product[${index}][image][]" data-allowed-file-extensions="gif png jpg jpeg svg" data-max-file-size-preview="5M" data-height="80" data-width="80" />
    </td>
                            <td><i class="fa fa-trash fa-lg"></i></td>
                        </tr>
                    `;

                $("#product-attr-table").append($html);
                $(`#cp-${index}`).colorpicker();
                $(`#product_attr_img-${index}`).dropify({
                    messages: {
                        'default': '上传图片',
                        'replace': 'Drag and drop or click to replace',
                        'remove': '删除',
                        'error': 'Ooops, something wrong happended.',
                       
                    }
                });
            });
        });

    </script>
@endpush
