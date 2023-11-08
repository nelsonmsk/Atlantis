    <footer class="position-relative" id="footer-main">
    <!-- Footer Subscribe -->
    <div class="subscription-area section-padding theme-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="wow fadeInLeft subscription-text" data-wow-duration="1.5s">Subscribe to the<br/> newsletter</h3>
                </div>
                <div class="col-md-6">
                    <form class="subscription wow fadeInRight" data-wow-duration="1.5s" action="#" method="post">
                        <input type="email" name="email" class="form-control"  placeholder="Enter your mail here" required>
                        <button type="submit">Submit</button>
                        <p class="newsletter-success"></p>
                        <p class="newsletter-error"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Subscribe -->	
	
        <div class="footer pt-lg-7 footer-dark bg-dark-2">
            
            <!-- Footer -->
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <!-- Theme's logo -->
                        <a class="footer-name" href="">
							@if ($rtemplate['appDefaults']->appTitle)
								{{$rtemplate['appDefaults']->appTitle}}
							@else
								{{ __('Atlantis') }}
							@endif
                        </a>
                        <!-- Webpixels' mission -->
						@if ($rtemplate['appDefaults']->contactText)
							<p class="mt-4 text-sm opacity-8 pr-lg-4">{{$rtemplate['appDefaults']->contactText}}</p>							
							
						@else						
							<p class="mt-4 text-sm opacity-8 pr-lg-4">Atlantis attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
                        @endif
						<!-- Social -->
                        <ul class="nav mt-4">
                            <li class="nav-item">
							@if ($rtemplate['appDefaults']->twitter)
                                <a class="nav-link pl-0" href="{{$rtemplate['appDefaults']->twitter}}" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
							@else
                                <a class="nav-link pl-0" href="https://twitter.com/atlantis" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>								
							@endif
                            </li>
                            <li class="nav-item">
							@if ($rtemplate['appDefaults']->facebook)
                                <a class="nav-link" href="{{$rtemplate['appDefaults']->facebook}}" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
							@else
                                <a class="nav-link" href="https://facebook.com/atlantis" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>								
							@endif
                            </li>
                            <li class="nav-item">
							@if ($rtemplate['appDefaults']->instagram)							
                                <a class="nav-link" href="{{$rtemplate['appDefaults']->instagram}}" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
							@else
                                <a class="nav-link" href="https://www.instagram.com/atlantis" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>								
							@endif
                            </li>
                            <li class="nav-item">
							@if ($rtemplate['appDefaults']->linkedin)							
                                <a class="nav-link" href="{{$rtemplate['appDefaults']->linkedin}}" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
							@else
                                <a class="nav-link" href="https://www.linkedin.com/atlantis" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>								
							@endif
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">General</h6>
                        <ul class="list-unstyled">
                            <li><a href="{{ config('app.url') }}/#portfolio">Projects</a></li>
                            <li><a href="{{ config('app.url') }}/#carousel-our-clients">Clients</a></li>
                            <li><a href="{{ config('app.url') }}/#profiles">Team</a></li>
                            <li><a href="{{ config('app.url') }}/#testimonial-carousel">Testimonies</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">About</h6>
                        <ul class="list-unstyled">
                            <li><a href="{{ config('app.url') }}/#services">Services</a></li>
                            <li><a href="{{ config('app.url') }}/#">Pricing</a></li>
                            <li><a href="{{ config('app.url') }}/#contact">Contact</a></li>
                            <li><a href="{{ config('app.url') }}/#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Company</h6>
                        <ul class="list-unstyled">
                            <li><a href="{{ config('app.url') }}/#">Community</a></li>
                            <li><a href="{{ config('app.url') }}/#">Help center</a></li>
                            <li><a href="{{ config('app.url') }}/#">Support</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class="col-md-6">
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
						&copy;
							<script>
								document.write(new Date().getFullYear())
							</script>					
						@if ($rtemplate['appDefaults']->appTitle)							
                            <a href="" class="font-weight-bold" target="_blank">{{$rtemplate['appDefaults']->appTitle}}</a>. By Nelsonmsk. All rights reserved
                        @else
							<a href="" class="font-weight-bold" target="_blank">{{ __('Atlantis') }}</a>. By Nelsonmsk. All rights reserved
						@endif
						</div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Terms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Privacy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <!-- Back To Top Button -->
	 <div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-up"></i></a>
	 </div>
    <!-- end of back to top button -->			
    </footer>

    	