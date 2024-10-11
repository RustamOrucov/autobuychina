@extends('admin.layouts.admin')

@section('content')
    <div class="col-12 col-xl-6 d-flex">
        <div class="card radius-10 w-100">
            <div class="card-header border-bottom">
                <h5 class="text-center">Reports </h5><hr>
                <div class="d-flex justify-content-between">
                    <button class="custom-button-report" onclick="filterReports('all')">All Reports {{ $reports->count() }}</button>
                    <button class="custom-button-report" style="color: green" onclick="filterReports('old')">Old Reports {{ $reports->where('status','1')->count() }}</button>
                    <button class="custom-button-report" style="color:red" onclick="filterReports('new')">New Reports {{ $reports->where('status','0')->count() }}</button>
                </div>
            </div>

            <div class="customers-list p-3 mb-3 ps ps--active-y" id="reports-list">
                @foreach($reports as $report)
                <div class="customers-list-item d-flex justify-content-between border-bottom p-2 cursor-pointer report-item"
                     data-id="{{ $report->id }}"
                     data-status="{{ $report->status }}"
                     data-title="{{ $report->title }}"
                     data-description="{{ $report->description }}"
                     data-date="{{ $report->created_at->format('Y:m:d') }}"
                     onclick="showReportDetails(this)">
                    <div class="flex-item">
                        <div>{{$report->created_at->format('Y:m:d')}}</div>
                    </div>
                    <div class="flex-item">
                        <div>{{$report->title}}</div>
                    </div>
                    <div class="flex-item">
                        <div>{{ \Illuminate\Support\Str::limit($report->description, 12) }}</div>
                    </div>
                    <div class="flex-item">
                        @if ($report->status == '1')
                        <div style="color:green">Read</div>
                        @else
                        <div style="color:red">Dont Read</div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal (Pop-up) HTML -->
    <div class="modal fade" id="reportDetailsModal" tabindex="-1" role="dialog" aria-labelledby="reportDetailsModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="reportDetailsModalLabel">Report Details</h5>
          </div>
          <div class="modal-body">
            <p><strong>Date:</strong> <span id="modal-report-date"></span></p>
            <p><strong>Title:</strong> <span id="modal-report-title"></span></p>
            <p><strong>Description:</strong> <span id="modal-report-description"></span></p>
            <input type="hidden" id="modal-report-id">
          </div>
        </div>
      </div>
    </div>

@endsection

<script>
    function showReportDetails(report) {
        document.getElementById('modal-report-date').textContent = report.getAttribute('data-date');
        document.getElementById('modal-report-title').textContent = report.getAttribute('data-title');
        document.getElementById('modal-report-description').textContent = report.getAttribute('data-description');
        var reportId = report.getAttribute('data-id');

        document.getElementById('modal-report-id').value = reportId;
        changeReportStatus(reportId);
        $('#reportDetailsModal').modal('show');
    }

    function changeReportStatus(reportId) {
        $.ajax({
            url: 'reportstatus/' + reportId,
            method: 'GET',
            success: function(response) {
                // console.log('Report status updated successfully.');
            },
            error: function(xhr) {
                // alert('Failed to change the report status!');
            }
        });
    }

    function filterReports(type) {
        var reports = document.querySelectorAll('.report-item');

        reports.forEach(function(report) {

            if (type === 'all') {
                report.style.display = 'flex';
            } else if (type === 'old') {
                if (report.getAttribute('data-status') == '1') {
                    report.style.display = 'flex';
                } else {
                    report.style.setProperty('display', 'none', 'important');
                }
            } else if (type === 'new') {
                if (report.getAttribute('data-status') == '0') {
                    report.style.display = 'flex';
                } else {
                    report.style.setProperty('display', 'none', 'important');
                }
            }
        });
    }
</script>
