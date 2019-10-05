<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php $this->escape($this->title) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="UTF-8"/>
  <script src="/build/app.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Fragments</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php $this->isActivePath('/profile') ?>">
          <a class="nav-link" href="/profile">Users</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php if ($this->hasSession() && $this->isAuthenticated()): ?>
          <?php $username = $this->getSession()->get('username') ?>

          <li class="nav-item <?php $this->isActivePath('/profile/' . $username) ?>">
            <a class="nav-link" href="/profile/<?php echo $username ?>">
              <?php $this->escape($username) ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        <?php else: ?>
          <li class="nav-item <?php $this->isActivePath('/login') ?>">
            <a class="nav-link" href="/login">Sign In</a>
          </li>
          <li class="nav-item <?php $this->isActivePath('/register') ?>">
            <a class="nav-link" href="/register">Sign Up</a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </nav>
