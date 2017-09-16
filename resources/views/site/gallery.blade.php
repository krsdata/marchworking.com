
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 
        @include('partials.menu') 
                <div class="main-container md-padding">

                    <div class="container gallery fadeIn animated"> 
			<div class="row"> 
                            <a href="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

                                <img src="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" alt="">

                                <span class="on-hover">
                                        <span class="hover-caption">Image Caption</span>
                                </span>

                            </a> <!-- /.gallery-item -->

                            <a href="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

                                <img src="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" alt="">

                                <span class="on-hover">
                                        <span class="hover-caption">Image Caption</span>
                                </span>

                            </a> <!-- /.gallery-item -->


                            <a href="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

                                <img src="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" alt="">

                                <span class="on-hover">
                                        <span class="hover-caption">Image Caption</span>
                                </span>

                            </a> <!-- /.gallery-item -->


                             <a href="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

                                <img src="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" alt="">

                                <span class="on-hover">
                                        <span class="hover-caption">Image Caption</span>
                                </span>

                            </a> <!-- /.gallery-item -->
                           <a href="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

                                <img src="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" alt="">

                                <span class="on-hover">
                                        <span class="hover-caption">Image Caption</span>
                                </span>

                            </a> <!-- /.gallery-item -->

                            <a href="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

                                <img src="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" alt="">

                                <span class="on-hover">
                                        <span class="hover-caption">Image Caption</span>
                                </span>

                            </a> <!-- /.gallery-item -->

                            <a href="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

                                <img src="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" alt="">

                                <span class="on-hover">
                                        <span class="hover-caption">Image Caption</span>
                                </span>

                            </a> <!-- /.gallery-item -->

                            <a href="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

                                <img src="{{ asset('public/assets/assets/images/gallery/child-207573_1280.jpg')}}" alt="">

                                <span class="on-hover">
                                        <span class="hover-caption">Image Caption</span>
                                </span>

                            </a> <!-- /.gallery-item -->
			</div> 
                    </div> 
                </div> 
            @stop