@extends('admin.layout.master')

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
        </ol>
    </nav>

    @include('admin.layout.message')
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">商品搜索</h6>
                    <form>
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">商品分类</label>
                                            <input type="text" class="form-control" placeholder="Enter first name">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">商品名称</label>
                                            <input type="text" class="form-control" placeholder="Enter last name">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">商品编码</label>
                                            <input type="text" class="form-control" placeholder="Enter last name">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">SKU编码</label>
                                            <input type="text" class="form-control" placeholder="Enter last name">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">库存量</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter first name">
                                                </div>
                                                <div class="col-6">

                                                    <input type="text" class="form-control"
                                                           placeholder="Enter first name">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">累积销量</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter first name">
                                                </div>
                                                <div class="col-6">

                                                    <input type="text" class="form-control"
                                                           placeholder="Enter first name">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">发布时间</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="input-group date datepicker" id="ProductStart">
                                                        <input type="text" class="form-control" name="not_before"
                                                               autocomplete="off"><span
                                                            class="input-group-addon"><i
                                                                data-feather="calendar"></i></span>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="input-group date datepicker" id="ProductEnd">
                                                        <input type="text" class="form-control" name="not_after"
                                                               autocomplete="off"><span
                                                            class="input-group-addon"><i
                                                                data-feather="calendar"></i></span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">销售状态</label>
                                            <div class="row">
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                   name="optionsRadios" id="optionsRadios"
                                                                   value="option1">
                                                            上架中
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                   name="optionsRadios" id="optionsRadios1"
                                                                   value="option1">
                                                            下架中
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                            </div>
                            <div class="col-sm-2 d-flex align-items-center justify-content-around">
                                <button class="btn btn-primary" type="submit"><i data-feather="search"></i>搜索</button>
                                <button class="btn  btn-secondary" type="reset"><i data-feather="rotate-cw"></i>重置
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">商品列表</h6>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    商品名称
                                </th>

                                <th>
                                    商品图片
                                </th>
                                <th>
                                    商品价格
                                </th>
                                <th>是否上架</th>
                                <th>是否新品</th>
                                <th>是否热销</th>
                                <th>是否推荐</th>
                                <th>创建时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $v)
                                <tr>
                                    <td>
                                        {{ $v->id }}
                                    </td>
                                    <td>
                                        {{ $v->product_name }}
                                    </td>

                                    <td>
                                        <img src=" {{ $v->product_thumb }}" alt=" {{ $v->product_name }}"
                                             class="image-fluid" style="width: 85px;height: 110px">
                                    </td>
                                    <td>
                                        {{ $v->product_price }}
                                    </td>
                                    <td>

                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input changProductStatus" id="image-status-{{$v->product_code}}" data-url= {{route('updateProductStatus',$v)}} {{$v->status == 1?'checked':''}}>
                                            <label class="custom-control-label" for="image-status-{{$v->product_code}}">
                                                @if ($v->status == 1)
                                                    {!! '<span class="badge badge-success">已上架</span>' !!}
                                                @else
                                                    {!! '<span class="badge badge-secondary">下架中</span>' !!}
                                                @endif

                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($v->is_new == 1)
                                            {!! '<span class="badge badge-success">是</span>' !!}
                                        @else
                                            {!! '<span class="badge badge-secondary">否</span>' !!}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($v->is_hot == 1)
                                            {!! '<span class="badge badge-success">热卖</span>' !!}
                                        @else
                                            {!! '<span class="badge badge-secondary">否</span>' !!}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($v->is_recommend == 1)
                                            {!! '<span class="badge badge-success">推荐中</span>' !!}
                                        @else
                                            {!! '<span class="badge badge-secondary">否</span>' !!}
                                        @endif
                                    </td>
                                    <td>
                                        {{ $v->created_at }}
                                    </td>

                                    <td class="">
                                        <a href="{{ route('product.edit', $v->id) }}"
                                           class="badge badge-light">

                                            <i class="btn-icon-prepend" data-feather="check-square"></i>
                                            编辑

                                        </a>
                                        <a class="badge badge-secondary delete-product" data-id="{{ $v->id }}" data-url="{{route( 'product.destroy',$v)}}"
                                           data-name="{{ $v->product_name }}"> <i class="btn-icon-prepend"
                                                                                  data-feather="trash"></i>
                                            删除</a>


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('plugin-scripts')


    <script src="{{ asset('backend/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush

@push('custom-scripts')



    <script src="{{ asset('backend/assets/js/datepicker.js') }}"></script>

    <script>
        $(function () {
            $('#ProductStart ,#ProductEnd').datepicker({
                clearBtn: true,
                language: "zh-CN",
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true,
                format: 'yyyy-mm-dd'
            });
            $('#type').on('change', function () {
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

@push('custom-scripts')
    <script src="{{ asset('backend/js/admin.js') }}"></script>

    <script>
        $('.delete-product').click(function () {
            var $this = $(this);
            var name = $(this).data("name");
            var id = $(this).data("id");
            let url = $(this).data("url");
            event.preventDefault();
            Swal.fire({
                title: `你确定要删除${name}?`,
                text: "将无法复原",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是的,删除'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        dataType: "JSON",
                        data: {
                            '_token': '{{csrf_token()}}'
                        },
                        success: function (response) {
                            if (response.code != 200) {
                                Swal.fire(
                                    response.msg,
                                    '',
                                    'error'
                                )
                                return;
                            }
                            Swal.fire(
                                response.msg,
                                '',
                                'success'
                            )
                            $this.closest('tr').remove();

                        }
                    });
                }
            })
        });
        $('.changProductStatus').change(function () {
            var $this = $(this);
            var name = $(this).data("name");
            var id = $(this).data("id");
            let url = $(this).data("url");
            event.preventDefault();
            $.ajax({
                type: "PATCH",
                url: url,
                dataType: "JSON",
                data: {
                    '_token': '{{csrf_token()}}'
                },
                success: function (response) {
                    if (response.code != 200) {
                        Swal.fire(
                            response.msg,
                            '',
                            'error'
                        )
                        return;
                    }
                    Swal.fire(
                        response.msg,
                        '',
                        'success'
                    )
                    let sign = response.msg == '已上架'?'success':'secondary';
                    $(".custom-control-label").html(`<span class="badge badge-${sign}">${response.msg}</span>`);


                }
            });
        });

    </script>
@endpush
