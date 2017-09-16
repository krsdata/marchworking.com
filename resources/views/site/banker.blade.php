
@extends('layouts.master')
    @section('title', 'HOME') 
        @section('header')
        <h1>Home</h1>
        @stop 
        @section('content')  
        @include('partials.menu')   
        <div class="md-padding">
        <div class="container">
    <div class="row">
        <div class="heading style3">
                <h3 class="uppercase"><span class="main-color">Our Bank Details</h3>
        </div>
      	 <div class="col-md-4">
        	<img src="{{ asset('public/assets/img/banker-img.jpg')}}" class="img-responsive" width="100%">
        </div>
        
		<div class="col-md-4">
        	<img src="{{ asset('public/assets/img/SBI.png')}}" class="img-responsive" width="100%">
            <ul class="banker">
            	<li><span>ACCOUNT NAME</span> - xxxxxxxxxxxxx</li>
                <li><span>ACCOUNT NO </span>- xxxxxxxxxxxxx </li>
                <li><span>BRANCH NAME</span> - xxxxxxxxxxxxx</li>
                <li><span>IFSC CODE</span> -  xxxxxxxxxxxxx</li>
                <li><span>ACCOUNT TYPE</span> -  CURRENT ACCOUNT</li>
            </ul>
        </div>
		
        <div class="col-md-4">
        	<img src="{{ asset('public/assets/img/ICICI-bank.png')}}" class="img-responsive" style="margin: 29px 0;" width="100%">
            <ul class="banker">
            	<li><span>ACCOUNT NAME</span> - xxxxxxxxxxxxx</li>
                <li><span>ACCOUNT NO </span>- xxxxxxxxxxxxxx</li>
                <li><span>BRANCH NAME</span> - xxxxxxxxxxxxxx</li>
                <li><span>IFSC CODE</span> -  xxxxxxxx</li>
                <li><span>ACCOUNT TYPE</span> -  CURRENT ACCOUNT</li>
            </ul>
        </div> 
    </div>
</div>
    </div>
@stop