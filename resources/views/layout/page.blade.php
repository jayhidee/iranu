@include('layout.header')
	<div class="container">
        @include('layout.nav')
        <div class="con">
              @yield('content')
        </div>
	</div>        
@include('layout.footer')