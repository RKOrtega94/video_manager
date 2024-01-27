<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReportResource;
use App\Service\ReportService;
use App\Service\ViewService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReportController extends Controller
{
    protected $reportService;
    protected $viewService;

    public function __construct()
    {
        $this->reportService = new ReportService();
        $this->viewService = new ViewService();
    }

    function viewsReport(): JsonResponse
    {
        try {
            $report = $this->viewService->buildReport();

            return $this->sendResponse(ReportResource::collection($report), 'Report generated successfully.');
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    function searchReport(): JsonResponse
    {
        try {
            $report = $this->reportService->buildSearchReport();

            return $this->sendResponse(ReportResource::collection($report), 'Report generated successfully.');
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
