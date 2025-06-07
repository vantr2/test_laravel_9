<?php

namespace Core\Report\App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ReportController extends BaseController
{
    public function index()
    {
          return view('v-report::index', [
            'name' => 'from Package'
        ]);
    }
    public function list()
    {
          return view('v-report::list', [
            'name' => 'Listing'
        ]);
    }
}
