@extends('v-frontend::layouts.' . $layoutName)

@push('vite')
    @vite([
        'packages/core/report/src/vuejs/js/report.js',
    ])
@endpush

@section('content')
    <h2>Code này ở blade của core/report (content)</h2>
    <div id="report-app">
        <report>

        </report>
    </div>
@endsection
