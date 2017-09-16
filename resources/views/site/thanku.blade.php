@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            @include('partials.menu') 
           
            <div class="container">
                <div class="row" style="padding: 70px 0px">
                <div class="col-md-12">
                    <h2 class="heading-title">Thank you for Registration!</h2>
                    <span class="title-tag">Your Mobile Anti Radiation chip will be shipped soon..!</span> 
                        
                    </div><!-- /.checkout-steps -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        @stop