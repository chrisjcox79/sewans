{{-- <!-- Modal -->
<div class="modal fade" id="user_address" tabindex="-1" role="dialog" aria-labelledby="user_addressTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <h4>有错误发生：</h4>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col">
                        <form class="form-horizontal address-form" role="form" id="app">


                            <!-- inline-template 代表通过内联方式引入组件 -->
                            <!-- 注意这里多了 @change -->
                            <select-district @change="onDistrictChanged" inline-template>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2 text-md-right">省市区</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" v-model="provinceId">
                                            <option value="">选择省</option>
                                            <option v-for="(name, id) in provinces" :value="id">@{{ name }}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" v-model="cityId">
                                            <option value="">选择市</option>
                                            <option v-for="(name, id) in cities" :value="id">@{{ name }}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" v-model="districtId">
                                            <option value="">选择区</option>
                                            <option v-for="(name, id) in districts" :value="id">@{{ name }}</option>
                                        </select>
                                    </div>
                                </div>
                            </select-district>
                            <!-- 插入了 3 个隐藏的字段 -->
                            <!-- 通过 v-model 与 user-addresses-create-and-edit 组件里的值关联起来 -->
                            <!-- 当组件中的值变化时，这里的值也会跟着变 -->
                            <input type="hidden" name="province" v-model="province">
                            <input type="hidden" name="city" v-model="city">
                            <input type="hidden" name="district" v-model="district">
                            <div class="form-group row">
                                <label class="col-form-label text-md-right col-sm-2">详细地址</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-md-right col-sm-2">邮编</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="zip" value="{{ old('zip') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-md-right col-sm-2">姓名</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="contact_name"
                                        value="{{ old('contact_name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-md-right col-sm-2">电话</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="contact_phone"
                                        value="{{ old('contact_phone') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-3"></div>
                                <div class="col-sm-8 modal-footer border-0">

                                    <button type="button" class="btn" data-dismiss="modal">取消</button>
                                    <button type="button" class="btn  add-address">保存</button>

                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}
