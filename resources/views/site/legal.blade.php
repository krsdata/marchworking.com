
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

        @include('partials.menu')
	<div class="md-padding">
            <div class="container">
                    <div class="row row-eq-height">

                        <div class="col-md-12">
                            Legal Document Here
                        </div>

                    </div>
            </div>
        </div>
	
	
        @stop