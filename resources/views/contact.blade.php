@extends('layouts.master')

@section('content')

<div class="top">
    <div class="inner">
        <h2>A conversation is a great place to start!</h2>
    </div>
</div>

<main>
	<div class="inner content">

        <div class="statement">
            <h3>Get in touch</h3>
            <hr/>
            <p>Fill in the form below or send me an email: <a href="mailto:info@danbond.co">info@danbond.co</a>.</p>
            <p>I'll get back to you as soon as possible.</p>
        </div>

		{!! Form::open(array('class' => 'contact-form')) !!}

            <div class="row field name">
                {!! Form::label('name', 'Name') !!}
                {!! $errors->first('name', '<div class="error">:message</div>') !!}
                {!! Form::text('name', null, ['class' => 'field', 'autocomplete' => 'off', 'required' => true]) !!}
            </div>

            <div class="row field email">
                {!! Form::label('email', 'Email') !!}
                {!! $errors->first('email', '<div class="error">:message</div>') !!}
                {!! Form::email('email', null, ['class' => 'field', 'autocomplete' => 'off', 'required' => true]) !!}
            </div>

            <div class="row field telephone">
                {!! Form::label('telephone', 'Telephone', array('class' => 'optional')) !!}
                {!! $errors->first('telephone', '<div class="error">:message</div>') !!}
                <input type="tel" name="telephone" class="field" autocomplete="off"/>
            </div>

            <div class="row field url">
                {!! Form::label('url', 'Url', array('class' => 'optional')) !!}
                {!! $errors->first('url', '<div class="error">:message</div>') !!}
                {!! Form::url('url', null, ['class' => 'field', 'autocomplete' => 'off']) !!}
            </div>

            <div class="row textarea message">
                {!! Form::label('message', 'Message') !!}
                {!! $errors->first('message', '<div class="error">:message</div>') !!}
                {!! Form::textarea('message', null, ['class' => 'field', 'required' => true]) !!}
            </div>

            <div class="row submit">
                {!! Form::submit('Send') !!}
            </div>

		{!! Form::close() !!}

        @include('layouts.partials.social')
	</div>
</main>


@stop