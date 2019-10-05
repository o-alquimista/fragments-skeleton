<div class="container py-3">
  <?php $this->renderFeedback() ?>
  <h3 class="pb-2">Registered users</h3>
  <div class="list-group">
    <?php foreach ($this->userList as $username): ?>
      <a href="/profile/<?php echo $username ?>" class="list-group-item list-group-item-action">
        <?php $this->escape($username) ?>
      </a>
    <?php endforeach ?>
  </div>
</div>
