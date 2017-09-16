
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            @include('partials.menu') 
            <div class="md-padding faq-new">
				<div class="container">
				<div class="heading style3">
									<h3>Frequently Asked Questions</h3>
								</div>
						<div class="test-list">
							<div class="tab1 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">What does royalty free mean?</li>
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.
								Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
							</div>
							<div class="tab2 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">What does non-exclusive mean?</li>
								
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
								
							</div>
							<div class="tab3 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">How to install Wordpress</li>
									
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.
								Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
							</div>
							<div class="tab4 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">How to create new FAQ</li>
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
								
							</div>
							<div class="tab5 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">How to install the demo Content</li>
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.
								Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
							</div>
							<div class="tab6 wow bounceIn" data-wow-delay="0.4s">
								<ul>
									<li><span> </span></li>
									<li class="text">Can the Theme be translated?</li>
								</ul>
								<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
									porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
								

							</div>
						</div>
						<!-- script for tabs -->
                                                  <script src="{{ asset('public/assets/js/jquery-1.12.3.min.js') }}"></script> 
 
							<script>
								$(document).ready(function(){
									$(".tab1 p").hide();
									$(".tab2 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
									$(".tab1 ul").click(function(){
										$(".tab1 p").slideToggle(300);
										$(".tab2 p").hide();
										$(".tab3 p").hide();
										$(".tab4 p").hide();
										$(".tab5 p").hide();
										$(".tab6 p").hide();
									})
									$(".tab2 ul").click(function(){
										$(".tab2 p").slideToggle(300);
										$(".tab1 p").hide();
										$(".tab3 p").hide();
										$(".tab4 p").hide();
										$(".tab5 p").hide();
										$(".tab6 p").hide();
									})
									$(".tab3 ul").click(function(){
										$(".tab3 p").slideToggle(300);
										$(".tab4 p").hide();
										$(".tab2 p").hide();
										$(".tab1 p").hide();
										$(".tab5 p").hide();
										$(".tab6 p").hide();
									})
									$(".tab4 ul").click(function(){
										$(".tab4 p").slideToggle(300);
										$(".tab3 p").hide();
										$(".tab2 p").hide();
										$(".tab1 p").hide();
										$(".tab5 p").hide();
										$(".tab6 p").hide();									
									})	
									$(".tab5 ul").click(function(){
										$(".tab5 p").slideToggle(300);
										$(".tab3 p").hide();
										$(".tab2 p").hide();
										$(".tab1 p").hide();
										$(".tab4 p").hide();
										$(".tab6 p").hide();									
									})
									$(".tab6 ul").click(function(){
										$(".tab6 p").slideToggle(300);
										$(".tab3 p").hide();
										$(".tab2 p").hide();
										$(".tab1 p").hide();
										$(".tab5 p").hide();
										$(".tab4 p").hide();									
									})
								});
							</script>
						<!-- script for tabs -->
					</div>
				</div>
        @stop