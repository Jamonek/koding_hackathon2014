<div class="container">
	<!-- Sign up Form -->
	<form action="/signup/push" method="POST" role="form">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" id="username" name="name" placeholder="Goat1">
		</div>
		<div class="form-group">
			<label for="collegeEmail">College Email</label>
			<input type="email" class="form-control" id="collegeEmail" name="email" placeholder="john@college.edu">
		</div>
		<div class="form-group">
			<label for="accountPass">Password</label>
			<input type="password" class="form-control" id="accountPass" name="password" placeholder="&bullet;&bullet;&bullet;&bullet;&bullet;&bullet;">
		</div>
		<div class="form-group">
			<input type="submit" class="form-control btn btn-info btn-lg" name="submit" value="Sign Up">
		</div>
	</form>
</div>
