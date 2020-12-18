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
        <h6 class="card-title">添加分类</h6>
        <form action="{{route('category.update',$category->id)}}" method="POST">
            {{ method_field('PUT') }}
            @csrf
          <div class="form-group">
            <label for="cate_name">分类名称</label>
            <input type="text" class="form-control"  placeholder="请输入分类名称" name="cate_name" value="{{$category->cate_name}}">
          </div>
          <div class="form-group">
            <label for="sort">排序</label>
            <input type="text" class="form-control" value="{{$category->sort}}" name="sort" {{ old('sort') }}>
          </div>
          <div class="form-group">
            <label>菜单</label>
            <select class="form-control mb-3" name="pid">
                <option  value="0">作为顶级分类</option>
                @foreach ($categories as $item)
                <option value="{{$item['id']}}"  {{$category->id==$item['id']?'selected':''}}>{{str_repeat('--',$item['level']*3)}}{{$item['cate_name']}}</option>
                @endforeach
               
                
            </select>
        </div>
         
          <div class="form-group">
            <label>是否显示</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_show" value="1" {{$category->is_show==1?'checked':''}}>
                显示
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_show" value="0"  {{$category->is_show==0?'checked':''}}>
                不显示
              </label>
            </div>
        
          </div>
          <div class="form-group">
            <label>是否热门</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_hot" value="1"  {{$category->is_hot==1?'checked':''}} >
                是
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_hot" value="0"  {{$category->is_hot==0?'checked':''}}>
              否
              </label>
            </div>
        
          </div>
    
          <input class="btn btn-primary" type="submit" value="更新">
        </form>
      </div>
    </div>
  </div>
</div>



@endsection