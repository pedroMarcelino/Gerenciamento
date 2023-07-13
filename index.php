<?php
    session_start();
    $_SESSION['code']=="" ? header("Location: src/login/index.php") : header("Location: index.php"); 