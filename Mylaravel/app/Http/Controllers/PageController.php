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
}
