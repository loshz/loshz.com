@extends('layouts.master')

@section('content')

<div class="intro">
    <div class="inner">
        <h2>Software Developer,<br/>Open Source Contributor,<br/>Tech Enthusiast.</h2>
        <div class="arrow"></div>
    </div>
</div>

<div id="about">
    <div class="inner">
        <div class="statement">
            <h3>Let's cut to the chase!</h3>
            <hr/>
            <p>I am a highly motivated and competent software developer with a penchant for creating robust and scalable applications. I have extensive knowledge in utilising advanced development methodologies and object oriented approaches, as well as experience in full life cycle development processes.</p>
            <p>Why don't we keep it simple, this is how I work:</p>
        </div>

        <div class="timeline">
            <div class="line"></div>
            <ul>
                <li>
                    <h4>Evaluate</h4>
                    <p>Getting to know a project is where it all starts - you can't build anything until you have a list of objectives and you are 100% clear on what the end goal needs to be.</p>
                </li>
                <li>
                    <h4>Plan & Design</h4>
                    <p>This has to be the most important stage, surely? - Once again, I don't touch a single line of code until I've: assessed application &amp; data structure, researched packages, created database designs, and most importantly written it all down!</p>
                </li>
                <li>
                    <h4>Build & Test</h4>
                    <p>This is where the fun begins! (as long as you've completed the first 2 stages) - Every line of code conforms to the SOLID design patterns and is thoroughly tested using PHPUnit.</p>
                </li>
                <li>
                    <h4>Deploy</h4>
                    <p>It can't get more exciting than this! Compile assets, increment version number, push to the master branch and let your continuous integration (Travis CI in my case) do the rest! All going well, this should leave you feeling rather satisfied.</p>
                </li>
                <li>
                    <h4>Review</h4>
                    <p>I always try and find time to review a project. This doesn't just involve making a list of what worked and what didn't, it's also a great time to write documentation and get any feedback from your users.</p>
                </li>
            </ul>
        </div>

        <div class="lists tech-stack">
            <p>Check out my current tech stack.</p>
            <p>Here are some of my favourite programs: </p>

            <ul>
                <li><h4>DevOps</h4></li>
                <li>Git, GitHub</li>
                <li>Vagrant, VirtualBox</li>
                <li>PhpStorm, Sublime Text, PyCharm</li>
                <li>Travis CI</li>
                <li>Nagios</li>
                <li>Gulp</li>
            </ul>
            <ul>
                <li><h4>Application &amp; Data</h4></li>
                <li>Ubuntu Server</li>
                <li>PHP (Laravel)</li>
                <li>Python (Django)</li>
                <li>Node.js (Express)</li>
                <li>PostgreSQL, MySQL, SQLite</li>
                <li>Redis, Memcached</li>
                <li>Digital Ocean</li>
                <li>Nginx</li>
                <li>HHVM</li>
            </ul>
            <ul>
                <li><h4>Utilities</h4></li>
                <li>Google Analytics</li>
                <li>Mailgun, Mailchimp</li>
                <li>Asana</li>
                <li>Disqus</li>
                <li>Slack</li>
            </ul>
        </div>
    </div>
</div>

@stop