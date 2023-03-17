<?php

session_start();
require "controller/navigation.php";
require "controller/location.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
      case 'home' :
          home();
          break;
      case 'displayLocation' :
          displayLocation($_POST);
          break;
      case 'displayDetail' :
          displayDetail($_GET['Id'],$_GET['Habitation'], $_GET['Localisation']);
          break;
      default :
          home();
      }
    }
else {
    home();
}