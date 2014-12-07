<div class="container">
	<!-- Contact Form -->
	<form action="<?=base_url();?>contact/push" method="POST" role="form"> <!--Dont know what acton to use -->
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="john@domain.com">
		</div>
		<div class="form-group">
			<label for="msg">Message</label>
			<textarea class="form-control" name="msg" id="msg" placeholder="Talk to us.."></textarea>
			
		</div>
		<div class="form-group">
			<input type="submit" class="form-control btn btn-info btn-lg" name="submit" value="Send">
		</div>
	</form>
</div>
