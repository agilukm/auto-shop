<?php

namespace App\Http\Controllers\Admin;

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


class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = array();
        return View('admin.dashboard',$data);
    }
}
