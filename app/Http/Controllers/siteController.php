<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Schema;

use App\Http\Requests;

class siteController extends Controller
{
    public function callItemPage()
    {
        return view('Item');
    }
    public function callListPage()
    {
        return view('list');
    }
    public function dropTable()
    {
        Schema::drop('items');
    }
}
