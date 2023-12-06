<?php

session_start();
$_SESSION = array();
unset($_SESSION);
echo " <script>window.location='login';</script>";
