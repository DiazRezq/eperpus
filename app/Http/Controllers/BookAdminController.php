<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookAdminController extends Controller
{

    public function index()
    {
        return view('pages.admin.books');
    }
}
