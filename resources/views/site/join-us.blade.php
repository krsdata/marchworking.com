
@extends('layouts.master')
    @section('title', 'HOME')
        
    @section('header')
    <h1>Home</h1>
    @stop

    @section('content')  
    @include('partials.menu') 
    	
    <div class="join-us-content">
        <div class="container mid_wrapper_div">

            <div id="blogBox"> 
        <!--content-->
        <div>
          <div>

            <article class="blog-list">
              <div style="margin-bottom:30px;">
                <div class="col-md-12">


                  <div class="clearfix"></div>
                              <br>	
                  <form role="form" method="POST" autocomplete="off" action="reg_user.php">

                  <div id="create-account" class="">


                  <div class="col-md-6">

                                            <div class="heading style3">
                                                                            <h3 class="uppercase"><span class="main-color">Reference Information</h3>
                                            </div>
                                <div class="registration  col-md-12">
                            <div class="form-group">

                              <input required="" class="form-control span3" placeholder="Reference Id" onkeyup="check_sponsor_id(this.value);" name="ref_user_id" id="ref_user_id" value="" tabindex="1" type="text">
                              <span id="ststus_error" style="display:none;color:red">Not Available </span> <span id="ststus_ok" style="display:none;color:green">Available</span> </div>
                          </div>
                          <div class="registration  col-md-12">
                            <div class="form-group">

                              <input id="sponsor" value="" class="form-control span3" placeholder="Sponsor Name" tabindex="2" type="text">
                            </div>
                          </div>


                                               <input name="pin_number" id="pin_number" value="DR1098228543" class="form-control span3" type="hidden">



                       <div class="registration  col-md-12">
                            <div class="form-group">
                              <div class="span3">Position <span style="color:red;"> * </span></div>
                              <div class="span3">
                                <label style="float:left;">
                                                            <input name="position" checked="" value="1" style="float:left; margin-top:20px;" type="radio" align="left">
                                                             <div style="float:left; line-height:50px; margin:0px 30px 0px 10px;"> Left</div>
                                                             </label>
                                                             <label style="float:left;">
                  <input name="position" value="2" style="float:left; margin-top:20px; width:20px;" type="radio" align="left">
                  <div style="float:left; line-height:50px; margin:0px 30px 0px 10px;"> Right</div>

                              </label></div>
                                                       <div style="clear:both;"></div>
                            </div>

                                                     <div style="clear:both;"></div>
                          </div>




                                      </div>

                                                    <div class="col-md-6">
                                                                    <div class="heading style3">
                                                                            <h3 class="uppercase"><span class="main-color">Security Information</h3>
                                                                    </div>
                          <div class="registration col-md-12">
                            <div class="form-group">

                            <div style="clear:both;"></div>
                              <input name="user_id" id="user_id" class="form-control span3 input_fild" value="S3147028" readonly="" onkeydown="check_user_id(this.value);" onfocusout="check_user_id(this.value);" onblur="check_user_id(this.value);" onkeyup="check_user_id(this.value);" pattern="[a-zA-Z0-9]{3,10}" tabindex="6" required="" type="text">

                              <span id="ststus_error1" style="display:none;color:red;">Not Available </span> <span id="ststus_ok1" style="display:none;color:green">Available</span> </div>
                          </div>
                                              <div class="registration  col-md-12">
                          <div class="form-group">
                                                    <input name="password" id="password" value="AP194316" class="form-control span3" type="hidden">

                                                    <input name="tr_passwd" id="tr_passwd" value="AP194316" class="form-control span3" type="hidden">

                                              </div>
                          </div>

                                              <div class="registration  col-md-12">
                            <div class="form-group">
                              <div class="span3">Gender <span style="color:red;"> * </span></div>
                              <div class="span3">
                                <label style="float:left;">
                                                            <input name="gender" checked="" value="1" style="float:left; margin-top:20px;" type="radio" align="left">
                                                             <div style="float:left; line-height:50px; margin:0px 30px 0px 10px;"> Male</div></label>
                                                             <label style="float:left;">
                  <input name="gender" value="2" style="float:left; margin-top:20px; width:20px;" type="radio" align="left">
                  <div style="float:left; line-height:50px; margin:0px 30px 0px 10px;"> Female</div>
                                  </label >
                              </div>
                                                       <div style="clear:both;"></div>
                            </div>

                                                     <div style="clear:both;"></div>
                          </div>

                      </div>
                      <div style="clear:both;"></div>
                      <div class="col-md-12">
                                                                    <div class="heading style3">
                                                                            <h3 class="uppercase"><span class="main-color">Personal Information</h3>
                                                                    </div>
                            <div class="registration col-md-6">
                            <div class="form-group">

                              <input name="fullname" id="fullname" class="form-control span3" placeholder="Full Name" tabindex="9" required="" type="text">
                            </div>
                          </div>
                          <div class="registration col-md-6">
                            <div class="form-group">

                              <input onkeyup="check_mobile_no(this.value);" name="mobile" id="mobile" required="" pattern="[0-9]{10,10}" class="form-control span3" placeholder="Mobile No" tabindex="10" type="text">
                                                      <span id="ststus_error5" style="display:none;color:red">Not Available </span> <span id="ststus_ok5" style="display:none;color:green">Available</span>
                            </div>
                          </div>
                          <div class="registration col-md-6">
                            <div class="form-group">

                              <input name="email" id="email" class="form-control span3" placeholder="Email" tabindex="11" type="email">
                            </div>
                          </div>
                          <div class="registration col-md-6">
                            <div class="form-group">

                                                      <input required="" id="dob" name="dob" class="form-control span3" placeholder="Birth Date(yyyy-mm-dd)" tabindex="12" type="text">
                            </div>
                          </div>



                          <div class="registration col-md-6">
                            <div class="form-group">

                            <textarea name="address1" id="address1" class="form-control span3" placeholder="Address1" style="width:100%; height:50px" tabindex="13"></textarea>
                            </div>
                          </div>
                          <div class="registration col-md-6">
                            <div class="form-group">

                            <textarea name="address2" id="address2" class="form-control span3" placeholder="Address2" style="width:100%; height:50px" tabindex="14"></textarea>
                            </div>
                          </div>





                          <div class="registration col-md-6">
                            <div class="form-group">

                            <input id="city" name="city" class="form-control span3" placeholder="District" tabindex="15" type="text">
                            </div>
                          </div>
                          <div class="registration col-md-6">
                            <div class="form-group">

                            <input id="state" name="state" class="form-control span3" placeholder="State" tabindex="16" type="text">
                            </div>
                          </div>


                          <div class="registration col-md-6">
                            <div class="form-group">

                            <input id="pincode" name="pincode" class="form-control span3" placeholder="Pincode" tabindex="17" type="text">
                            </div>
                          </div>
                          <div class="registration col-md-6">
                            <div class="form-group">

                            <input id="pan_no" name="pan_no" class="form-control span3" placeholder="Pan Card" tabindex="18" type="text">
                            </div>
                          </div>

                          </div>

                          <div style="clear:both;"></div>
                          <div class="col-md-12">
                                                    <div class="heading style3">
                                                                            <h3 class="uppercase"><span class="main-color">Bank Information</h3>
                                                                    </div>

                          <div class="registration col-md-6">
                            <div class="form-group">

                              <input name="bank_name" id="bank_name" class="form-control span3" placeholder="Bank Name" tabindex="19" type="text">
                            </div>
                          </div>
                          <div class="registration col-md-6">
                            <div class="form-group">

                              <input name="holder_name" id="holder_name" class="form-control span3" placeholder="Account Holder Name" tabindex="20" type="text">
                            </div>
                          </div>
                          <div class="registration col-md-6">
                            <div class="form-group">

                              <input name="account_no" id="account_no" class="form-control span3" placeholder="Account No" tabindex="21" type="text">
                            </div>
                          </div>
                         <div class="registration col-md-6">
                            <div class="form-group">

                              <input name="branch_name" id="branch_name" class="form-control span3" placeholder="Branch Name" tabindex="22" type="text">
                            </div>
                          </div>

                          <div class="registration col-md-6">
                            <div class="form-group">

                            <input id="ifsc_code" name="ifsc_code" class="form-control ifsc_code-control span3" placeholder="IFSC Code" tabindex="23" type="text">
                            </div>
                          </div>


                            </div>

                            <div style="clear:both;"></div>

                        <div class="col-md-6"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input name="remember_me" id="remember_me" tabindex="24" required="" type="checkbox">
                          &nbsp;&nbsp;I accept Terms &amp; Condition </div>
                      <br>
                      <br>
                                             <!--<b style="color:red">Due to server maintenance!! Login & Registration will start very soon </b>-->
                       <div class="col-md-3">
                          <div class="span3 col-md-12" style="margin:0px auto; float:none;">
                            <input value="Register" name="btnRegister" id="btnRegister" class="btn send-msz btn-lg btn-block" tabindex="25" type="submit">
                          </div>
                        </div>

                  </div> 
                  </form>
                  <div class="clearfix"></div> 
                </div>
                    <div class="clearfix"></div> <br> 
              </div>
            </article>
          </div>
        </div>
      </div> 
      </div>
    </div> 
@stop