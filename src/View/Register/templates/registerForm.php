<div class="container py-3">
  <?php $this->renderFeedback() ?>
  <h3 class="pb-2">Register</h3>
  <form method="post" action="/register">
    <div class="form-group">
      <label for="inputUsername">Username</label>
      <input id="inputUsername" type="text" class="form-control" name="username"
        minlength="4" maxlength="25" pattern="^[a-zA-Z0-9_]+$"
        title="Up to 25 alphanumerical characters and underscore(_), no shorter than 4 characters."
        autocapitalize="off" autofocus="autofocus" required="required"/>
    </div>
    <div class="form-group">
      <label for="inputPassword">Password</label>
      <input id="inputPassword" type="password" class="form-control" name="passwd"
        title="Must be longer than or equal to 8 characters" minlength="8"
        autocapitalize="off" autocomplete="off" required="required"/>
    </div>
    <input type="hidden" name="_csrf_token"
      value="<?php $this->csrfToken('registration') ?>"/>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">
          Create an account
      </button>
    </div>
  </form>
</div>
