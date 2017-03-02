@extends('header')
@php
$pageTitle = "My Work";
@endphp
<header class="interior dark">
    <div class="text-wrap">
        <h1>My Work</h1>
    </div>
</header>  
<main>
    <div class="content portfolio"> 
        <div class="portfolio-wrap">        
            <div class="container">
                <h2>Check out my stuff!</h2>
                <p>Over the past couple of years, I've completed a number of projects &mdash; from complete websites, to single web pages, components and everything in-between. In this portfolio, you will find some of my latest work from both a professional settting as well as personal projects.</p>
            </div>
        </div>
        <div id="professional" class="portfolio-wrap">
            <div class="container">
                <h2>Professional Work</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="img-wrap">
                            <a href="https://barefootinheels.com/" target="_blank">
                                <img src="/images/professional/barefootinheels-sm.png" alt="">
                            </a>
                            <div class="overlay">
                                <p><strong>Barefoot In Heels <br/> (Site) </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="img-wrap">
                            <a href="https://staging.bigtuna.com/southwest.deli.group/site/our-restaurant-locations/" target="_blank">
                                <img src="/images/professional/southwestdelilocations-sm.png" alt="">
                            </a>
                            <div class="overlay">
                                <p><strong>Southwest Deli <br/> (Interior Pages)</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="img-wrap">
                            <a href="http://www.lenroofing.com/blog/" target="_blank">
                                <img src="/images/professional/lenroofingblog-sm.png" alt="">
                            </a>
                            <div class="overlay">
                                <p><strong>Len Roofing <br/> (blog)</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="img-wrap">
                            <a href="https://endeavortree.com/" target="_blank">
                                <img src="/images/professional/endeavortree-sm.png" alt="">
                            </a>
                            <div class="overlay">
                                <p><strong>Endeavor Tree <br/> (Interior Pages) </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="img-wrap">
                            <a href="https://hmsmeetingservices.com/" target="_blank">
                                <img src="/images/professional/hmsmeetingservices-sm.png" alt="">
                            </a>
                            <div class="overlay">
                                <p><strong>HMS Meeting <br/> (Interior Pages)</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="img-wrap">
                            <a href="https://staging.bigtuna.com/daves.and.kelly/site/radiology-equipment-inspections-louisville-ky/" target="_blank">
                                <img src="/images/professional/daveskellytabbed-sm.png" alt="">
                            </a>
                            <div class="overlay">
                                <p><strong>Daves &amp; Kelly <br/> (Interior Pages)</strong></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <div id="personal" class="portfolio-wrap">
            <div class="container">
                <h2>Personal Projects</h2>
                <p><em>(Coming Soon)</em></p>
            </div>
        </div>
        <div id="components" class="portfolio-wrap">
            @include('components')
        </div>
    </div>
</main>
