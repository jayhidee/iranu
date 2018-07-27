@include('layout.header')
	<div class="container">
                @include('layout.nav')
                <div class="con">
                        <div class="row">
                                <div class="col-lg-8">
                                        @yield('content')    
                                </div>
                                <div class="col-lg-2">
                                        @include('layout.sidebar')    
                                </div>
                        </div>
                </div>
	</div>        
@include('layout.footer')