@extends('layouts.app')

@section('main')

@stack('subheader')
@yield('content')

@endsection

@push('title')
    @php
        $breadcrumb = new \stdClass();
        $breadcrumb->title = "asd";
    @endphp
    {{ ($breadcrumb !== null) ? $breadcrumb->title." | " : '' }}
@endpush
