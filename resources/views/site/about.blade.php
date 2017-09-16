
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>About Us</h1>
        @stop 
        @section('content') 

        @include('partials.menu') 
  
  <!-- Wrapper for slides -->  
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                        <h2><span>Buy Now</span> anti radiation chip and know about us</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                </div>
            </div>
        </div>
    </div>
	
    <div class="main-contentbox nav-margin">
 
  <!--=====================================--> 
  <!--========= Bringing new look =========--> 
  <!--=====================================-->
  <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container">
      <div class="row">
        <div class="text-center col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="logo-background company-graph">
            <figure><img src="{{ asset('public/assets/img/company-graph.png') }}" ></figure>
            
                                            
             <p style="
                  color: chocolate;
                  font-family: unset;
                  font-size: 36px; background: #fff;
              "><b>Mobile Anti Radiation Chip</b></p>
            <!--logo-background--> 
          </div>
          <!--text-center--> 
        </div>
        <div class="business-box no-margin-top col-lg-6 col-md-6 col-sm-12 col-xs-12" style="
    background: aliceblue;
    padding-bottom: 30px;
">
          <h2 class="black-font">our company mission</h2>
          <p>We promise to provide the most persuasive possible selling message to right prospects for the products or services at lowest possible prices. </p>
          <p class="blue-color regular-font">To help companies identify and sort potential and existing clientele and help the company setup distribution networks to target those clients.</p>
          <ul>
            <li>We are a team of highly enthusiastic, motivated and focused personnel.</li>
            <li>Our creativity and zeal to perform will create a niche for you and your business in the market. </li>
            <li>We understand the diversified needs of each client and providing the best possible services.</li>
            <li>We believe in our vision, for that we can provide blueprints of our ultimate achievements.</li>
          </ul>
          <!--business-box--> 
        </div>
        <!--row--> 
      </div>
      <!--container--> 
    </div>
    <!--paddingBox--> 
  </div>
  <!--=====================================--> 
  <!--============ Who We Are =============--> 
  <!--=====================================-->
  <div class="pattern col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container">
      <div class="row">
        <div class="who-we-are pull-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div>
            <h2>Who We Are</h2>
            <p>Adspacks Advertising has come up with its new and dynamic venture conceptualized <br>by a team of young, creative and exuberant professionals with a vast experience <br>in the field of events and marketing communication. </p>
            <p>Adspacks Advertising was set up with an aim of bringing highest level of <br>creativity and authenticity to this field. Our belief in ourselves and our <br>commitment to quality will definitely be a value addition to the client <br>in all aspects. </p>
          
          </div>
          <!--who-we-are--> 
        </div>
        <!--row--> 
      </div>
      <!--container--> 
    </div>
    <div class="who-we-are-img"><img src="{{ asset('public/assets/img/who-we-are-img.png')}}" alt="who-we-are-img"></div>
    <!--pattern--> 
  </div>
  <!--=====================================--> 
  <!--============= Skill Level ===========--> 
  <!--=====================================-->
  <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container">
    <div class="heading">
        <div class="title text-center arrow-left">
            <img class="hidden-xs" src="{{ asset('public/assets/img/left-arrow.png')}}" style="position: absolute;left: 33%;" alt="">
                <h4 class="">HOW WE WORKS </h4>
        </div>
    </div>  
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="main-works">
                <img src="{{ asset('public/assets/img/map.png')}}"  width="100%" alt="">
            </div>
        </div>
    </div>
    <!--   <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <aside class="skill-level col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="numeric logo-background stat-count pull-left bold-font">22</div>
            <h4 class="black-color pull-left"><span>Years of <br>
              Experiences</span></h4> 
          </aside> 
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <aside class="skill-level col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="numeric stat-count logo-background pull-left bold-font">50</div>
            <h4 class="black-color pull-left"><span>Professional<br>
              Advisors</span></h4> 
          </aside> 
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <aside class="skill-level col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="numeric stat-count logo-background pull-left bold-font">75</div>
            <h4 class="black-color pull-left"><span>news cases<br>
              every years</span></h4> 
          </aside> 
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <aside class="skill-level col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="numeric stat-count logo-background pull-left bold-font">99</div>
            <h4 class="black-color pull-left"><span>Registered<br>
              Cases</span></h4> 
          </aside> 
        </div> 
      </div> -->
      <!--container--> 
    </div>
    <!--paddingBox--> 
  </div>
  <!--main-contentbox--> 
</div>
	 
@stop