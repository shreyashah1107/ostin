@extends('layouts.default')

@section('pageTitle', config('meta.home.title'))
@section('pageDescription'){!! config('meta.home.description') !!}@endsection
@section('pageKeywords'){!! config('meta.home.keywords') !!}@endsection

@section('plugins-style')
@endsection

@section('page-style')
@endsection

@section('content')

	@include('includes.testimonial')
	
@endsection

@section('modal')
@endsection

@section('plugins-scripts')
@endsection

@section('page-scripts')
@endsection

