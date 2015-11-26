@extends('layouts.default')

@section('content')
	
	@include('includes.nav')

	@include('includes.header')
	
	@include('includes.services')
	
	{{-- @include('includes.portfolio') --}} 
	
	@include('includes.contacts')

	@include('includes.about') 

	{{-- @include('includes.team') --}}
	
	{{-- @include('includes.testimonials') --}}

	@include('includes.footer')

@endsection