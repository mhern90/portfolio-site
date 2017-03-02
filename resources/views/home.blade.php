@extends('header')
@section('content')
@php
$pageTitle = "Home";
@endphp
<header>
    <div class="text-wrap">
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
                        <i class="fa fa-briefcase fa-5x" aria-hidden="true"></i>
                        <h3>Professional Work</h3>
                        <p>Looking for stuff I've created at work? You'll find all that here.</p>
                        <a href="/mywork#professional" class="btn">Let's See it <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="homebox">
                        <i class="fa fa-desktop fa-5x" aria-hidden="true"></i>
                        <h3>Personal Projects</h3>
                        <p>Stuff I tinker with in my spare time. Feel free to check it out.</p>
                        <a href="/mywork#personal" class="btn">Let's See it <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="homebox">
                        <i class="fa fa-cog fa-5x" aria-hidden="true"></i>
                        <h3>Web Components</h3>
                        <p>Flashy slideshows, fancy accordions &dash; you'll find all of those nifty little widgets here.</p>
                        <a href="/mywork#components" class="btn">Let's See it <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hire-me content">
        <div class="container">
            <h1>Psst.</h1>
            <p> Looking for an associate-level developer? I'm looking for work.</p>
            <a href="/contact" class="btn">Hire Me</a>
        </div>
    </div>
@endsection