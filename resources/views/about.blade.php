@extends('layouts.master')

@section('content')

<div class="top">
    <div class="inner">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus earum in iure molestias repellendus ut.</p>
    </div>
</div>

<main>
    <div class="inner content">
        <img src="{{ Config::get('app.url') }}assets/imgs/dan-bond.jpg" alt="Dan Bond"/>
        <h3>Dan Bond</h3>
        <h4>Software Developer / Gamer</h4>
        @include('layouts.partials.social')

        <div class="statement">
            <hr/>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, autem consequuntur dolorum illum laborum maxime, nesciunt omnis perferendis quia tempora totam, voluptatum. Eligendi, error fugiat magnam mollitia odit porro velit?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate debitis deleniti ducimus esse, impedit minima nihil perferendis quam qui quidem, reiciendis temporibus ullam voluptatem.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi laborum tenetur. Aliquam commodi consectetur cupiditate dicta est ipsum maxime nulla, quam sed suscipit temporibus voluptate! Cumque esse expedita id, laudantium modi nobis soluta unde.</p>
        </div>
    </div>
</main>

@stop