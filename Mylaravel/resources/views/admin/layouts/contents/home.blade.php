@extends('admin.layouts.master')
@section('content')
    <style>
        .my-custom-scrollbar {
            position: relative;
            height: 350px;
            overflow: auto;
        }
        /*.table-wrapper-scroll-y  {*/
             /*display: block;*/
         /*}*/
        .tbody {
            display: block;
        }
    </style>
<div class="panel">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="home-panel">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                <h2>Tổng GD(24h)</h2>
            </div>
            <div class="amount">
                202
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="home-panel">
                <i class="fa fa-usd" aria-hidden="true"></i>
                <h2>Doanh thu(24h)</h2>
            </div>
            <div class="amount">
                1.205.000VND
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="home-panel">
                <i class="fa fa-eye" aria-hidden="true"></i>
                <h2>GD nghi ngờ(24h)</h2>
            </div>
            <div class="amount">
                20
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="home-panel">
                <i class="fa fa-exchange" aria-hidden="true"></i>
                <h2>GD hoàn/hủy(24h)</h2>
            </div>
            <div class="amount">
                202
            </div>
        </div>

    </div>
</div>
<div class="home-chart">
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7">
            <div class="x_panel">
                <div class="x_title">
                    <div class="title-flex">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    <h2>Biểu đồ doanh thu 7 ngày gần nhất</small></h2>

                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <canvas id="line-chart"></canvas>
                    <div class="description-t">
                        <div class="box-t">100</div>
                        <p>Đơn vị VND</p>
                        <p class="total">TỔNG: 1,206,000VND</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-5">
            <div class="x_panel">
                <div class="x_title panel-flex">
                    <i class="fa fa-refresh" aria-hidden="true"></i>
                    <h2>Giao Dịch Gần Nhất</h2>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">20</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">01</a>
                            </li>
                            <li><a href="#">02</a>
                            </li>
                            <li><a href="#">03</a>
                            </li>
                            <li><a href="#">04</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">

                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                        <tr>
                            <th scope="col" class="col-4">Mã GD</th>
                            <th scope="col" class="col-4">Thời gian</th>
                            <th scope="col" class="col-4">Giá trị(VND)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

