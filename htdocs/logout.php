<?php
session_start();
if(session_destroy())
{
header("Location: Result_Recoder.html");
}
?>

