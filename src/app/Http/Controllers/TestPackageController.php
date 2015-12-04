<?php

namespace Lydia\TestPackage\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestPackageController extends Controller
{
    public function index()
    {
        return view('TestPackage::welcome');
    }
}
