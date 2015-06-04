@extends('layouts.master')

@section('content')

    <div class="top">
        <div class="inner">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
        </div>
    </div>

    <main>
        <div class="inner content">

            <div class="statement">
                <h3>Projects</h3>
                <hr/>
                <p>Take a look at some of the projects I've been working on, past and present.</p>
                <p class="small">(Some work on behalf on Carpe Diem and Retrofuzz)</p>
            </div>

            <ul class="brands">
                <li><img src="{{ Config::get('app.url') }}assets/imgs/work/.png" alt=""/></li>
                <li><img src="{{ Config::get('app.url') }}assets/imgs/work/.png" alt=""/></li>
                <li><img src="{{ Config::get('app.url') }}assets/imgs/work/.png" alt=""/></li>
                <li><img src="{{ Config::get('app.url') }}assets/imgs/work/.png" alt=""/></li>
                <li><img src="{{ Config::get('app.url') }}assets/imgs/work/.png" alt=""/></li>
            </ul>

        </div>
    </main>


@stop