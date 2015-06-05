@extends('layouts.master')

@section('content')

    <div class="top">
        <div class="inner">
            <h2>This is the section you've all been waiting for..</h2>
            <p>(OR you're just here to steal some of my code - good job it's all open source)</p>
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

            <div class="lists">
                <ul>
                    <li><h4>Web Applications</h4></li>
                    <li><a href="http://www.wrangler.co.uk/" target="_blank">Wrangler</a></li>
                    <li><a href="http://uk.lee.com/" target="_blank">Lee Jeans</a></li>
                    <li><a href="http://spotify-thedrop.com/" target="_blank">Spotify The Drop</a></li>
                    <li><a href="http://matchcentre.scottishfa.co.uk/" target="_blank">SFA Match Centre</a></li>
                    <li><a href="http://www.knowledgebank.healthcare/" target="_blank">GSK Knowledge Bank</a></li>
                </ul>
                <ul>
                    <li><h4>Open Source</h4></li>
                    <li><a href="http://github.com/danbondd/todolist-ios" target="_blank">iOS App - To Do List</a></li>
                    <li><a href="http://github.com/danbondd/danbondco" target="_blank">Portfolio Website</a></li>
                    <li><a href="https://github.com/archy-bold/eloquent-searchable" target="_blank">Laravel Eloquent Package</a></li>
                </ul>
            </div>

        </div>
    </main>

@stop