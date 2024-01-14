<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => '', 'titlePage'=> 'Authhome','rtemplate' => $rtemplate])


@section('content')


<div class="container-fluid" id="home">
    @auth

		<div class="cover">
				<div class="intro-text">
				</div>
				<div class="page-text">
						<p>Hie {{auth()->user()->name}} : Welcome Back!! to <span>{{$rtemplate['appDefaults']->appTitle}} </span></p>
						
				</div>
		</div>	

    @else 
      <section class="banner_main">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-xl-6 col-lg-6 col-md-6 ">
			    @if($rtemplate['appDefaults']->count() != 0)
                   <div class="text-bg">
                     <h1>{{$rtemplate['appDefaults']->brandHeading}}</h1>
                     <span>{{$rtemplate['appDefaults']->introText}} </span>
                     <a  href="#contact">Get Started</a>
					 <a  href="#about" class="btn-solid-lg ">Get In Touch</a>
                  </div>					
				@else
                   <div class="text-bg">
                     <h1>Amazing Web &amp Mobile Apps Designs</h1>
                     <span>Boost your business sales with great apps 
						</span>
                     <a  href="#contact">Get In Touch</a>
                  </div>
				@endif
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 padding_lert2">
                 
                  <div class="text-img">
                     <figure><img src="images/layouts/pc.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>     
    @endauth
</div>
@endsection

@section('content1')

<div class="container-cover" id="about">
<h2 class="section-title"><strong>{{ __('About Who We Are') }}</strong>
	<div class="header-strips-two"></div>
</h2>
	<div class="row">
			<div class="card-about wow fadeInUp" data-wow-delay="0.5s">
				<div class="card-text wow fadeInLeft" data-wow-delay="2.0s">
					<b class="card-Btitle">{{$rtemplate['appDefaults']->appTitle}}</b>
					<br />
					<div class="card-Btext">
						<p>
						{{$rtemplate['appDefaults']->aboutText}}
						</p>
					</div>
				</div>
				<div class="card-image">

				</div>
			</div>
	</div>	
</div>

@endsection

@section('content2')
   
<div class=" container-cover" id="services">

	<h2 class="section-title"><strong>{{ __('What We Can Do For You') }}</strong>
	<div class="header-strips-two"></div></h2>
	 <!-- SERVICES =================================== -->       
	<div id="services" class="p-top-90 p-bot-90 bg-dark div_bot2">
		<div class="container wow fadeIn" data-wow-delay="0.5s">
			@if($rtemplate['services']->count() != 0)
				<div class="row">			    				
					@for($i = 0; $i < 3; $i++)	
						<!--ICON-BOX -->
						<div class="col-sm-4">
							<div class="icon-box">
							@if($rtemplate['services'][$i]->icon)
								<i class="fa {{$rtemplate['services'][$i]->icon}}"></i>
							@else
								<i class="fa fa-laptop"></i>									
							@endif
								<h3 class="title-sm text-theme-sm text-theme">{{$rtemplate['services'][$i]->name}}</h3>
								<p>{{$rtemplate['services'][$i]->description}}</p>
							</div>
						</div>
					@endfor
				</div>
				<div class="row pad-sec-top-sm">			    				
					@for($i = 3; $i < 6; $i++)	
						<!--ICON-BOX -->
						<div class="col-sm-4">
							<div class="icon-box">
							@if($rtemplate['services'][$i]->icon)
								<i class="fa {{$rtemplate['services'][$i]->icon}}"></i>
							@else
								<i class="fa fa-paint-brush"></i>									
							@endif
								<h3 class="title-sm text-theme-sm text-theme">{{$rtemplate['services'][$i]->name}}</h3>
								<p>{{$rtemplate['services'][$i]->description}}</p>
							</div>
						</div>
					@endfor
				</div>
				@else
			  <!-- ICON-BOX -->
			<div class="row">
				<div class="col-sm-4">
					<div class="icon-box">
						<i class="fa fa-laptop"></i>
						<h3 class="title-sm text-theme-sm text-theme">Web Design & Development</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling.</p>
					</div>
				</div>						
			  <!-- ICON-BOX -->
			  <div class="col-sm-4">
				 <div class="icon-box">
					<i class="fa fa-paint-brush"></i>
					<h3 class="title-sm text-theme-sm text-theme">Brand Identity</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling.</p>
				 </div>
			  </div>
			  <!-- ICON-BOX -->
			  <div class="col-sm-4">
				 <div class="icon-box">
					<i class="fa fa-mobile-phone"></i>
					<h3 class="title-sm text-theme-sm text-theme">Mobile App</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling.</p>
				 </div>
			  </div>
			  <!-- ICON-BOX -->
		   </div>
		   <div class="row pad-sec-top-sm">
			  <!-- ICON-BOX -->
			  <div class="col-sm-4">
				 <div class="icon-box">
					<i class="fa fa-bar-chart-o"></i>
					<h3 class="title-sm text-theme-sm text-theme">Search Engine Optimization</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling.</p>
				 </div>
			  </div>
			  <!-- ICON-BOX -->
			  <div class="col-sm-4">
				 <div class="icon-box">
					<i class="fa fa-cogs"></i>
					<h3 class="title-sm text-theme-sm text-theme">Customizable</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling.</p>
				 </div>
			  </div>
			  <!-- ICON-BOX -->
			  <div class="col-sm-4">
				 <div class="icon-box">
					<i class="fa fa-paper-plane"></i>
					<h3 class="title-sm text-theme-sm text-theme">Great Features</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling.</p>
				 </div>
			  </div>
			  <!-- ICON-BOX -->
		   </div>
		@endif
		</div>
    </div>

         <!-- MORE FEATURES=================================== -->
        <div class="full-screen-box dark-bg-2">
            <div class="container-fluid two-cols-description-row">
               <div class="two-cols-description-row">
                  <div class="two-cols-description-image wow fadeInLeft" data-wow-delay="0.50s">
                     <img src="images/about/about-06.jpg" alt=""/>
                  </div>
                  <div class="two-cols-description-text wow fadeInRight" data-wow-duration="1.5s">
                     <div class="two-cols-description-text-inner">
                        <div class="container" data-aos="fade-up">
						   <div class="row" id="video-section">
							  <div class="col-sm-9 col-sm-offset-2 wow fadeIn" data-wow-delay="0.5s">
								 <div class="video-section-content text-center">
									<a href="https://vimeo.com/channels/staffpicks/116829150" class="video-pop-up"><i class="fa fa-play"></i></a>
									<div class="video-head">Introduction Video</div>
									<div class="video-sub-heading">Check out our video presentation</div>
								 </div>
								 <!-- end video-section-content --> 
							  </div>
							  <!-- end col-sm-6 --> 
						   </div>
                        </div> <!-- end of container -->
                     </div>
                  </div>
               </div>
            </div>
        </div>		 

@endsection

@section('content3')
   
<div class="container-cover" id="portfolio">
	<h2 class="section-title"><strong>{{ __('Browse Our Latest Work') }}</strong>
	<div class="header-strips-two"></div></h2>
	<!--=== ScreenShots section Starts ===-->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="filter portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
			<div class="button-group filters-button-group">
				<button class="button is-checked" data-filter="*">All</button>
				@if($rtemplate['projectTypes']->count() == 0)
					@foreach($rtemplate['projectTypes'] as $pt)
						<button class="button" data-filter=".$pt->name">{{$pt->name}}</button>
					@endforeach
				@else
					<button class="button" data-filter=".design">Landing Pages</button>
					<button class="button" data-filter=".development">Corporation Sites</button>
					<button class="button" data-filter=".marketing">Online Shops</button>
				@endif
			</div> <!-- end of button group -->
          </div>
        </div>

        <div class="grid portfolio-container">
		@if($rtemplate['projectTypes']->count() == 0)
			@foreach($rtemplate['projectTypes'] as $pt)
				@if($rtemplate['projects']->count() != 0)	
					@foreach($rtemplate['projects'] as $pj)
						@if($pj->type == $pt->name)
						  <div class="col-lg-4 col-md-6 portfolio-item {{$pt->name}}">
							<div class="portfolio-wrap">
								@if($rtemplate['projectsImages']->count() != 0)
									@foreach($rtemplate['projectsImages'] as $pi)
										@if($pi->ref_class == $pj->name)
											<img src="{{ asset('storage/'.$pi->imagePath)}}" class="img-fluid" alt="">
										@endif
									@endforeach
							    @else
									<img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
								@endif
							  <div class="portfolio-info">
								<h4>{{$pj->name}}</h4>
								<p>{{$pj->id}}</p>
								<div class="portfolio-links">
								  <a href="{{ asset('images/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
								  <a href="{{ config('app.url') }}/projectView/1" title="More Details"><i class="bx bx-link"></i></a>
								</div>
							  </div>
							</div>
						  </div>	
						@endif
					@endforeach
				@endif
			@endforeach
		@else
          <div class="col-lg-4 col-md-6 portfolio-item development">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ config('app.url') }}/projectView/1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item design">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="{{ config('app.url') }}/projectView/1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item development">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="{{ config('app.url') }}/projectView/1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item marketing">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="{{ config('app.url') }}/projectView/1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item design">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="{{ config('app.url') }}/projectView/1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item development">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="{{ config('app.url') }}/projectView/1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item marketing">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ config('app.url') }}/projectView/1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="{{ config('app.url') }}/projectView/1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item design">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="{{ config('app.url') }}/projectView/1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		@endif
        </div>
      </div>
    </section><!-- End Portfolio Section -->
	
	<!--=== ScreenShots section Ends ===-->
         <!-- MORE FEATURES=================================== -->
        <div class="full-screen-box purple-bg">
            <div class="container-fluid two-cols-description-row">
               <div class="two-cols-description-row">
				@if($rtemplate['banners']->count() == 0)
					<div class="two-cols-description-text wow fadeInRight" data-wow-duration="1.5s">								  
						<div class="two-cols-description-text-inner">
							<div class="heading">
							   <h2 class="bold-font">{{$rtemplate['banners'][0]->heading}}</h2>
							   <h3 class="light-font subheading">{{$rtemplate['banners'][0]->subheading}}</h3>
							</div>
							<p>{{$rtemplate['banners'][0]->body}}</p>
							<a class="btn btn-plain-lg " href="#contact">Get Quote</a>
						</div>
					</div>
                    <div class="two-cols-description-image wow fadeInLeft" data-wow-delay="0.50s">
                        <img src="{{ asset('storage/'.$rtemplate['banners'][0]->imagePath)}}"  alt="" />
                    </div>					 
				@else
					<div class="two-cols-description-text wow fadeInRight" data-wow-duration="1.5s">					
						<div class="two-cols-description-text-inner">
							<div class="heading">
							   <h2 class="bold-font">Innovative Architectural Designs and Technologies</h2>
							   <h3 class="light-font subheading">Flannel ennui narwhal, craft beer twee Vice plaid authentic synth. Flannel ennui narwhal, craft beer twee Vice plaid authentic synth.</h3>
							</div>
							<p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur mus.
							   Aliquam ullamcorper. dis parturient montes, nascetur mus.
							 Cum sociis natoque penatibus et magnis dis parturient montes, nascetur mus.
							   Aliquam ullamcorper. dis parturient montes, nascetur mus.
							</p>
							<a class="btn btn-plain-lg " href="#contact">Get Quote</a>
						</div>
                    </div>
                    <div class="two-cols-description-image wow fadeInLeft" data-wow-delay="0.50s">
                       <img src="images/about/about-04.jpg"  alt="" />
                    </div>							
				@endif
                </div>
            </div>	
		</div>
</div>
@endsection

@section('content4')

<div class="container-cover" id="profiles">
	<h2 class="section-title"><strong>{{ __('Meet The Team') }}</strong>
	<div class="header-strips-two"></div></h2>
	<div class="row team-cover">

		@if($rtemplate['profiles']->count() != 0)				
			@foreach($rtemplate['profiles'] as $pf)
				<div class="col-md-3 col-sm-6 ">
					<div class="prof wow fadeInUp" data-wow-delay="1.5s">
						@if($rtemplate['profilesImages']->count() != 0)
							@foreach($rtemplate['profilesImages'] as $pi)
								@if($pi->ref_id == $pf->id)
									<img src="{{ asset('storage/'.$pi->imagePath)}}" alt="Team" class="img-circle avatar-cover"> 
								@endif
							@endforeach
						@else
							<img src="{{ asset('images/client/team-4.jpg')}}" alt="Team" class="img-circle avatar-cover">
						@endif					
						
						<div class="social">
							<a href="{{$pf->twitter}}"><i class="bi bi-twitter"></i></a>
							<a href="{{$pf->facebook}}"><i class="bi bi-facebook"></i></a>
							<a href="{{$pf->instagram}}"><i class="bi bi-instagram"></i></a>
							<a href="{{$pf->linkedin}}"><i class="bi bi-linkedin"></i></a>
						</div>				
						<hgroup class="hgroup-text">
							<h3><strong>{{$pf->name}}</strong></h3>
							<em>{{$pf->title}}</em>
							<p class="profile-txt">{{$pf->bio}} </p>
						</hgroup>
					</div>
				</div>
			@endforeach	
		@else
				<div class="col-md-3 col-sm-6 ">
					<div class="prof wow fadeInUp" data-wow-delay="1.5s">
						<img src="images/client/team-1.jpg" alt="Team" class="img-circle avatar-cover">
						<div class="social">
							<a href=""><i class="bi bi-twitter"></i></a>
							<a href=""><i class="bi bi-facebook"></i></a>
							<a href=""><i class="bi bi-instagram"></i></a>
							<a href=""><i class="bi bi-linkedin"></i></a>
						</div>				
						<hgroup class="hgroup-text">
							<h3><strong>Dr. Harvey Monahan</strong></h3>
							<em>CEO / Founder</em>
							<p class="profile-txt">Dolore esse reprehenderit occaecati et molestiae autem. Nisi sed rerum dicta ut qui accusamus iste. Sed sit amet aperiam est laborum ullam. </p>
						</hgroup>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ">
					<div class="prof wow fadeInUp" data-wow-delay="1.5s">
						<img src="images/client/team-2.jpg" alt="Team" class="img-circle avatar-cover">
						<div class="social">
							<a href=""><i class="bi bi-twitter"></i></a>
							<a href=""><i class="bi bi-facebook"></i></a>
							<a href=""><i class="bi bi-instagram"></i></a>
							<a href=""><i class="bi bi-linkedin"></i></a>
						</div>				
						<hgroup class="hgroup-text">
							<h3><strong>Liana Green</strong></h3>
							<em>Chief Engineer</em>
							<p class="profile-txt">Sed sit amet aperiam est laborum ullam. Dolore esse reprehenderit occaecati et molestiae autem. Nisi sed rerum dicta ut qui accusamus iste. </p>
						</hgroup>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ">
					<div class="prof wow fadeInUp" data-wow-delay="1.5s">
						<img src="images/client/team-3.jpg" alt="Team" class="img-circle avatar-cover">
						<div class="social">
							<a href=""><i class="bi bi-twitter"></i></a>
							<a href=""><i class="bi bi-facebook"></i></a>
							<a href=""><i class="bi bi-instagram"></i></a>
							<a href=""><i class="bi bi-linkedin"></i></a>
						</div>				
						<hgroup class="hgroup-text">
							<h3><strong>Destiny Hoppen</strong></h3>
							<em>Architect</em>
							<p class="profile-txt"> Nisi sed rerum dicta ut qui accusamus iste. Dolore esse reprehenderit occaecati et molestiae autem. Sed sit amet aperiam est laborum ullam. </p>
						</hgroup>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ">
					<div class="prof wow fadeInUp" data-wow-delay="1.5s">
						<img src="images/client/team-4.jpg" alt="Team" class="img-circle avatar-cover">
						<div class="social">
							<a href=""><i class="bi bi-twitter"></i></a>
							<a href=""><i class="bi bi-facebook"></i></a>
							<a href=""><i class="bi bi-instagram"></i></a>
							<a href=""><i class="bi bi-linkedin"></i></a>
						</div>				
						<hgroup class="hgroup-text">
							<h3><strong>Georgiana Adams</strong></h3>
							<em>Interior Designer</em>
							<p class="profile-txt"> Reprehenderit occaecati et molestiae autem dolore esse. Sed sit amet aperiam est laborum ullam. Nisi sed rerum dicta ut qui accusamus iste.</p>
						</hgroup>
					</div>
				</div>				
		@endif	
	</div>
</div>
@endsection
@section('content5')

<div class="container-cover" id="services">
<h2 class="section-title"><strong>{{ __('What Our Clients Have To Say') }}</strong>
<div class="header-strips-two"></div></h2>
        <!-- Testimonials -->
        <div class="section section-padding theme-bg">
            <div class="container">
                <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
					@if($rtemplate['testimonials']->count() == 0)				
						@foreach($rtemplate['testimonials'] as $ts)
							<div class="testimonial">
								<div class="commenter-thumb">
									@if($rtemplate['testimonialImages']->count() != 0)
										@foreach($rtemplate['testimonialImages'] as $ti)
											@if($pi->ref_id == $pf->id)
												<img src="{{ asset('storage/'.$ti->imagePath)}}" alt="Client Avatar" class="img-responsive"/>
											@endif
										@endforeach
									@else								
										<img src="images/client/client-avatar.jpg" alt="Client Avatar" class="img-responsive"/>
									@endif
								</div>
								<blockquote>{{ $ts->comment}}</blockquote>
								<div class="client-info">
									<h5 class="client-name">{{ $ts->name}}</h5>
									<p class="client-profession">{{ $ts->title}}</p>
								</div>
							</div>					
						@endforeach	
					@else				
						<div class="testimonial">
							<div class="commenter-thumb">
								<img src="images/client/client-avatar.jpg" alt="Client Avatar" class="img-responsive"/>
							</div>
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</blockquote>
							<div class="client-info">
								<h5 class="client-name">Lucass Anderson</h5>
								<p class="client-profession">Executive Director, Zmdroop Corporation</p>
							</div>
						</div>
						<div class="testimonial">
							<div class="commenter-thumb">
								<img src="images/client/avatar.jpg" alt="Client Avatar" class="img-responsive">>
							</div>
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</blockquote>
							<div class="client-info">
								<h5 class="client-name">Janet White</h5>
								<p class="client-profession">Public Relations, Zmdroop Corporation</p>
							</div>
						</div>
						<div class="testimonial">
							<div class="commenter-thumb">
								<img src="images/client/client-avatar.jpg" alt="Client Avatar" class="img-responsive">>
							</div>
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</blockquote>
							<div class="client-info">
								<h5 class="client-name">Lucass Anderson</h5>
								<p class="client-profession">Executive Director, Zmdroop Corporation</p>
							</div>
						</div>
					@endif						
                </div>	
            </div>
        </div>
	    <!-- Testimonials End -->
         <!-- MORE FEATURES=================================== -->
        <div class="full-screen-box purple-bg">
            <div class="container-fluid two-cols-description-row">
               <div class="two-cols-description-row">
                  <div class="two-cols-description-image wow fadeInLeft" data-wow-delay="0.50s">
                     <img src="images/about/about-06.jpg" alt=""/>
                  </div>
                  <div class="two-cols-description-text wow fadeInRight" data-wow-duration="1.5s">
                     <div class="two-cols-description-text-inner">
                        <div class="heading">
                           <h2 class="bold-font text-center">Some Interesting Facts</h2>
						   <div class="header-strips-two"></div>
                           <h3 class="light-font subheading">Flannel ennui narwhal, craft beer twee Vice plaid authentic synth. Flannel ennui narwhal, craft beer twee Vice plaid authentic synth.</h3>
                        </div>
                        <div class="container" data-aos="fade-up">
                            <div class="row project-counter g-5">
                                <div class="col-sm-6 text-start" >
									<span class="counter-iconR">
										<i class="fas fa-briefcase fa-2x text-start rounded"></i>
									</span>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1258" data-purecounter-duration="3">1</h2>
                                    <p>Total Projects</p>
                                </div>
                                <div class="col-sm-6" >
									<span class="counter-iconR">
										<i class="fas fa-award fa-2x rounded "></i>
									</span>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="3">1</h2>
                                    <p>Awards</p>
                                </div>
                                <div class="col-sm-6">
									<span class="counter-iconR">
										<i class="fas fa-users fa-2x rounded "></i>
									</span>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1255" data-purecounter-duration="3">1</h2>
                                    <p>Happy Clients</p>
                                </div>
                                <div class="col-sm-6">
									<span class="counter-iconR">
										<i class="fas fa-clock fa-2x rounded"></i>
									</span>	
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1157" data-purecounter-duration="3">1</h2>
                                    <p>Good Reviews</p>
                                </div>
                            </div>
                        </div> <!-- end of container -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- CLIENTS =================================== -->          
        <div id="clients" class="p-top-50 p-bot-50">
            <div class="container">
               <!--Client logo-->
               <div id="carousel-our-clients" class="owl-carousel text-center margin-top-20">
				@if($rtemplate['carouselImages']->count() > 5)
					@foreach($rtemplate['carouselImages'] as $ci)	
						<div class="our-clients"> <a href="#"> <img src="{{ asset('storage/'.$ci->imagePath)}}" class="img-responsive" alt="" /> </a> </div>
					@endforeach			   
			   @else
                  <div class="our-clients"> <a href="#"> <img src="images/client/1.png" class="img-responsive" alt="" /> </a> </div>
                  <div class="our-clients"> <a href="#"> <img src="images/client/2.png" class="img-responsive" alt="" /> </a> </div>
                  <div class="our-clients"> <a href="#"> <img src="images/client/3.png" class="img-responsive" alt="" /> </a> </div>
                  <div class="our-clients"> <a href="#"> <img src="images/client/4.png" class="img-responsive" alt="" /> </a> </div>
                  <div class="our-clients"> <a href="#"> <img src="images/client/5.png" class="img-responsive" alt="" /> </a> </div>
                  <div class="our-clients"> <a href="#"> <img src="images/client/6.png" class="img-responsive" alt="" /> </a> </div>
                  <div class="our-clients"> <a href="#"> <img src="images/client/7.png" class="img-responsive" alt="" /> </a> </div>
                  <div class="our-clients"> <a href="#"> <img src="images/client/8.png" class="img-responsive" alt="" /> </a> </div>
                  <div class="our-clients"> <a href="#"> <img src="images/client/9.png" class="img-responsive" alt="" /> </a> </div>
                  <div class="our-clients"> <a href="#"> <img src="images/client/10.png" class="img-responsive" alt="" /> </a> </div>
                  <div class="our-clients"> <a href="#"> <img src="images/client/11.png" class="img-responsive" alt="" /> </a> </div>
               </div>
			   @endif
               <!--/Client logo--> 
            </div>
         </div>
</div>
@endsection

@section('content7')

<div class="container-cover" id="contact">
  
	<h2 class="section-title contact-title"><strong>{{ __('Contact Us') }}</strong><div class="header-strips-two"></div></h2>
	<br/>
         <!-- CONTACT
            =================================== -->
        <div id="contact" class="p-top-90 p-bot-90 light-gray-bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-5 center-block wow fadeIn" data-wow-delay="1.0s">
                     <div class="heading text-center">
                        <h2 class="bold-font">Get In Touch With Us</h2>
                        <div class="header-strips-two"></div>
                        <div class="subheading">Send us a message or request a quote</div>
                     </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6 contactLeft wow fadeIn" data-wow-delay="0.5s">
                    
                     <!-- Contact form --> 
						<form class="contact__form singleForm" id="form_sendemail" method="post" action="messages" enctype="multipart/form-data" data-parsley-validate>
							<div class="row">
							   <!-- Name -->
							   <div class="form-group">
								  <label for="name" class="sr-only">Your name</label>
								  <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required />
								  <span class="help-block"></span> 
							   </div>
							   <!-- Email -->
							   <div class="form-group">
								  <label for="email" class="sr-only">Your email address</label>
								  <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required />
								  <span class="help-block"></span> 
							   </div>
							   <!-- Message -->
							   <div class="form-group">
								  <label for="message" class="sr-only">Your message</label>
								  <textarea name="message" class="form-control" rows="9" id="message" placeholder="Message" required ></textarea>
								  <span class="help-block"></span> 
							   </div>
							</div>
							<div class="text-center">
							   <button type="submit" class="btn-bold-lg submit" id="send-btn" name="SendMessage"> Send Message </button>
							   <div class="clearfix"></div>
							</div>
						</form>
                    </div>
                    <div class="col-md-6 contactRight wow fadeIn" data-wow-delay="0.5s">
						<div class="contactDetails">
							<div id="map" class="google-map"></div>
							<h3><strong>Contact Details</strong></h3>
							@if($rtemplate['appDefaults']->count() == 0)						
								<p>{{$rtemplate['appDefaults']->contactText}}</p>
								<p> <i class="icon-pin"></i>  {{$rtemplate['appDefaults']->address}}</p>
								<p> <i class="icon-screen-smartphone"></i>  {{$rtemplate['appDefaults']->phone}}</p>
								<p> <i class="icon-envelope-open"></i>  {{$rtemplate['appDefaults']->email}}</p>
								
							@else					
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<p> <i class="icon-pin"></i> 15-A Hendon Ave, Mount Albert Auckland, New Zealand</p>
								<p> <i class="icon-screen-smartphone"></i> +1800 1234 56789</p>
								<p> <i class="icon-envelope-open"></i> support@websitename.com</p>
								<p> <i class="icon-link"></i> www.websitename.com</p>							
							@endif
						</div>
                    </div>
                </div>
            </div>
        </div>
		
</div>


@endsection


