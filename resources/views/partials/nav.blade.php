<!--Cabecera-->
<div class="row mr-1 ml-1 mt-1 bg-azul_oscuro p-2">
	<div class="col d-flex justify-content-start align-items-center">
		<img class="mr-2" src="../../images/JARHe.png" width="80" height="80">
		<h1 class="text-white">Floristeria JARH</h1>
	</div>
</div>
<div class="mr-1 bg-degradado_red_blue ml-1">
	<nav class="navbar navbar-expand-sm navbar-dark primary-color">
		<button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   		<span class="navbar-toggler-icon"></span>
   		</button>

    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="nav navbar-nav mr-auto" id="myTab" role="tablist">
   				<li class="nav-item {{ setActive('home') }}">
       				<a class="nav-link active text-white" href="{{ route('home', app()->getLocale()) }}">@lang('Home')</a>
     			</li>
		    	<li class="nav-item {{ setActive('imagenes') }}">
				   	<a class="nav-link active text-white" href="{{ route('imagenes', app()->getLocale()) }}">@lang('Images')</a>
			 	</li>
			    <li class="nav-item {{ setActive('ramos.index') }}">
		    		<a class="nav-link active text-white" href="/ramos">@lang('Bouquets')</a>
			    </li>
				<li class="nav-item {{ setActive('contacto') }}">
			        <a class="nav-link active text-white" href="{{ route('contacto', app()->getLocale()) }}">@lang('Contact')</a>
			    </li>
			    @guest
			      	<li class="nav-item {{ setActive('login') }}">
					    <a class="nav-link active text-white" href="{{ route('login', app()->getLocale()) }}">@lang('Login')</a>
					</li>
					<li class="nav-item {{ setActive('register') }}">
					    <a class="nav-link active text-white" href="{{ route('register', app()->getLocale()) }}">@lang('Register')</a>
					</li>
				@else
				  	<li class="nav-item">
				  		<a class="nav-link active text-white" href="#" onclick="event.preventDefault();
	                		document.getElementById('logout-form').submit();"
		                	>@lang('Sign off')</a>
			       	</li>
				@endguest

				@foreach (config('app.available_locales') as $locale)
			        <li class="nav-item">
				        <a class="nav-link text-white" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
						@if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
			        </li>
    			@endforeach
	        </ul>
   		</div>
    </nav>
    <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
			@csrf
	</form>
</div>