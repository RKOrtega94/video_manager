<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Service\ViewService;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    protected ViewService $viewService;

    public function __construct()
    {
        $this->viewService = new ViewService();
    }

    public function index()
    {
        $videos = Video::all();

        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function play($id)
    {
        $video = Video::find($id);

        $this->viewService->store($video);

        return view('videos.play', compact('video'));
    }
}
