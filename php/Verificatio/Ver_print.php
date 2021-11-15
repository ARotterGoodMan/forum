<?php
session_start();
require "function.php";
require "Ver_class.php";
$name = Captcha::sbu();
session($name);
Captcha::Ver($name);