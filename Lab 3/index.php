<?php
error_reporting(E_ALL); 
if (file_exists('index.html'))
{     include_once('index.html');   } else
{     die("<br>Error: index.html not found!"); }

?>
