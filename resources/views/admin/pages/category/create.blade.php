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
        <form action="{{route('category.store')}}" method="POST">
            @csrf
          <div class="form-group">
            <label for="cate_name">分类名称</label>
            <input type="text" class="form-control"  placeholder="请输入分类名称" name="cate_name" value="{{ old('cate_name') }}">
          </div>
          <div class="form-group">
            <label for="sort">排序</label>
            <input type="text" class="form-control" value="50" name="sort" {{ old('sort') }}>
          </div>
          <div class="form-group">
            <label>菜单</label>
            <select class="form-control mb-3" name="pid">
                <option  value="0">作为顶级分类</option>
                @foreach ($categories as $item)
                <option value="{{$item['id']}}">{{str_repeat('-',$item['level']*3)}}{{$item['cate_name']}}</option>
                    @if ($item['children'])
                        @foreach ($item['children'] as $v)
                            <option value="{{$v['id']}}">{{str_repeat('--',$v['level']*3)}}{{$v['cate_name']}}</option>
                            @if ($v['children'])
                                @foreach ($v['children'] as $k)
                                    <option value="{{$k['id']}}">{{str_repeat('--',$k['level']*3)}}{{$k['cate_name']}}</option>

                                @endforeach
                            @endif

                        @endforeach
                     @endif
                @endforeach


            </select>
        </div>

          <div class="form-group">
            <label>是否显示</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_show" value="1" checked>
                显示
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_show" value="0">
                不显示
              </label>
            </div>

          </div>
          <div class="form-group">
            <label>是否热门</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_hot" value="1" >
                是
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_hot" value="0" checked>
              否
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
