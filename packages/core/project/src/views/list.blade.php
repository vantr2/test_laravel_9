@extends('v-frontend::layouts.desktop')

@push('vite')
    @vite([
        'packages/project/src/vuejs/js/project.js',
    ])
@endpush

@section('content')
    <h1>Hẻe</h1>
    <div id="project-app">
    </div>
@endsection