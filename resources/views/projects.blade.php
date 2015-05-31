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
                <h3>Get in touch</h3>
                <hr/>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad beatae, rerum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>

            <div class="work">
                <div class="item wrangler">
                    <div class="image"><img src="{{ Config::get('app.url') }}assets/imgs/work/wrangler.jpg" alt=""/></div>
                </div>
                <div class="item eastpak-lookbook">
                    <div class="image"><img src="{{ Config::get('app.url') }}assets/imgs/work/eastpak.png" alt=""/></div>
                </div>
                <div class="item spotify-the-drop">
                    <div class="image"><img src="{{ Config::get('app.url') }}assets/imgs/work/spotify.jpg" alt=""/></div>
                </div>
                <div class="item sfa-match-centre">
                    <div class="image"><img src="{{ Config::get('app.url') }}assets/imgs/work/sfa.png" alt=""/></div>
                </div>
            </div>

        </div>
    </main>


@stop