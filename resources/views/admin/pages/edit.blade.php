@extends('admin.layouts.master')

@section('content')

	<h1>Edit : {!! $page->name !!}</h1>
	<br>
	{!! Form::model($page, ['method' => 'patch', 'url' => ['admin/pages', $page->id]]) !!}

		@include ('admin.forms.form', ['submitBtnLabel' => 'Update'])

	{!! Form::close() !!}

@stop