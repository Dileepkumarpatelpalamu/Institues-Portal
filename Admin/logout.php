<?php
session_start();
session_destroy();
echo"<script>alert('You are logout successfully!!!!!!!!');</script>";
echo"<script>window.open('../index.php','_self');</script>";

 ?>