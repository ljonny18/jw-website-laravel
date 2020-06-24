@extends('layouts.application')

@section('content')
    {{-- <h1>{{$title}}</h1> --}}
    {{-- <p>{{$abstract}}</p> --}}

    {{-- @if(count($skills) > 0)
        <ul>
            @foreach($skills as $skill)
                <li>{{$skill}}</li>
            @endforeach
        </ul>
    @endif --}}

    <div id="fullpage">

            <?php
                $iwe_link = "https://engine.is.tue.mpg.de/";
                $is_link = "https://is.mpg.de";
                $cyvy_link = "https://cyber-valley.de";
                $ellis_link = "https://ellis.eu";
                $imprs_link = "https://imprs-is.mpg.de";
                $cls_link = "https://learning-systems.org";
            ?>
            
            <div class="section" id="section1">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <img src="{{ asset('images/logo/logo.png') }}" class="header-logo" alt="Jon Williams">

                            <!-- <h1 class="h2">Jon Williams</h1>  -->
                            <!-- <p class="lead lead-lg">My name is Jon. I was born in the Uk and currently living in Germany</p> -->
                            <p class="lead lead-lg">My name is Jon. I was born in the UK and currently living in Germany.</p>
                            <p class="lead">I'm a Web Developer currently working at the <a href="https://is.mpg.de" target="_blank">Max Planck Institute for Intelligent Systems</a> <small><i class="fad fa-external-link text-muted"></i></small>.</p>
                            <p class="lead">When I'm not working, playing with my children or travelling in my van, I can be found in the forest running, riding my motorbike or in my garage making things.</p>
                            <p class="mt-4">
                                <i class="fad fa-laptop-code home-icon text-muted pr-3"></i>
                                <i class="fad fa-baby home-icon text-muted pr-3"></i>
                                <i class="fad fa-shuttle-van home-icon text-muted pr-3"></i>
                                <i class="fad fa-tools home-icon text-muted pr-3"></i>
                                <i class="fad fa-tree home-icon text-muted pr-3"></i>
                                <i class="fad fa-running home-icon text-muted pr-3"></i>
                                <i class="fad fa-motorcycle home-icon text-muted pr-3"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section fp-auto-height">
                <div class="row">
                    <div class="col-12">
                        <p class="text-banner banner-white text-center">
                            Full Stack Developer with over 10 years of experience 
                        </p>
                    </div>
                </div>
            </div>
            <div class="section section-blue">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Professional Profile <span class="text-muted"><i class="fad fa-code"></i></span></h1>
                            <p class="lead">I am a reliable, motivated and enthusiastic Developer with over ten years experience. I provide high attention to detail and have an instinct for good design. 
                            <p>My Professional Career began as a Front-End Developer, however, I have always been interested in the overlap between design and development and soon moved into the world of Full Stack Development.</p>
                            <p>I strive to create attractive, usable and functional applications. I design, build, test and deploy applications covering all phases of the application development life cycle, from start to finish.</p>
                            <p>
                                I am  currently working as a Rails Developer and my daily toolbox consists of, but is not limited to: 
                                <span class="badge badge-green">Ruby on Rails</span>
                                <span class="badge badge-green">RSpec</span>
                                <span class="badge badge-green">RVM</span>
                                <span class="badge badge-green">MVC</span>
                                <span class="badge badge-green">ElasticSearch</span>
                                <span class="badge badge-green">Phusion Passenger</span>
                                <span class="badge badge-green">Capistrano</span>
                                <span class="badge badge-green">GitLab</span>
                                <span class="badge badge-green">PhotoShop</span>
                                <span class="badge badge-green">HTML(5)</span>
                                <span class="badge badge-green">CSS(3)</span>
                                <span class="badge badge-green">JS</span>
                                <span class="badge badge-green">JSON</span>
                                <span class="badge badge-green">MySQL</span>
                                … and all the other various tools, libraries and technologies related to them.
                            </p>
                            <p class="mt-4">
                                <i class="fad fa-laptop-code home-icon pr-3"></i>
                                <i class="fad fa-layer-group home-icon pr-3"></i>
                                <i class="fab fa-git-alt home-icon pr-3"></i>
                                <i class="fab fa-html5 home-icon pr-3"></i>
                                <i class="fab fa-css3 home-icon pr-3"></i>
                                <i class="fab fa-js home-icon pr-3"></i>
                                <i class="fas fa-tachometer-alt-fastest home-icon pr-3"></i>
                            </p>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="section section-green fp-auto-height">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- <p>In my (limited) spare time I like to dabble with and learn new relevant skills and techologies, some of which currently on the hitlist include: <span class="text-muted">Node, React, Gatsby, Django, MongoDB</span>. I also often help friends with any technical or layout aspects of there Worpress websites and blogs</p> -->
                            <p>
                                In my (limited) spare time I like to dabble with and learn new relevant skills and techologies, some of which I currently use or are on the hitlist include: 
                                <span class="badge badge-pink">Node</span>
                                <span class="badge badge-pink">React</span>
                                <span class="badge badge-pink">Vue</span>
                                <span class="badge badge-pink">Gatsby</span>
                                <span class="badge badge-pink">Nuxt</span>
                                <span class="badge badge-pink">Django</span>
                                <span class="badge badge-pink">laravel</span>
                                <span class="badge badge-pink">MongoDB</span>
                                ... I also oftently find myself helping out friends with     Worpress websites and blogs
                            </p>
                             <p class="mt-4">
                                    <i class="fab fa-node home-icon pr-3"></i>
                                    <i class="fab fa-node-js home-icon pr-3"></i>
                                    <i class="fab fa-vuejs home-icon pr-3"></i>
                                    <i class="fab fa-react home-icon pr-3"></i>
                                    <i class="fab fa-laravel home-icon pr-3"></i>
                                    <i class="fab fa-wordpress home-icon pr-3"></i>
                                </p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="section section-blue">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Current projects <span class="text-muted"><i class="fad fa-cogs"></i></span></h1>
                            <p class="lead">I am currently working at the Max Planck Institute for Intelligent Systems where I have developed and am responsible for multiple websites and applications (including the <a href="<?php echo($is_link)?>" target="_blank">Institute Website</a>).</p> 
                            <p>My most recent (ongoing) project is a Custom Content Management System (<a href="<?php echo($iwe_link)?>" target="_blank">Scientific Web Engine</a>) which I have developed to support Institute websites for groups, projects, collaborations and general scientific and research requirements.</p>
                            <p>The CMS is continually in development with already many websites running on it, some of which high profile including <a href="<?php echo($cyvy_link)?>" target="_blank">Cyber Valley</a>, <a href="<?php echo($ellis_link)?>" target="_blank">ELLIS</a>, <a href="<?php echo($imprs_link)?>" target="_blank">IMPRS-IS</a> and <a href="<?php echo($cls_link)?>" target="_blank">CLS</a>:</p>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-auto text-center mt-5 ml-3 mr-3"><a href="<?php echo($is_link) ?>" target="_blank"><img src="{{ asset('images/projects/mpi-is.png') }}" class="img-fluid project-logo" alt="Max Planck Institute for Intelligent Systems"></a></div>
                        <div class="col-md-auto text-center mt-5 ml-3 mr-3"><a href="<?php echo($iwe_link) ?>" target="_blank"><img src="{{ asset('images/projects/engine.png') }}" class="img-fluid project-logo" alt="Scientific Web Engine"></a></div>
                        <div class="col-md-auto text-center mt-5 ml-3 mr-3"><a href="<?php echo($cls_link) ?>" target="_blank"><img src="{{ asset('images/projects/cls.png') }}" class="img-fluid project-logo" alt="Max Planck ETH Center for Learning Systems"></a></div>
                        <div class="col-md-auto text-center mt-5 ml-3 mr-3"><a href="<?php echo($cyvy_link) ?>" target="_blank"><img src="{{ asset('images/projects/cyvy.png') }}" class="img-fluid project-logo" alt="Cyber Valley"></a></div>
                        <div class="col-md-auto text-center mt-5 ml-3 mr-3"><a href="<?php echo($ellis_link) ?>" target="_blank"><img src="{{ asset('images/projects/ellis.png') }}" class="img-fluid project-logo" alt="European Lab for Learning and Intelligent Systems"></a></div>
                        <div class="col-md-auto text-center mt-5 ml-3 mr-3"><a href="<?php echo($imprs_link) ?>" target="_blank"><img src="{{ asset('images/projects/imprs.png') }}" class="img-fluid project-logo" alt="International Max Planck Research School for Intelligent Systems"></a></div>
                    </div>   
                </div>
            </div>
            <div class="section fp-auto-height">
                <div class="row">
                    <div class="col-12">
                        <p class="text-banner banner-white text-center">
                            Personal Profile
                        </p>
                    </div>
                </div>
            </div>

        <script type="text/javascript" src="{{ asset('js/fullpage.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/scrolloverflow.js') }}"></script>
        <script type="text/javascript">
            var myFullpage = new fullpage('#fullpage', {
                // sectionsColor: ['whitesmoke', '#EF476F', '#118AB2', '#06D6A0', '#FFD166', '#EF476F', '#073B4C']
                sectionsColor: ['whitesmoke', '#EF476F', '#118AB2', '#00BF8E', '#118AB2', '#FFD166', '#EF476F', '#073B4C'],
                scrollOverflow: true,
                licenseKey: '93F02C21-A7DE4DC9-858ED377-77E720DC'
            });
        </script>    
@endsection


