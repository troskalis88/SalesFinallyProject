
<?php
session_start();

if(!isset($_SESSION['User']))
{
print'<script>Error2();</script>';
header("refresh:1 url=/TallerCookies/Login.php");
}
?>
