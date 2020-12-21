@extends('admin.layout.master')
@push('plugin-styles')

    <link href="{{ asset('backend/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />


@endpush
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">商品分类</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增分类</li>
        </ol>
    </nav>
    @include('admin.layout.error')
    @include('admin.layout.message')
    <div class="row">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h6 class="card-title">添加属性</h6>
                    <form action="{{ route('attribute.store') }}" method="POST" id="attr-form">
                        @csrf
                        <div class="form-group">
                            <label>商品属性</label>
                            <select class="form-control mb-3" name="goods_type_id" id="goods_types_id">
                                <option selected value="0">请选择商品模型</option>
                                @foreach ($types as $item)
                                    <option value="{{ $item->id }}">{{ $item->type_name }}</option>
                                @endforeach


                            </select>
                        </div>
                       <div class="" id="item-row-table">


                        <div class="row item-row-table" >
                            <div class="col item-row">
                                <div class="row">
                                    <div class="col text-right">
                                        <button type="button" class="btn btn-secondary add-attr-row-item">添加规格值</button>
                                        <button type="button" class="btn  btn-outline-secondary del-attr-row-item">删除</button>
                                    </div>
                                </div>
                                <div class="row attr-table">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">规格名称</label>
                                            <input id="attribute_value" class="form-control " name="attr[0][name]"
                                                type="text" placeholder="如:尺寸,颜色" value="{{ old('attribute_value') }}">
                                        </div>

                                    </div>
                                    <div class="col-md-8 attr-row">
                                        <div class="row attr-row-item">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name">规格值</label>

                                                    <div class="">
                                                        <input id="attribute_value" class="form-control "
                                                            name="attr[0][value][]" type="text" placeholder="如:蓝色"
                                                            value="{{ old('attribute_value') }}">

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-6">

                                                <div class="form-group">
                                                    <label>颜色值</label>

                                                    <div class="color-row">
                                                        <div class="d-flex align-items-center">
                                                            <input type="color" class="form-control"
                                                                name="attr[0][color][]" />
                                                            {{-- <i
                                                                class="fa fa-trash fa-lg delete-item ml-3"></i>
                                                            --}}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                        

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       </div>
                        
                        
                        

                   

                        <div class="row py-3">
                            <div class="col">
                                <button class="btn btn-primary add_attr_row" type="button">继续添加规格</button>
                                <button class="btn btn-primary add_attr_row_del" type="button">删除</button>
                                <input class="btn btn-info float-right" type="submit" value="提交">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('plugin-scripts')
    <script src="{{ asset('backend/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script>
        $(function() {
            $('#goods_types_id').change(function() {
                var $unit = $(this).children("option:selected").text();
                if ($unit === '颜色' || $unit === 'color' || $unit === 'Color') {
                    $("#attribute-color-row").removeClass('d-none');
                } else {
                    $("#attribute-color-row").addClass('d-none');
                }
            });
            $(`#attribute-color`).colorpicker({
                format: 'hex'
            });
            $('#attr-col').colorpicker();
            //append table row
            $(".add_attr_row").on('click', function() {
                var index = $(".item-row-table").length;
                console.log(index);
               //  $(".add_attr_row_del").attr('disabled', false);
                // $html = $(".attr-table").find('tbody tr:first-child').clone(true);

                $("#item-row-table").append(`
                                            
                <div class="row item-row-table" >
                            <div class="col item-row">
                                <div class="row">
                                    <div class="col text-right">
                                        <button type="button" class="btn btn-secondary add-attr-row-item">添加规格值</button>
                                        <button type="button" class="btn  btn-outline-secondary del-attr-row-item">删除</button>

                                    </div>
                                </div>
                                <div class="row attr-table">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">规格名称</label>
                                            <input id="attribute_value" class="form-control " name="attr[${index}][name]"
                                                type="text" placeholder="如:尺寸,颜色" value="{{ old('attribute_value') }}">
                                        </div>

                                    </div>
                                    <div class="col-md-8 attr-row">
                                        <div class="row attr-row-item">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name">规格值</label>

                                                    <div class="">
                                                        <input id="attribute_value" class="form-control "
                                                            name="attr[${index}][value][]" type="text" placeholder="如:蓝色"
                                                            value="{{ old('attribute_value') }}">

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-6">

                                                <div class="form-group">
                                                    <label>颜色值</label>

                                                    <div class="color-row">
                                                        <div class="d-flex align-items-center">
                                                            <input type="color" class="form-control"
                                                                name="attr[${index}][color][]" />
                                                            {{-- <i
                                                                class="fa fa-trash fa-lg delete-item ml-3"></i>
                                                            --}}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                                            `);
            });
            //remove row
            $(".add_attr_row_del").on('click', function() {
                if ($(".attr-table").find('tbody tr').length < 2) {
                    $(this).attr('disabled', true);
                    return;
                } else {
                    $(this).attr('disabled', false);
                }
                $(".attr-table").find('tbody tr:last-child').remove();

            });


            //
            $(document).on('click', ".add-attr-row-item", function() {
            
                var $input = $(this).closest('.item-row').find('.attr-table').children('.attr-row').children('.attr-row-item').clone(true);
                $(this).closest('.item-row').find('.attr-table').children('.attr-row').append($input);
              // console.log($input);
                // $input.find(':text').val('');
                // $input.val('');
                // $(this).after($input);

            });
            $(document).on('click', ".del-attr-row-item", function() {
            
           // var $input = $(this).closest('.item-row').find('.attr-table').children('.attr-row').children('.attr-row-item').clone(true);
            $(this).closest('.item-row').find('.attr-table').children('.attr-row').children('.attr-row-item:last-child').remove();
          // console.log($input);
            // $input.find(':text').val('');
            // $input.val('');
            // $(this).after($input);

        })



            $(document).on('click', ".del-attr-row", function() {

                var $input = $(".attr-row-item:first-child").clone(true);
                $(".attr-row").append($input);
                console.log($input);
                // $input.find(':text').val('');
                // $input.val('');
                // $(this).after($input);

            })


            $(document).on('click', ".delete-item", function() {

                if ($(".attr-table").find('tbody tr').length < 2) {
                    $(this).addClass('d-none');

                } else {
                    $(this).removeClass('d-none');
                }
                $(this).parent().remove();
            })


        });

    </script>
@endpush
