<?php

namespace App\Http\Controllers\Billing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        return view('items');
    }
}
