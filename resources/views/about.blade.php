@extends('layouts.master')

@section('content')

<div class="top">
    <div class="inner">
        <h2>So, you must be thinking: who is this guy?</h2>
    </div>
</div>

<div class="inner content">
    <img src="{{ Config::get('app.url') }}assets/images/dan-bond.jpg" alt="Dan Bond"/>
    <h3>Dan Bond</h3>
    <h4>Software Developer.</h4>

    <div class="statement">
        <hr/>
        <p>I am a highly motivated and passionate Software Developer with a penchant for creating robust and scalable applications.</p>
        <p>I love working on a variety of different projects, ranging from bespoke single page web apps to large data driven backend systems. I using a variety of different technologies and I always explore different development routes before I write any code. If I know I could easily write an app in PHP, I'll code in Python or Node.js for a challenge - this highly motivates me as I'm very keen to learn new technologies!</p>
        <p>Over the last few years I've completed a large variety of projects, in several different languages: PHP, Objective-C, Java and most recently Node.js. I regularly contribute to open source projects and I'm currently working on a few apps of my own - you can check them out on <a href="http://github.com/danbondd" target="_blank">GitHub</a></p>
        <p>My daily routine consists of either writing code, listening to code related podcasts, or reading articles/blogs on the latest software trends. I also have a keen interest in DevOps, Server Administration and Android Development. I regularly spin up droplets on <a href="https://www.digitalocean.com/?refcode=46c9d735380f" target="_blank">DigitalOcean</a> that I use for experimenting with new software.</p>
    </div>
</div>

@stop