@extends('header')
@php
$pageTitle = "About";
@endphp
<header class="interior">
    <div class="text-wrap">
        <h1>About Me</h1>
    </div>
</header>   
<main class="content about">
    <div class="profile-content">
        <div class="container">
            <h2>From Writer to Programmer</h2>
            <p>Since I was young, I've always been drawn to creative actvities - writing, art, cooking. During college, I majored in English, believing that I was going to have a lucrative career as a copywriter.</p>
            <p>I landed my first writing gig at a Web Development company, which required me to put content into Wordpress. So I taught myself html and css. I had never really touched any kind of code before. Teachers I had in highschool had always made it out to be ideal for kids who were super into math.</p>
            <p>I became curious. I wanted to do more. So I kept teaching myself: Codecademy, Lynda.com courses. If I didn't know something, I asked one of the other programmers to teach me.</p>
            <p>Over time, I did more coding and less writing, so much so that my entire job function changed (as well as my title).</p>
            <p>While I still enjoy (creative) writing, I'm greatful that I discovered my love for coding. And with that same fever and passion I have for writing, I now apply to programming.</p>
            <p>I hope to find a home at a company where I can expand my skillset and eventually build something meaningful that I'm truly proud of.</p>
            <a href="myFighter.pdf" target="_blank" class="btn"><i class="fa fa-arrow-down" aria-hidden="true"></i></i> Download My Resume</a>
        </div>
    </div>
    <div class="my-skills">
        <div class="container">
            <h2>What I Can Do For You</h2>
            <p>Listed below are all the languages, softwares, version controls, etc that I am competent in. If you use any of these, I'll feel right at home working on a project for you!</p>
            <div class="row row-pad swoosh row-1" data-name="fadeUp" data-fill-mode="forwards">
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/html5.png" alt="">
                </div>
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/css3.png" alt="">
                </div>
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/js.png" alt="">
                </div>
            </div>
            <div class="row row-pad swoosh row-2" data-name="fadeUp" data-fill-mode="forwards" data-delay="1s">
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/bootstrap.png" alt="">
                </div>
                <div class="col xs-12 col-sm-4" >
                    <img src="images/logos/git.png" alt="">
                </div>
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/wordpress.png" alt="">
                </div>
            </div>
            <div class="row row-pad swoosh row-3" data-name="fadeUp" data-fill-mode="forwards" data-delay="2s">
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/jQuery.png" alt="">
                </div>
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/php.png" alt="">
                </div>
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/sourcetree.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="what-im-learning">
        <div class="container">        
            <h2>What I'm Learning</h2>
            <p>I'm always trying to get more experience under my belt. In addition to going back to school to pursue a Web Programming Certificat,I'm taking online courses / experimenting with the following:</p>
            <div class="row">
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/laravel.png" alt="">
                </div>
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/mysql.png" alt="">
                </div>
                <div class="col xs-12 col-sm-4">
                    <img src="images/logos/sass.png" alt="">
                </div>
            </div>
        </div>
    </div>
</main>
