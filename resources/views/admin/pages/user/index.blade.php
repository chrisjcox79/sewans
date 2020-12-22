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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    <p class="card-description">
                        Add class <code>.table-striped</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    User
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                   邮件
                                </th>
                                <th>
                                    电话
                                </th>
                                <th>
                                   创建时间
                                </th>
                                <th>
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $v)
                            <tr>
                                <td class="py-1">
                                    <img src="{{asset($v->avatar)}}" alt="image" class="img-fluid" style="width: 36px;height: 36px">
                                </td>
                                <td>
                                    {{ $v->name }}
                                </td>
                                <td>
                                    {{ $v->email }}
                                </td>
                                <td>
                                    {{ $v->phone }}
                                </td>
                                <td>
                                    {{ $v->created_at }}
                                </td>
                                <td>
                                    <a href="{{ route('users.edit', $v->id) }}"
                                       class=" btn-icon-text mr-2 d-block">

                                        <i class="btn-icon-prepend" data-feather="check-square"></i>
                                        编辑

                                    </a>
                                </td>
                                @endforeach

                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="row ">

                        <div class="col d-flex justify-content-end">
                            {{$users->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@push('custom-scripts')
    <script src="{{ asset('backend/js/admin.js') }}"></script>

    <script>
        $('.delete-cate').click(function() {
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
                        url: `/admin/product/${id}`,
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
