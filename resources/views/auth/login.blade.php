
@include('partials.header')

<div class="body-container">
<div class="log-container" id="log-container">
	<div class="form-container sign-up-container">
		<form action="{{ route('registerSave') }}" method="POST">
		@csrf	
		<h1 class="header-one">Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
				<a href="#" class="social"><i class="fa-brands fa-google"></i></a>
				<a href="#" class="social"><i class="fa-brands fa-linkedin"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="regName" placeholder="Name" />
			<input type="email" name="regMail" placeholder="Email" />
			<input type="password" name="regPass" placeholder="Password" />
			<input type="password" name="regPass_confirmation" placeholder="Confirm Password" />
			<button type="submit" value="submit" name="regSubmit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{ route('loginSave') }}" method="POST">
		@csrf
			<h1 class="header-one">Sign in</h1>
			@if(Session::has('success'))
				<div class="alert">{{ Session::has('success') }}</div>
			@endif
			<div class="social-container">
				<a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
				<a href="#" class="social"><i class="fa-brands fa-google"></i></a>
				<a href="#" class="social"><i class="fa-brands fa-linkedin"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button type="submit" name="loginSubmit" value="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1 class="header-one">Welcome Back!</h1>
				<p class="p1">To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1 class="header-one">Hello, Buddy!</h1>
				<p class="p1">Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div>
@include("partials.footer-script")