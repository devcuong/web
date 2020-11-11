<form method="POST" action="<?php echo $servername ?>/quan-tri-chinh/dang-nhap">
  <div class="form-group">
    <label>Email address</label>
    <input type="text" class="form-control" id="user-email" name="user-email" placeholder="Enter email">
  </div>
  <div>
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="user-password" name="user-password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>