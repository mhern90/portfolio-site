@extends('header')
@section('content')
<header>
    <div class="name-wrap">
        <h1>Melinda Hernandez</h1>
        <h3>Front-end Web Developer</h3>
    </div>
</header>   
<main class="content">
    <div class="section-wrap-intro">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-8">
                    <h1>Hi, I'm Mel.</h1>
                    <p>...and I make cool things!</p>
                    <p>If you poke around long enough, you'll find a good sampling of some of my latest web projects, including professional work, personal projects, and the like.</p>
                    <p>Be sure to check out the <a href="/about">about</a> page for my resume and to see some of the latest things I'm learing.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <img src="images/computer-vector.png" width="350px;" alt="">
                </div>
            </div>
        </div>
    </div>
</main>
<div class="homeboxes">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="homebox">
                        <a href="/portfolio/#professional">
                            <i class="fa fa-briefcase fa-5x" aria-hidden="true"></i>
                            <h3>Professional Work</h3>
                            <p>Looking for websites, applications and pages I've created at work? You'll find them here.</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="homebox">
                        <a href="/portfolio/#personal">
                            <i class="fa fa-desktop fa-5x" aria-hidden="true"></i>
                            <h3>Personal Projects</h3>
                            <p>Stuff I tinker with in my spare time. Feel free to check it out.</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="homebox">
                        <a href="/portfolio/#components">
                            <i class="fa fa-cog fa-5x" aria-hidden="true"></i>
                            <h3>Web Components</h3>
                            <p>Flashy slideshows, fancy accordions &dash; you'll find all of those nifty little widgets here.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hire-me">
        <div class="container">
            <p>Psst. Looking for an associate-level developer? I'm looking for work.</p>
            <a href="/contact" class="classy-btn">Hire Me</a>
        </div>
    </div>
@endsection