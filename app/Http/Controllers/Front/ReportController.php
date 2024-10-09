<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportRequest;
use App\Services\RepositoryService\CarFrontService;
use App\Services\RepositoryService\ReportService;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct(protected ReportService $service)
    {

    }


    public function store(ReportRequest $reportRequest){

        if ($reportRequest->filled('trap_field')) {
            return redirect()->back()->withErrors('Invalid form submission.');
        }
        $this->service->store($reportRequest);
        return redirect()->back()->with('success', 'Report send successfuly');
    }
}
