
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop 
        @section('content') 
        @include('partials.menu')
       
	 
	  <div class="section md-padding">
       <div class="container">
          <div class="section--header">
             <h2 class="section--title">Get In Touch!</h2>
             <p class="section--description">
                We provide advisory clients with a quality of service we believe no other firm can match. <br>Our client relationships are built on trust and discretion
             </p>
          </div>
          <div class="section--container">
             <div class="contact_us tabby">
                <div data-tabs-content="" class="contact_us--list">
                                            
                   <div id="tab-india" data-tabs-pane="" class="contact_us--item tabby--pane">
                      <div class="row">
                         <div class="col-md-5 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <ul class="contact_us--contacts">
                               <li class="contact_us--contacts_item">
                                  <div class="contact_item">
                                     <i class="fa fa-phone contact_item--icon " aria-hidden="true"></i>
                                     <h3 class="contact_item--title">Call Us</h3>
                                     <p class="contact_item--text">
                                        Feel free to call us on <strong>+91-9472114658</strong>,
                                        <br> Monday - Saturday, 8am - 7pm
                                     </p>
                                  </div>
                               </li>
                               <li class="contact_us--contacts_item">
                                  <div class="contact_item">
                                      <i class="fa-envelope fa contact_item--icon"></i>
                                     <h3 class="contact_item--title">Drop a Line</h3>
                                     <p class="contact_item--text">
                                        Drop us a line at <strong>info@marchworking.com</strong>,
                                        <br> and we’ll get back soon.
                                     </p>
                                  </div>
                               </li>
                               <li class="contact_us--contacts_item">
                                  <div class="contact_item">
                                    <i class="fa fa-map-marker contact_item--icon " aria-hidden="true"></i>
                                     <h3 class="contact_item--title">Visit Us</h3>
                                     <p class="contact_item--text">
                                        Come visit us at <strong>March working Building</strong>,
                                        <br>
                                        <strong>Bihar </strong> 
                                     </p>
                                  </div>
                               </li>
                            </ul>
                         </div>
                         <div class="col-md-7 col-md-offset-0 col-xs-12">
                            <div class="contact_us--form">
                               <h3 class="contact_us--form_title">Your Request</h3>
                               <form action="#" class="contact_form">
                                  <fieldset>
                                     <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                           <label class="field -wide">
                                           <input placeholder="Full Name" type="text">
                                           </label>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                           <label class="field -wide">
                                           <input placeholder="Email" type="text">
                                           </label>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                           <label class="field -wide">
                                           <input placeholder="Phone" type="text">
                                           </label>
                                        </div>
                                       
                                     </div>
                                     <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                           <label class="field -wide">
                                           <textarea name="message" cols="30" rows="5" placeholder="Type in here..."></textarea>
                                           </label>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-9 col-xs-12">
                                           <div class="contact_form--files">
                                              <span class="button -menu_size -picton_blue -bordered">
                                              <span class="button--inner">Attach File</span>
                                              <input name="files[]" class="contact_form--file_input" type="file">
                                              </span>
                                              <div class="contact_form--files_list"></div>
                                           </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                           <div class="contact_form--submit">
                                              <button class="button -menu_size -waikawa_gray -bordered"><span class="button--inner">Send Request</span></button>
                                           </div>
                                        </div>
                                     </div>
                                  </fieldset>
                               </form>
                            </div>
                         </div>
                      </div>
                   </div>
                   
                   
                </div>
             </div>
          </div>
       </div>
    </div>

<div class="layout--container">	  
      <div class="section -pattern -light">
            <div class="contacts">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="contact_card">
                                <i style="color:#5a4485" class="fa fa-phone contact_card--icon" aria-hidden="true"></i>
                                <strong class="contact_card--title">Contact Us</strong>
                                <p class="contact_card--text">Feel free to call us on <br> <strong>9472114651,9472114658</strong> <br> Monday - Friday, 8am - 7pm</p>
                                <button class="button -blue_light -bordered"><span class="button--inner">Order a Call Back</span></button>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="contact_card">

                                <i style="color:#5a4485" class="fa-envelope fa contact_card--icon"></i>
                               <strong class="contact_card--title">Our Email</strong>
                               <p class="contact_card--text">Drop us a line anytime at <br> <strong><a href="mailto:info@recapitafinace.com">info@marchworking.com</a>,</strong> <br> and we’ll get back soon.</p> 
                               <button class="button -blue_light -bordered"><span class="button--inner">Start Writing</span></button>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="contact_card">
                                <i class="fa fa-map-marker contact_card--icon" aria-hidden="true" style="color:#5a4485"></i>

                                <strong class="contact_card--title">Our Address</strong>
                                <p class="contact_card--text">Come visit us at <br> <strong>Stock Building,Bihar,</strong> <br>9472114651,9472114658 </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@stop