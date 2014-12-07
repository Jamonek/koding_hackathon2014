<div class="well">
  <!-- Contact Form -->
  <form action="<?=base_url();?>login/push" method="POST" role="form"> <!--Dont know what acton to use -->
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="john@college.edu">
    </div>
    <div class="form-group">
      <label for="accountPass">Password</label>
      <input type="password" class="form-control" id="accountPass" name="password" placeholder="&bullet;&bullet;&bullet;&bullet;&bullet;&bullet;">
    </div>
    <div class="form-group">
      <input type="submit" class="form-control btn btn-info btn-lg" name="submit" value="Send">
    </div>
  </form>
</div>
