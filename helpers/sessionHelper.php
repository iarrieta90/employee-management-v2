<?php

    function isSessionAlive($init, $life)
    {
      echo 'isSessionAlive';
      $actual_time = time();
      $session_finish = $init + $life;

      if ($actual_time >= $session_finish) {
        $head = "Refresh: 0;" . URL . "login";
        header($head);
      }
    }
?>
