<?php

namespace App\Service;

use App\Models\Searchs;
use App\Models\Video;

class ReportService
{
    protected SessionService $sessionService;

    public function __construct()
    {
        $this->sessionService = new SessionService();
    }

    function storeSearch(array $video)
    {
        $data['video_id'] = $video['id'];

        $data = array_merge($data, $this->sessionService->getSessionData());

        $search = Searchs::create($data);

        return $search;
    }

    function buildSearchReport()
    {
        $searchs = Searchs::with(['video', 'user'])->get();

        $report = [];

        foreach ($searchs as $search) {
            $report[$search->video->title]['searchs'] = $report[$search->video->title]['searchs'] ?? 0;
            $report[$search->video->title]['searchs']++;

            $report[$search->video->title]['users'][$search->user->name ?? 'Anonymous'] = $report[$search->video->title]['users'][$search->user->name ?? 'Anonymous'] ?? 0;
            $report[$search->video->title]['users'][$search->user->name ?? 'Anonymous']++;

            $report[$search->video->title]['browsers'][$search->user_agent] = $report[$search->video->title]['browsers'][$search->user_agent] ?? 0;
            $report[$search->video->title]['browsers'][$search->user_agent]++;

            $report[$search->video->title]['thumbnail'] = $search->video->getThumbnail();
        }

        return $report;
    }
}
