@extends('layouts.default')

@section('pageTitle', config('meta.contact.title'))
@section('pageDescription'){!! config('meta.contact.description') !!}@endsection
@section('pageKeywords'){!! config('meta.contact.keywords') !!}@endsection

@section('content')

	@include('includes.testimonial')

@endsection

@section('modal')
@endsection

@section('plugins-scripts')
@endsection

@section('page-scripts')
@endsection
