<?php
require_once(__DIR__ . "/database.php");
session_start();
session_regenerate_id(true);

$path = "/BlairBlog/";

$host = "localhost";
   $username = "root";
   $password  = "root";
   $database = "blog_db";
   
   if(!isset($_SESSION["connection"])) {
   $connection = new Database($host, $username, $password, $database);
   $_SESSION["connection"] = $connection;}
   //I configured this page with my database.php page.
