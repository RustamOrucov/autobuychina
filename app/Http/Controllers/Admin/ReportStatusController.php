<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReportModel;
use Illuminate\Http\Request;

class ReportStatusController extends Controller
{
    public function status($id)
    {
        $report = ReportModel::find($id);

        if (!$report) {
            return response()->json(['error' => 'Report not found'], 404);
        }
        if ($report->status == 0) {
            $report->status = 1;
            $report->save();

            return response()->json(['success' => 'Report status updated to 1'], 200);
        }
        return response()->json(['message' => 'Report status is already 1'], 200);
    }
}
