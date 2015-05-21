<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>


</head>
<body>

<div id="container">
    <h1>Welcome to CodeIgniter!</h1>

    <div id="body">
      <h1>Đây là hoctro</h1>


        <h2>ĐÂy la thong tin duyet mang </h2>
       <?php

       foreach($xiao as $k=>$v)
       {

       echo ($k . " - " .  $v . "<br/>");

       }



       ?>
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>