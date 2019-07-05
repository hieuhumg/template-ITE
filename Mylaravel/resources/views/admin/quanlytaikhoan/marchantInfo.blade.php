@extends('admin.layouts.master')
@section('content')

    <div class="title-gd">
        <i class="fa fa-file-text"></i>
        <h3>Tra cứu thông tin đăng ký</h3>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Thông tin chung</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Người đại diện</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Thanh quyết toán</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Tên đơn vị:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <h4>Công ty cổ phần ABC</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Giấy phép kinh doanh:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>48AJNNUB7766</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Địa chỉ:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>Tòa Anh Minh, 46 Ô Chợ Dừa, Đống Đa, Quang Trung, Hà Nội</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Ngành nghề:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>Giao hàng tiết kiệm</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Địa chỉ website:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>https://abc.com.vn</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Ngày đăng ký:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>20/11/2016</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Ngày hoạt động:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>20/12/2016</h4>
                                                        </div>
                                                    </div>
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-12">
                                                            <button class="btn btn-primary" type="button">Cập nhật</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Họ tên:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>Công ty cổ phần ABC</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Số CMND/HC:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>122122646</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Chức vụ:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>Tổng giám đốc</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Số điện thoại:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>03434323243</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                                            <h4>Email:</h4>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <h4>abc@gmail.com</h4>
                                                        </div>
                                                    </div>
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-primary" type="button">Cập nhật</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                    booth letterpress, commodo enim craft beer mlkshk </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
