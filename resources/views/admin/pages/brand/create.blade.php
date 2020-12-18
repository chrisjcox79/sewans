@extends('admin.layout.master')

@push('plugin-styles')

  <link href="{{ asset('backend/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
  
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">品牌管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">添加品牌</li>
        </ol>
    </nav>
    @include('admin.layout.error')
    @include('admin.layout.message')
    <form class="cmxform" id="signupForm" method="post" action="{{ route('brand.store') }}" novalidate="novalidate" enctype="multipart/form-data"
        onkeydown="if(event.keyCode==13){return false;}">
        @csrf
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">添加品牌</h4>
                        <fieldset>
                            <div class="form-group">
                                <label for="name">品牌名称</label>
                                <input id="name" class="form-control" name="brand_name" type="text" placeholder="品牌名称"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="code">排序</label>
                                <input id="code" class="form-control" name="sort" type="text" 
                                    value="50">
                            </div>
                            <div class="form-group">
                                <label for="password">是否启用</label>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status" id="enabled1" value="1">
                                            是 <i class="input-frame"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status" id="enabled2" checked
                                                value="0">
                                            否
                                            <i class="input-frame"></i></label>
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

                        <input type="file" id="brand-logo" class="border" data-allowed-file-extensions="gif png jpg jpeg svg" data-max-file-size-preview="3M" name="logo"/>

                   
                        <input class="btn btn-primary py-2 float-right mt-5" type="submit" value="添加">
                        
  
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


@push('custom-scripts')
<script src="{{ asset('backend/assets/plugins/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/dropify.js') }}"></script>

@endpush
