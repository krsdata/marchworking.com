 @extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content')   
        
	<div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                            <div class="logo"><img src="{{ asset('public/assets/img/logo1.jpg')}}" alt="march working"></div>
                    </div>
                    <div class="col-sm-9">
                        <ul class="header-menu"> 
                            <li><a href="{{url('/')}}" class='{{($pathinfo=="")?"active":"" }}'>Home</a></li>
                            <li><a href="about" class="{{($pathinfo=='about')?'active':'' }}" >About Us</a></li>
                            <li><a href="business-plan" class="{{($pathinfo=='business-plan')?'active':'' }}" >Business Plan</a></li>
                            <li><a href="join-us" class="{{($pathinfo=='join-us')?'active':'' }}">Join Us</a></li>
                            <li><a href="legal" class="{{($pathinfo=='legal')?'active':'' }}">Legal</a></li>
                            <li><a href="gallery" class="{{($pathinfo=='gallery')?'active':'' }}">Gallery</a></li>
                            <li><a href="banker" class="{{($pathinfo=='banker')?'active':'' }}">Banker</a></li>
                            <li><a href="contact" class="{{($pathinfo=='contact')?'active':'' }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
	</div> 
        
       <div style="
    height: 100px;
    background: darkorange;
    color: #fff;
    font-size: 50px;
    text-align: center;
    margin-top: 30px;
"> Login </div>
 
        
<div class="container"  >
    <div class="row" style="margin: 50px 0px">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        @stop
 
