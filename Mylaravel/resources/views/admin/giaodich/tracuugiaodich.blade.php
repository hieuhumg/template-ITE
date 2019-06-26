@extends('admin.layouts.master')
@section('content')
<style>
    label {
        margin-left: 20px;
    }

    #datepicker {
        width: 180px;
        margin: 0 20px 20px 20px;
    }

    #datepicker>span:hover {
        cursor: pointer;
    }

</style>

<div class="page-title">
    <div class="title_left">
        <i class="fa fa-search" aria-hidden="true"></i>
        <h3>Tra cứu giao dịch</h3>
    </div>
    <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="x_panel">
            <div class="x_content">
                <br>
                <div class="form-group form-flex">
                    <label class="control-label title col-md-2 col-sm-2 col-xs-12" for="first-name">Từ ngày:</span>
                    </label>
                    <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy"> <input
                            class="form-control" readonly="" type="text"> <span class="input-group-addon"><i
                                class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                    <label class="control-label title col-md-2 col-sm-2 col-xs-12" for="first-name">Đến ngày:</span>
                    </label>
                    <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy"> <input
                            class="form-control" readonly="" type="text"> <span class="input-group-addon"><i
                                class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3  col-sm-3  p-0">
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12 m-0 text-right pt-6"
                                for="first-name">Mã GD
                            </label>
                            <div class="col-md-7 col-sm-7 col-xs-12 p-0">
                                <input type="text" id="first-name" required="required"
                                    class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3  col-sm-4  p-0">
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12 m-0 text-right pt-6"
                                for="first-name">Số thẻ/TK
                            </label>
                            <div class="col-md-7 col-sm-7 col-xs-12 p-0">
                                <input type="text" id="first-name" required="required"
                                    class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3  col-sm-3  p-0">
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12 m-0 text-right pt-6"
                                for="first-name">Loại GD
                            </label>
                            <div class="col-md-7 col-sm-7 col-xs-12 p-0">
                                <input type="text" id="first-name" required="required"
                                    class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3  col-sm-2 ">
                        <button type="button" class="btn btn-info btn-sm">Tìm kiếm</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="x_panel">
            <div class="x_content">
                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="datatable" class="table table-striped table-bordered dataTable no-footer"
                                role="grid" aria-describedby="datatable_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 30px;">STT</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 80px;">Mã GD</th>
                                        <th class="sorting_desc" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            aria-sort="descending" style="width: 90px;">Thời gian</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 100px;">Số tiền(VND)</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 150px;">Số thẻ/TK</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 110px;">Tên chủ thẻ/TK</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 20px;">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="">1</td>
                                        <td class="">ferh55345</td>
                                        <td class="sorting_1">24/12/2019-14:20</td>
                                        <td>500.000</td>
                                        <td>212143435325523532</td>
                                        <td>Nguyễn Chí Hiếu</td>
                                        <td><a href="" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">2</td>
                                        <td class="">aerh553f45</td>
                                        <td class="sorting_1">24/12/2019-14:20</td>
                                        <td>500.000</td>
                                        <td>212143435325523532</td>
                                        <td>Chí Hiếu</td>
                                        <td><a href="" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- detail table -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Chi tiết giao dịch</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 text-right">
                            <p>Mã giao dịch:</p>
                            <p>Loại giao dịch:</p>
                            <p>Thơi gian giao dịch:</p>
                            <p>Số tiền:</p>
                    </div>
                    <div class="col-md-6 text-left">
                        <p>95423958992523</p>
                        <p>Giao dịch thanh toán</p>
                        <p>12/05/2019 10:01:02</p>
                        <p>123,000 VND</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

@endsection
