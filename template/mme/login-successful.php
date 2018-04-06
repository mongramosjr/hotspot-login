<?php
/*

 */


echo "<div class='container-fluid'><div class='alert-wrapper  text-center'>";

echo "<div class='alert alert-primary text-center' role='alert'>
    $h1Successful";
if ($reply) { 
  echo "<hr><p class='mb-0'>$reply</p>";
}
echo "</div>";

echo "<a class='btn btn-success' href=\"http://$uamip:$uamport/logoff\" role='button'>Logout</a>";
echo "</div></div>";
