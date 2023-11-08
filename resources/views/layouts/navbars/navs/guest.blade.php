<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-transparent  fixed-top  text-white ">
 
<div class="container" id="main-nav">
  
  <div class="navbar-wrapper">
    @if($rtemplate['appDefaults'])
    <a class="navbar-brand" href="{{ config('app.url')}}">{{$rtemplate['appDefaults']->appTitle}}</a>
	@else
    <a class="navbar-brand" href="{{ config('app.url')}}">Atlantis</a>		
	@endif
   </div>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
  
    <span class="sr-only">Toggle navigation</span>

      <span class="navbar-toggler-icon icon-bar"></span>
  
    <span class="navbar-toggler-icon icon-bar"></span>

      <span class="navbar-toggler-icon icon-bar"></span>
  
  </button>
   
 <div class="collapse navbar-collapse justify-content-end">
 
     <ul class="navbar-nav">
 
       <li class="nav-item{{ $activePage == 'home' ? ' active' : '' }}">
 
			<a href="{{ config('app.url') }}" class="nav-link">
  
				Home
 
         </a>
    
		</li>
  
		<li class="nav-item{{ $activePage == 'about' ? ' active' : '' }}">
  
			<a href="{{ config('app.url') }}/#about" class="nav-link">
      
				About
   
			</a>
     
		</li>
 		<li class="nav-item{{ $activePage == 'services' ? ' active' : '' }}">
   
			<a href="{{ config('app.url') }}/#services" class="nav-link">

				Services			
      
			</a>
       
		</li>    
		<li class="nav-item{{ $activePage == 'portfolio' ? ' active' : '' }}">
   
			<a href="{{ config('app.url') }}/#portfolio" class="nav-link">

				Portfolio			
      
			</a>
       
		</li>
      
		<li class="nav-item{{ $activePage == 'profiles' ? ' active' : '' }}">
    
			<a href="{{ config('app.url') }}/#profiles" class="nav-link">

				Team
 
			</a>
    
		</li> 
		
				
		<li class="nav-item{{ $activePage == 'contact' ? ' active' : '' }}">
    
			<a href="{{ config('app.url') }}/#contact" class="nav-link">
 
				Contact
 
			</a>
    
		</li>

		<li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
   
			<a href="{{ config('app.url') }}/login" class=" btn btn-plain-lg nav-link">

				Login
      
			</a>
       
		</li>
 
     </ul>
 
   </div>
  
</div>

</nav>

<!-- End Navbar -->