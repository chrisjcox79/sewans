@extends('admin.layout.master')

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
        <h6 class="card-title">添加模型</h6>
        <form action="{{route('types.store')}}" method="POST">
            @csrf
          <div class="form-group">
            <label for="cate_name">模型名称</label>
            <input type="text" class="form-control"  placeholder="请输入模型名称" name="type_name" value="{{ old('type_name') }}">
          </div>
          <div class="form-group">
            <label>是否启用</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" value="1" checked>
               启用
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" value="0">
               不启用
              </label>
            </div>
        
          </div>
          <button class="btn btn-primary" type="submit">添加</button>
        </form>
      </div>
    </div>
  </div>
</div>



@endsection