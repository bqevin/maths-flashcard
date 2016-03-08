<?php 
  require_once "Timer.php";
  $timer = new Timer();
?>
<HTML>
  <HEAD>
    <TITLE>Test Page (elapsed time: <?= $timer->elapsed() ?> seconds)</TITLE>
  </HEAD>
  <BODY>
    This is a simple test page.
    Elapsed time: <?= $timer->elapsed() ?> seconds.
  </BODY>
</HTML>
<!-- Final elapsed time: <?= $timer->elapsed() ?> seconds. -->