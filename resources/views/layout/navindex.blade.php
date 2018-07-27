
		
			<header>
				<div class="logo">
					<img src="">
					<p>Coded Tee</p>
				</div>
				
				<nav id="dropdown">
					<span id="dropBtn" style="z-index: 999; margin: 20px;"><i class="fas fa-bars"></i></span>

					<div class="hide">
						<a href="/" class="active">Home</a>
						<a href="/about">About Us</a>
						<a href="/projects">Projects Done</a>
						<a href="/posts">Blog</a>
						<a href="/contact">Contact Us</a>
					</div>
				</nav>
			</header>

			<script>
				$(document).ready(function(){					
					var button = document.getElementById("dropBtn").addEventListener("click", function(){
        			$("div.hide").toggleClass("show");
					});
				});
			</script>