@extends('layouts.default')

@section('pageTitle', config('meta.about.title'))
@section('pageDescription'){!! config('meta.about.description') !!}@endsection
@section('pageKeywords'){!! config('meta.about.keywords') !!}@endsection

@section('plugins-style')
@endsection

@section('page-style')
@endsection

@section('content')

	@include('includes.testimonial')

	@include('includes.help')

@endsection

@section('modal')
@endsection

@section('plugins-scripts')
@endsection

@section('page-scripts')
@endsection

