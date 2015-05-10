@extends('layouts.master')

@section('content')

<main>
	<div class="title">
		<div class="inner">
			@if(Session::has('flash_message'))
			<h1>{{ Session::get('flash_message') }}</h1>
			<h2>I'll get back to you shortly!</h2>
			@else
			<h1>Get in touch</h1>
			<p>(Even if it's only for a game of table tennis!)</p>
			@endif
		</div>
	</div>

	<div class="inner">
		{!! Form::open(array('url' => 'contact', 'class' => 'contact-form')) !!}

		<div class="row field name">
			{!! Form::label('name', 'Name') !!}
			{!! $errors->first('name', '<div class="error">:message</div>') !!}
			{!! Form::text('name', null, ['class' => 'field', 'autocomplete' => 'off']) !!}
		</div>

		<div class="row field email">
			{!! Form::label('email', 'Email') !!}
			{!! $errors->first('email', '<div class="error">:message</div>') !!}
			{!! Form::text('email', null, ['class' => 'field', 'autocomplete' => 'off']) !!}
		</div>

		<div class="row field telephone">
			{!! Form::label('telephone', 'Telephone', array('class' => 'optional')) !!}
			{!! $errors->first('telephone', '<div class="error">:message</div>') !!}
			{!! Form::text('telephone', null, ['class' => 'field', 'autocomplete' => 'off']) !!}
		</div>

		<div class="row field url">
			{!! Form::label('url', 'Url', array('class' => 'optional')) !!}
			{!! $errors->first('url', '<div class="error">:message</div>') !!}
			{!! Form::text('url', null, ['class' => 'field', 'autocomplete' => 'off']) !!}
		</div>

		<div class="row textarea message">
			{!! Form::label('message', 'Message') !!}
			{!! $errors->first('message', '<div class="error">:message</div>') !!}
			{!! Form::textarea('message', null, ['class' => 'field', 'autocomplete' => 'off']) !!}
		</div>

		<div class="row submit">
			{!! Form::submit('Send') !!}
		</div>

		{!! Form::close() !!}
	</div>
</main>


@stop