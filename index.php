<?php
session_start();
# jika saat load halaman ini, pastikan telah login sbg user
if (!isset($_SESSION["user"])) {
    header("location:login.php");
}
include "navbar.php";
?>
<!doctype html>
<html lang="en">
  <head>
  </head>
  <body>
  <h1 style="background-color:rgb(60, 60, 60);">
    <div>
    <img style="width:100%" src="source.gif">
    </div>
    </h1>
  </body>
</html>