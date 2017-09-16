    
	<div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                            <div class="logo"><img src="{{ asset('public/assets/img/logo1.jpg')}}" alt="march working"></div>
                    </div>
                    <div class="col-sm-9">
                        <ul class="header-menu"> 
                            <li><a href="/" class='{{($pathinfo=="")?"active":"" }}'>Home</a></li>
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
 @include('partials.commonBanner') 