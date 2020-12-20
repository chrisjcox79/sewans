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
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">商品属性列表</h6>
                    <p class="card-description">Add class <code>.table-bordered</code></p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        属性名称
                                    </th>
                                   
                                    <th>
                                        创建时间
                                    </th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attributes as $v)
                                    <tr>
                                        <td>
                                            {{ $v->id }}
                                        </td>
                                        <td>
                                            {{ $v->attribute_name }}
                                        </td>
                                    
                                        <td>
                                            {{ $v->created_at }}
                                        </td>

                                        <td class="d-flex">
                                            <a href="{{ route('attribute.edit', $v->id) }}"
                                                class="btn btn-primary btn-icon-text mr-2">

                                                <i class="btn-icon-prepend" data-feather="check-square"></i>
                                                编辑

                                            </a>
                                          
                                                <button type="submit" class="btn btn-danger btn-icon-text delete-attribute"  data-id="{{ $v->id }}"
                                                    data-name="{{ $v->attribute_value }}">
                                                    <i class="btn-icon-prepend" data-feather="trash"></i>
                                                    删除
                                                </button>
                                          

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
@push('custom-scripts')
    <script src="{{ asset('backend/js/admin.js') }}"></script>

    <script>
        $('.delete-attribute').click(function() {
            var $this = $(this);
            var name = $(this).data("name");
            var id = $(this).data("id");
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
                        url: `/admin/attribute/${id}`,
                        dataType: "JSON",
                        data:{
                            '_token':'{{csrf_token()}}'
                        },
                        success: function(response) {
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

    </script>
@endpush
