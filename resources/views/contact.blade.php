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
        <p>Fill in the form below or send me an email: <a href="mailto:hello@danbond.co">hello@danbond.co</a></p>
        @endif
        <p>I'll get back to you as soon as possible.</p>
    </div>

    <form method="POST" action="contact" accept-charset="UTF-8" class="contact-form">

        <input type="hidden" value="{!! csrf_token() !!}" name="_token"/>

        <div class="row field name">
            <label for="name">Name</label>
            {!! $errors->first('name', '<div class="error">:message</div>') !!}
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="field" autocomplete="off" required />
        </div>

        <div class="row field email">
            <label for="email">Email</label>
            {!! $errors->first('email', '<div class="error">:message</div>') !!}
            <input type="email" id="email" name="email" value="{{ old('email') }}"class="field" autocomplete="off" required />
        </div>

        <div class="row field telephone">
            <label for="telephone" class="optional">Telephone</label>
            {!! $errors->first('telephone', '<div class="error">:message</div>') !!}
            <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" class="field" autocomplete="off"/>
        </div>

        <div class="row field url">
            <label for="url" class="optional">Url</label>
            {!! $errors->first('url', '<div class="error">:message</div>') !!}
            <input type="url" id="url" name="url" class="field" value="{{ old('url') }}" autocomplete="off" />
        </div>

        <div class="row textarea message">
            <label for="message">Message</label>
            {!! $errors->first('message', '<div class="error">:message</div>') !!}
            <textarea name="message" id="message" class="field" required>{{ old('message') }}</textarea>
        </div>

        <div class="row submit">
            <input type="submit" value="Send"/>
        </div>

    </form>

    @include('layouts.partials.social')
</div>

@stop