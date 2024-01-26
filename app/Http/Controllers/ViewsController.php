<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ViewsRequest;
use App\Service\ViewService;
use Illuminate\Http\Response;

class ViewsController extends Controller
{
    protected ViewService $viewService;

    public function __construct()
    {
        $this->viewService = new ViewService();
    }
}
