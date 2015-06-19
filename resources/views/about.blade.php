@extends('layouts.master')

@section('content')

<div class="top">
    <div class="inner">
        <h2>So, you must be thinking: who is this guy?</h2>
    </div>
</div>

<div class="inner content">
    <img src="{{ Config::get('app.url') }}assets/imgs/dan-bond.jpg" alt="Dan Bond"/>
    <h3>Dan Bond</h3>
    <h4>Sometimes serious, but not too serious.</h4>

    <div class="statement">
        <hr/>
        <p>Hello all! I started writing <i>"code"</i> back when I was in college. Well, at the time I thought I was writing <i>"proper code"</i> but I don't think HTML tables and AS2 really counts anymore... I quickly found my feet and moved into the realms of server side coding, specifically PHP.</p>
        <p>Over the last few years I've completed a large variety of projects, in several different languages: PHP, Objective-C, Java and I regularly contribute to open source projects. I'm currently working on a few apps of my own - you can check them out on
            <a href="http://github.com/danbondd" target="_blank">GitHub</a></p>
        <p>My daily routine consists of either writing code, listening to code related podcasts, or reading articles/blogs on the latest software trends. I also have a keen interest in DevOps, Server Administration and Android Development. I regularly spin up droplets on <a href="https://www.digitalocean.com/?refcode=46c9d735380f" target="_blank">DigitalOcean</a> that I use for experimenting with new software.</p>
        <p>As well as my current expertise, I am actively learning new software languages such as: Python and Java.</p>
    </div>
</div>

@stop