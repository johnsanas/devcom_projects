<?php
  session_start();
  if(!isset($_SESSION["judge_id"])){
    //echo("<script>alert('not isset judge');</script>");
    header("location:index.php");
  }
  else{
    //echo("<script>alert('isset judge');</script>");
  }
?>