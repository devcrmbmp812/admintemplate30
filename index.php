<?php
session_start();
require_once './config/config.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();

//Get Dashboard information

include_once('includes/header.php');
?>
    <div class="content-wrapper">
      <h1>Dashboard Will Be Coming Soon</h1>
    </div>
<?php include_once('includes/footer.php'); ?>

