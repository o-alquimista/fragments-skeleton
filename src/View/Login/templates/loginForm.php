<div class="container py-3">
  <?php $this->renderFeedback() ?>
  <h3 class="pb-2">Login</h3>
  <form method="post" action="/login">
    <div class="form-group">
      <label for="inputUsername">Username</label>
      <input id="inputUsername" type="text" class="form-control" name="username"
        autocapitalize="off" autofocus="autofocus" required="required"/>
    </div>
    <div class="form-group">
      <label for="inputPassword">Password</label>
      <input id="inputPassword" type="password" class="form-control" name="passwd"
        autocapitalize="off" autocomplete="off" required="required"/>
    </div>
    <input type="hidden" name="_csrf_token"
      value="<?php $this->csrfToken('login') ?>"/>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">
        Sign In
      </button>
    </div>
  </form>
</div>
