@extends('admin.layout.master')

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">优惠卷管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">优惠卷列表</li>
        </ol>
    </nav>

    @include('admin.layout.message')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-end "><a href="{{route('coupons.create')}}" class="btn btn-outline-primary">添加优惠卷</a>
                    </div>
                   
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        名称
                                    </th>
                                    <th>
                                        优惠码
                                    </th>
                                    <th>
                                        描述
                                    </th>
                                    <th>
                                        用量
                                    </th>
                                    <th>
                                        是否启用
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
                                @foreach ($coupons as $v)
                                    <tr class="text-center">
                                        <td class="py-1">
                                            {{ $v->id }}
                                        </td>
                                        <td>
                                            {{ $v->name }}
                                        </td>
                                        <td>
                                            {{ $v->code }}
                                        </td>
                                        <td>
                                            {{ $v->desc }}
                                        </td>
                                        <td>
                                            {{ $v->current_used }}
                                        </td>
                                        <td>

                                            @if ($v->enabled == 1)
                                            {!! '<span class="badge badge-success">启用中</span>' !!}
                                        @else
                                            {!! '<span class="badge badge-secondary">停用中</span>' !!}
                                        @endif
                                          
                                        </td>
                                        <td>
                                            {{ $v->created_at }}
                                        </td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{ route('coupons.edit', $v->id) }}"
                                                class="btn btn-primary btn-icon-text mr-2">

                                                <i class="btn-icon-prepend" data-feather="check-square"></i>
                                                编辑

                                            </a>

                                            <button type="submit" class="btn btn-danger btn-icon-text delete-coupon"
                                                data-id="{{ $v->id }}" data-name="{{ $v->name }}">
                                                <i class="btn-icon-prepend" data-feather="trash"></i>
                                                删除
                                            </button>



                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                     
                     
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div >
                              </div>
                        </div>
                        <div class="col-sm-12 col-md-7 d-flex justify-content-end py-3">
                           
                                {{ $coupons->links() }}
                            
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
        $('.delete-coupon').click(function() {
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
                        url: `/admin/coupons/${id}`,
                        dataType: "JSON",
                        data: {
                            '_token': '{{ csrf_token() }}'
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
