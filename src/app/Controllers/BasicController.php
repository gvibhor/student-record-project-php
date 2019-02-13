<?php

namespace BasicStructeMod\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BasicController extends Controller
{
    /**
     * MethodsController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return array
     */
    public function getBasic(){
        return ['OK'];
    }

}