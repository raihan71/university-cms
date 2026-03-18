@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="row">
            @foreach ($stats as $stat)
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="bg-{{ $stat['color'] }} text-white rounded-circle mr-3 d-flex align-items-center justify-content-center"
                                style="width: 56px; height: 56px;">
                                <i class="fas fa-{{ $stat['icon'] }} fa-lg"></i>
                            </div>
                            <div>
                                <p class="mb-1 text-muted text-uppercase small">{{ $stat['label'] }}</p>
                                <h4 class="mb-0 font-weight-bold">{{ number_format($stat['count']) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-white">
                <strong>Catatan Error Terbaru</strong>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Entry</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($logs as $log)
                                <tr>
                                    <td class="font-weight-normal text-monospace small">{{ $log }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted small">No log entries found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <div class="d-flex justify-content-end mb-0">
                    {{ $logs->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
