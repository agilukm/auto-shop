<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use View;
use Auth;
use Redirect;
use Carbon;
use Session;
use Mail;
use Response;


class ProductController extends Controller
{
    public function index()
    {
        return View('admin.products.index',$data);
    }
}
