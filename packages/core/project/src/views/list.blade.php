@extends('v-frontend::layouts.' . $layoutName)

@push('vite')
    @vite([
        'packages/core/project/src/vuejs/js/project.js',
    ])
@endpush

@section('content')
    <h2>Code này ở blade của core/project (content)</h2>
    <div id="project-app">
        <project>

        </project>
    </div>
@endsection