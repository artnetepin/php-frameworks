<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thursday example</title>
  <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>
<body>
  <h1>Menu</h1>
  <ul>
    <li><a href="<?php echo site_url('main'); ?>">Main Page</a></li>
    <li><a href="<?php echo site_url('customer/show_customers'); ?>">Show customers</a></li>
    <li><a href="<?php echo site_url('customer/add_customers'); ?>">Add customers</a></li>
    <li><a href="<?php echo site_url('customer/delete_customers'); ?>">Delete customers</a></li>
    <li><a href="<?php echo site_url('customer/update_customers'); ?>">Update customers</a></li>
  </ul>
