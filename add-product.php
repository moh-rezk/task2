<?php

include_once('index.php');
if (isset($_POST['submit'])) {
  
    $pro_name=$_POST['pro_name'];
    $pro_disc=$_POST['pro_disc'];
    $pro_peice=$_POST['pro_price'];
  
  $error=[];
  
  // name → required | string | min:5 | max:255
  if (empty($pro_name)) {
      $error[]='product name must be not empty';
  }elseif(!is_string($pro_name)){
      $error[]='product name must be string ';
  }elseif(strlen($pro_name)<5){
      $error[]='product name must be more then 5 char  ';
  }elseif(strlen($pro_name)>255){
      $error[]='product name must be less then 255 char  ';
  }
  // description → optional | string 
  
  if (empty($pro_disc)) {
      $error[]='';
  
  }elseif (!is_string($pro_disc)) {
      $error[]='product disc must be string ';
      
  }
  
  // price → required | number | min:0 
  if (empty($pro_peice)) {
  
      $error[]='product price must be not empty';
  }elseif (!is_numeric($pro_peice)) {
      $error[]='product price must be number';
  }elseif ($pro_peice<0) {
      $error[]='product price must be more then or equal 0';
  }
  
  if (empty($error)) {
  //   print data (name - description if exists - price - price after discount 
  //using the function getPriceWithDiscount from question 2)
  
  echo "product name : $pro_name <br>";
  echo "product disc :  $pro_disc <br>";
  $price= $pro_peice - getPriceWithDiscount($pro_peice);
  echo " product price after discount :$price <br>";
  
  }else {
      print_r($error);
  }
  
  }