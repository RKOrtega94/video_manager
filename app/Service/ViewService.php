<?php

namespace App\Service;

use App\Models\Video;
use App\Models\Views;

class ViewService
{

    function store(Video $video)
    {
        $sessionService = new SessionService();

        $data['video_id'] = $video->id;

        $data = array_merge($data, $sessionService->getSessionData());

        $view = Views::create($data);

        return $view;
    }

    function buildReport()
    {
        $views = Views::with(['video', 'user'])->get();

        $report = [];

        foreach ($views as $view) {
            $report[$view->video->title]['views'] = $report[$view->video->title]['views'] ?? 0;
            $report[$view->video->title]['views']++;

            $report[$view->video->title]['users'][$view->user->name ?? 'Anonymous'] = $report[$view->video->title]['users'][$view->user->name ?? 'Anonymous'] ?? 0;
            $report[$view->video->title]['users'][$view->user->name ?? 'Anonymous']++;

            $report[$view->video->title]['browsers'][$view->user_agent] = $report[$view->video->title]['browsers'][$view->user_agent] ?? 0;
            $report[$view->video->title]['browsers'][$view->user_agent]++;

            $report[$view->video->title]['thumbnail'] = $view->video->getThumbnail();
        }

        return $report;
    }
}
