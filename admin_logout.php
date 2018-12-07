<?php 

session_start();

session_destroy();

echo"<script>window.open('ad_login.php?log_out=you have logged out successfully,come bak soon!','_self')</script>"

?>