@extends('layouts.layout')

@section('title')
	About Us
@stop

@section('body')
	<h1>This is the contact page.</h1>
	<input type="text">

	{!! Form::text('price', '50$', [
		'class' => "form-control",
		'placeholder' => "Give a price"
	]) !!}

	{!! Form::number('level', 10, [
		'max' => 20,
		'min' => -5
	]) !!}
@stop
