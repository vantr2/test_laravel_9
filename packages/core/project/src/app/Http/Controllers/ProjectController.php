<?php

namespace Core\Project\App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    public function index()
    {
          return view('v-project::index', [
            'name' => 'from Package'
        ]);
    }
  
    public function list()
    {
          return view('v-project::list', [
            'name' => 'Listing'
        ]);
    }
}
