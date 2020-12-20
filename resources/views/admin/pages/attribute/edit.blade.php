@extends('admin.layout.master')
@push('plugin-styles')

    <link href="{{ asset('backend/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}"
        rel="stylesheet" />

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
                    <h6 class="card-title">修改属性</h6>
                    <form action="{{ route('attribute.update',$attribute->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>商品属性</label>
                            <select class="form-control mb-3" name="goods_type_id" id="goods_types_id">
                              <option selected value="0">请选择商品属性</option>
                                @foreach ($types as $item)
                                    <option value="{{ $item->id }}" {{$attribute->goods_type_id==$item->id?'selected':''}}>{{ $item->type_name }}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">规格值</label>
                            <input id="attribute_value" class="form-control" name="attribute_value" type="text"
                                placeholder="规格值名称" value="{{ $attribute->attribute_value }}">
                        </div>

                        <div class="form-group d-none" id="attribute-color-row">
                            <label>颜色值</label>
                           
                            <div id="cp12" class="input-group">
                              <input type="text" class="form-control input-lg" value="{{ $attribute->attribute_color }}" name="attribute_color"/>
                              <span class="input-group-append">
                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                              </span>
                            </div>
                        </div>
                        <input class="btn btn-primary" type="submit" value="添加">
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
          
              var $unit  =  $('#goods_types_id').children("option:selected").text();
              if($unit ==='颜色' || $unit ==='color' || $unit ==='Color'){
                $("#attribute-color-row").removeClass('d-none');
              }else{
                $("#attribute-color-row").addClass('d-none');
              }
           
            $('#goods_types_id').change(function(){
              var $unit  = $(this).children("option:selected").text();
              if($unit ==='颜色' || $unit ==='color' || $unit ==='Color'){
                $("#attribute-color-row").removeClass('d-none');
              }else{
                $("#attribute-color-row").addClass('d-none');
              }
            });
            $(`#attribute-color`).colorpicker({
              format: 'hex'
            });
            $('#cp12').colorpicker();

        });

    </script>
@endpush
