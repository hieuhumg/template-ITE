<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('admin.layouts.contents.home');
    }

    public function getTable(){
        return view('admin.tables.table');
    }
    public function getTableDynamic(){
        return view('admin.tables.table_dynamic');
    }
    public function getlookUpTransaction(){
        return view('admin.giaodich.tracuugiaodich');
    }
    public function login(){
        return view('admin.login.signin');
    }
    public function reFund(){
        return view('admin.giaodichhoan.refund');
    }
    public function codeManagement() {
        return view ('admin.quanlytaikhoan.codeManagement');
    }
    public function marchantInfo() {
        return view ('admin.quanlytaikhoan.marchantInfo');
    }
}
