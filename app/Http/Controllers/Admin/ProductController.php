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
use App\Model\User;
use App\Model\Company;
use App\Model\Employee;
use App\Model\Sector;
use App\Model\Subsector;
use App\Model\Adviser;
use App\Model\Edu;
use App\Model\Position;
use App\Model\Log;
use App\Model\Country;
use App\Model\Application;
use App\Model\Detail;


class ProductController extends Controller
{
    public function index()
    {
        return View('admin.products.index',$data);
    }
}
