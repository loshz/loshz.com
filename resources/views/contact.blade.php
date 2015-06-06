@extends('layouts.master')

@section('content')

<div class="top">
    <div class="inner">
        <h2>A conversation is a great place to start!</h2>
    </div>
</div>

<div class="inner content">

    <div class="statement">
        @if (Session::has('message'))
        <h3>{!! Session::get('message') !!}</h3>
        <hr/>
        @else
        <h3>Get in touch</h3>
        <hr/>
        <p>Fill in the form below or send me an email: <a href="mailto:hello@danbond.co">hello@danbond.co</a>.</p>
        @endif
        <p>I'll get back to you as soon as possible.</p>
    </div>

    {!! Form::open(array('class' => 'contact-form')) !!}

        <div class="row field name">
            {!! Form::label('name', 'Name') !!}
            {!! $errors->first('name', '<div class="error">:message</div>') !!}
            <input type="text" id="name" name="name" class="field" autocomplete="off" required />
        </div>

        <div class="row field email">
            {!! Form::label('email', 'Email') !!}
            {!! $errors->first('email', '<div class="error">:message</div>') !!}
            <input type="email" id="email" name="email" class="field" autocomplete="off" required />
        </div>

        <div class="row field telephone">
            {!! Form::label('telephone', 'Telephone', array('class' => 'optional')) !!}
            {!! $errors->first('telephone', '<div class="error">:message</div>') !!}
            <input type="tel" id="telephone" name="telephone" class="field" autocomplete="off"/>
        </div>

        <div class="row field url">
            {!! Form::label('url', 'Url', array('class' => 'optional')) !!}
            {!! $errors->first('url', '<div class="error">:message</div>') !!}
            <input type="url" id="url" name="url" class="field" autocomplete="off" required />
        </div>

        <div class="row textarea message">
            {!! Form::label('message', 'Message') !!}
            {!! $errors->first('message', '<div class="error">:message</div>') !!}
            <textarea name="message" id="message" class="field" required></textarea>
        </div>

        <div class="row submit">
            {!! Form::submit('Send') !!}
        </div>

    {!! Form::close() !!}

    @include('layouts.partials.social')
</div>

@stop