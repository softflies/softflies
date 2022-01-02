<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', app()->getLocale()) ?>">
<style>
body, html {
  height: 100%;
  margin: 0;
}
.bg {
  background-color: #000000;
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: xxx-large;
}
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
<body>
<div class="bg">
  <div class="middle">
    <p><?php echo env("APP_NAME"); ?></p>
    <hr>
    <span><?php echo app()::VERSION; ?></span>
  </div>
</div>
</body>
</html>