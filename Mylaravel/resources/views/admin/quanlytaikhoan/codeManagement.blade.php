@extends('admin.layouts.master')
@section('content')

    <div class="title-gd">
        <i class="fa fa-qrcode" aria-hidden="true"></i>
        <h3>Quản lý mã code</h3>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Access Code
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="QHDK209JFN" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                                <button class="btn btn-primary" type="button">Sinh mã mới</button>
                                <button class="btn btn-primary" type="reset">Lưu file</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
