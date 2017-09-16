
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

        @include('partials.home-slider')
             
	
	<div class="about-us">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2><span>Buy Now</span> anti radiation chip and know about us</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<div class="banner-join">
				<a href="#">Know More</a>
			</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="plan-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" style="text-align:center">
					<h2>Lets Know About Our Plan</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<table width="100%" border="1">
  <tr class="main-head-plan">
    <td>SN</td>
    <td>Stage Name</td>
    <td>Total Member</td>
    <td>Level Commision</td>
    <td>Total Level Income</td>
    <td>Team Development</td>
    <td>Seminar</td>
	<td>Award & Reward</td>
	<td>Overall Income</td>
  </tr>
  <tr style="background: #eee;">
    <td>1</td>
    <td>One Star</td>
    <td>6</td>
    <td>70</td>
    <td>420</td>
    <td>NIL</td>
	<td>NIL</td>
    <td>Complete 3/15 or 6/30 days, 100RS per day</td>
	<td>2420</td>
  </tr>
  <tr style="background: #fff;">
    <td>2</td>
    <td>Two Star</td>
    <td>36</td>
    <td>60</td>
    <td>2160</td>
    <td>500</td>
    <td>Nil</td>
	<td>100 RS reacharge mobile</td>
	<td>2760</td>
  </tr>
  <tr style="background: #eee;">
    <td>3</td>
    <td>Three Star</td>
    <td>216</td>
    <td>50</td>
    <td>10800</td>
    <td>1000</td>
    <td>2500</td>
	<td><span>7000 INR (Samsung SmartPhone)</span><span><img src="img/samsung.png" height="50px;"></span></td>
	<td>21300</td>
  </tr>
  <tr style="background: #fff;">
    <td>4</td>
    <td>Four Star</td>
    <td>1296</td>
    <td>40</td>
    <td>51840</td>
    <td>2000</td>
    <td>10000</td>
	<td><span>20000 (Advanced For HP Laptop)</span><span><img src="img/laptop.png" height="50px;"></span></td>
	<td>83840</td>
  </tr>
  <tr style="background: #eee;">
    <td>5</td>
    <td>Five Star</td>
    <td>7776</td>
    <td>30</td>
    <td>233280</td>
    <td>5000</td>
    <td>30000</td>
	<td><span>Pulsar Bike 160 CC NS (100000 Lakh)</span><span><img src="img/bike.png" height="50px;"></span></td>
	<td>368280</td>
  </tr>
  <tr style="background: #fff;">
    <td>6</td>
    <td>Six Star</td>
    <td>46656</td>
    <td>20</td>
    <td>933120</td>
    <td>9000</td>
    <td>40000</td>
	<td><span>Honda Car BRV (9,00000 lakh INR)</span><span><img src="img/car-honda.png" height="50px;"></span></td>
	<td>1882120</td>
  </tr>
  <tr style="background: #eee;">
    <td>7</td>
    <td>Seven Star</td>
    <td>279936</td>
    <td>10</td>
    <td>2799360</td>
    <td>25000</td>
    <td>75000</td>
	<td><span>BMW car X1 (3,50,0000 Lakh INR)</span><span><img src="img/bmw.png" height="50px;"></span></td>
	<td>6399360</td>
  </tr>
  <tr class="plan-footer">
    <td>Total</td>
    <td colspan="3"></td>
    <td>4030980</td>
    <td>42500</td>
    <td>157500</td>
	<td>4529100</td>
	<td>8760080</td>
  </tr>
</table>

				</div>
			</div>
		</div>
	</div>
	
	<div class="terms-co">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>Terms & Condition</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="tnc">
						<div class="tnc-head">
							Terms & Condition  In English
						</div><marquee direction="up" scrollamount="3" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);" style="height:320px;  border: 1px solid #ccc;">
						<div class="tnc-content">
							<p>1. After joining in with the mere amount of 690 INR only, Quantum Science gives you
access to self-attested Anti-radiation chip and also lets you enjoy the privilege of
having 100 INR per day for every month. (Leaving out Saturdays and Sundays)</p>
<p>2. Except for your TDS or processing charge, no other charges or amounts will be
deducted from your balance.</p>
<p>3. In case for wear and tear of the Radiation chip or any sort of harm to the same, the
company will give you one last opportunity in the same budget to rectify the same and
compensate for the loss.</p>
<p>4. Payments will be released on the 15 th or the 30 th of the month and not on any other day
except the two.</p>
<p>5. Only for the first 15 th and the 30 th date after joining, in order to get your payment one
has to get 3-3 people to join anyhow. But one can also opt for the methodology of
having 6 joining in the time span of a month altogether. After this, there won't be any
need for any validation.</p>
<p>6. If a person on his day of joining gets 6 other people to join along with him/her on the
very same day, then from the next month on he/ she will get paid a 50 INR every day
of the month.</p>
<p>7. After the 6 th joining and from the 7 th joining onwards, a person gets paid an extra 150
INR per joining. (Only for those who are about to complete level 1)</p>
<p>8. A person becomes eligible and authorized for a franchise after completing level.
He/she has to open the franchise with a minimum of 30 pins.</p>
<p>9. The franchise will be rewarded with 45 INR commission for each joining. As many
teams you form under your franchise, then for each joining pin 10 INR commission
will be rewarded for 90 days. The count of 90 days is counted from the day when the
downline forms another franchise.</p>
<p>10. The franchise commission will be released on the 19 th or the 20 th of each month. The
downline franchise commission will also get their cumulative commission as per the
rule of getting 10 INR per pin.</p>
<p>11. Radiation chip will be sent to your postal address after 15 days of your joining.</p>
<p>12. While joining in you must provide us with your bank details such as Account
number, branch code, IFSC code, and branch name. This ensures hassle free payment
procedure for the company.</p>
<p>13. The mesmerizing level income:<br/>
<table border="1" cellspacing="5" cellpadding="5" style="
    width: 100%;
">
 <tbody><tr>
<td>Level</td>
<td>Commision/Member</td> 
<td></td>
<td>Income</td>
 </tr><tr><td>1st</td><td>70x6</td><td>=</td><td>420</td></tr><tr><td>2st</td><td>60x36</td><td>=</td><td>2160</td></tr><tr><td>3st</td><td>50x216</td><td>=</td><td>10800</td></tr><tr><td>4st</td><td>40x1296</td><td>=</td><td>51840</td></tr><tr><td>5st</td><td>30x7776</td><td>=</td><td>233280</td></tr><tr><td>6st</td><td>20x46656</td><td>=</td><td>933120</td></tr><tr><td>7st</td><td>10x279936</td><td>=</td><td>2799360</td></tr></tbody></table>
</p>
<p>14. Every month after having reached the income level of 30,000, you are eligible to file
a return. And for the same Pan card/ Aadhar card is a must. These things and their
details are needed to be uploaded in your profiles. We ensure for the security of your
details.</p>
<p>15. Company's CMD promises you in case of emergencies, independence for only
partial revision will be provided. But there are no promises made for the validation of
the same.</p>
<p>16. After the completion of First level, cash bonus will be provided for effective team
development and seminars.</p>
						</div></marquee>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="tnc">
						<div class="tnc-head">
							Terms & Condition  In Hindi
						</div>
						<marquee direction="up" scrollamount="3" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);" style="height:320px;  border: 1px solid #ccc;">
						<div class="tnc-content">
1. ????? 690/- ????? ??  ????????? ???   ??????? ????? ( Quantum Science ) ?? ?????? ??????????? ????? ?????? ( Anti Radiation ) ??? ?????? 100 /- rs ????? ??? ?? ??? ?? ???? ?????? (?????? /?????? ) ?? ??????
</p>
<p class="tnc" >
2.  T.D.S ??? ?????????? ????? ?? ????? ???? ???? ?? ?????? ?? ???? ?????? ??? ?? ?????? ???? ???????
 </p>

<p class="tnc" >
3. ?????? ??? ????,???? ??? ????????? ?? ???? ?? ?????? ?? ???? ?? ?? ???? ??? ???? ??? ?? ???  (???????? ) ?? ???? ???????

</p>

<p class="tnc" >
4 . ??? ?? 15 ??? 30 ????? ?? ?????? ???? ???????
</p>
<p class="tnc" >
5 ????? ????? ??? 15 ??? 30 ?? ?????? ???? ?? ???? 3-3 ????????? ????? ???????? ???? | ?? ??? ?? ??? ????? ?? ??? 6 ????????? ???? ???????? ???? ???? ??? ??? ?? ??? ??????? ???? ?????
</p>
<p class="tnc" >
6. ?? ??????? ????  ??????? ?? ??? ??? ????? (Same day ) 6 ????????? ????? ?? ?? ??? ????? ??? ?? (??? ?? ??? ??? ) 50/- ????? ???????? ??? ?????
</p>
<p class="tnc" >
7. 6 ????????? ?? ??? 7 ????????? ?? ???????? 150/-????? ???? ?????? (????? ???? ???? ???? ???? ?? ??? ) |
</p>
<p class="tnc" >
8. ???? (1st ) ???? ???????? ???? ?? ??? ?? ?? ??????? ?????????? ?? ??? ????? ???? ??? ??? ?? ?? 30 ??? ?? ?????????? ???? ?????
</p>
<p class="tnc" >
9. ?????????? ?? ????? ????????? ??? ?? 45 /-????? ????? ???? ?????? | ???? ??? ??? ????? ?????????? ???????? ????? ??????? ??? ?? ?? 10 /-????? ????? ???? ?????? 90 ??? ?? ?? 90 ??? ???????? ?? ?????????? ???? ?? ??? ?? ???? ???????
</p>
<p class="tnc" >
10. ?????????? ????? ??? ??  19 /20 ????? ?? ??? ?? ????? ???????? ?????????? ????? ?? ??  ????? ??? ?? ?? ???? ?????? ?????  ??? 10 /-??????
</p>
<p class="tnc" >
11. ???????  ??? ????????? ?? 15 ???? ?? ?? ??? ???? ?????? ?????? ?? ??? ???? ???????
</p>
<p class="tnc" >
12. ????????? ?? ??? A/C /BRANCH CODE /IFSC CODE /BRANCH NAME ???? ???????? ???? ???? ?????? ?? ?????? ???? ??? ??????? ???? ?????
</p>
<p class="tnc" >
13. ??????? ???? ????:
<table border="1" cellspacing="5" cellpadding="5" style="
    width: 100%;
">
 <tbody><tr>
<td>Level</td>
<td>Commision/Member</td> 
<td></td>
<td>Income</td>
 </tr><tr><td>1st</td><td>70x6</td><td>=</td><td>420</td></tr><tr><td>2st</td><td>60x36</td><td>=</td><td>2160</td></tr><tr><td>3st</td><td>50x216</td><td>=</td><td>10800</td></tr><tr><td>4st</td><td>40x1296</td><td>=</td><td>51840</td></tr><tr><td>5st</td><td>30x7776</td><td>=</td><td>233280</td></tr><tr><td>6st</td><td>20x46656</td><td>=</td><td>933120</td></tr><tr><td>7st</td><td>10x279936</td><td>=</td><td>2799360</td></tr></tbody></table>
</p>
<p class="tnc" >
 14. ???????? ??? 30000 /- (??? ???? ) ???? ???? ?? ?????? ??? ??????  ???? ?? ??? ????, ???  ????? ,???? ???????? ???? ??? ???? ???????? ??? ????? ???? ???? | ???? ???????? ??? ???????
</p>

<p class="tnc" >
15. ?????? ?? C M D ????? ???? ???? ???? ??? ?? ???? ?????? ??? ????? ????? ????? ?????? ???? ?? ??? ???????? ????  | ????? ???? ?????? ?? ??????? ???? ?????
</p>

<p class="tnc" >
16. ????? ???? ???? ???? ?? ??? ??? ????????? & ??????? ?? ??? ?? ???? ?? ????? ???? ???  ???? ???? ???????
</p>
						</div></marquee>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="news-contact">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
					<div class="tnc">
						<div class="tnc-head">
							News &amp; Events
						</div>
						<div class="news">
						<marquee direction="up" scrollamount="3" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);" style="height:380px;">
							<h4>Heading Goes Here</h4>
							<p>
								Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup. Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup
							</p>
							<br>
							<h4>Heading Goes Here</h4>
							<p>
								Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup. Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup
							</p>
							<br>
							<h4>Heading Goes Here</h4>
							<p>
								Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup. Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup
							</p>
							<br>
							<h4>Heading Goes Here</h4>
							<p>
								Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup. Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup
							</p>
							<br>
							<h4>Heading Goes Here</h4>
							<p>
								Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup. Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup
							</p>
							<br>
							<h4>Heading Goes Here</h4>
							<p>
								Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup. Lorem ipsum dolor sit amet sit amet is the dummy text for describing the website content for showing as mockup
							</p>
							<br>
							</marquee>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="front-contact">
					<div class="tnc-head">
							Royalty Members
						</div>
						<div class="head">
						Total Joining in Current Period : 664</br>
						Total Royalty Members : 26</br>
						Per Member Royalty Income : 255.38 INR</br>
						</div>
						<div class="news">
						
						
						<marquee direction="up" scrollamount="3" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);" style="height:266px;">
						
						

						<ul>
						<li>
						26	- MARCH1440466 - Kundan
						</li>
						<li>
						26	- MARCH1440466 - Kundan
						</li>
						<li>
						26	- MARCH1440466 - Kundan
						</li>
						<li>
						26	- MARCH1440466 - Kundan
						</li>
						<li>
						26	- MARCH1440466 - Kundan
						</li>
						<li>
						26	- MARCH1440466 - Kundan
						</li>
						<li>
						26	- MARCH1440466 - Kundan
						</li>
						<li>
						26	- MARCH1440466 - Kundan
						</li>
						<li>
						26	- MARCH1440466 - Kundan
						</li>
						
						</ul>
						</marquee>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="front-contact">
					<div class="tnc-head">
							Latest Members
						</div>
						<div class="news">
						<marquee direction="up" scrollamount="3" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);" style="height:380px;">
						<ul>
						<li>
						10	- MARCH1440466 -	NISHA SHARMA
						</li>
						<li>
						10	- MARCH1440466 -	NISHA SHARMA
						</li>
						<li>
						10	- MARCH1440466 -	NISHA SHARMA
						</li>
						<li>
						10	- MARCH1440466 -	NISHA SHARMA
						</li>
						
						</ul>
						</marquee>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
        @stop
