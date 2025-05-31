<?php
session_start();
require_once __DIR__ . '/../classes/Customer.php';
require_once __DIR__ . '/../SARS.php';

$custom = new Customer;
$customer = $custom->fetch_customer_byId($_SESSION['cust_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Customer Dashboard</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .sidebar {
      background-color: #61bb43;
      height: 100vh;
    }

    .sidebar .nav-link {
      color: white;
    }

    .sidebar .nav-link:hover {
      background-color: #4e9c36;
    }

    .info {
      font-size: 1.5rem;
    }

    @media (max-width: 768px) {
      #sidebar {
        display: none;
      }
      #sidebar.active {
        display: block;
        position: absolute;
        top: 56px;
        left: 0;
        z-index: 999;
        width: 280px;
      }
    }
  </style>
</head>
<body>

<!-- MOBILE NAV -->
<nav class="navbar navbar-light bg-light d-md-none">
  <div class="container-fluid">
    <button class="btn btn-success" type="button" id="sidebarToggle">☰ Menu</button>
    <span class="navbar-brand mb-0 h1">WasteApp</span>
  </div>
</nav>

<!-- TOP NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-md-flex">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MOTTANAI</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- LAYOUT START -->
<div class="container-fluid">
  <div class="row">

    <!-- SIDEBAR -->
    <div class="col-md-3 p-0">
      <div id="sidebar" class="sidebar p-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="profile.php" class="nav-link">Update Profile</a>
          </li>
          <li class="nav-item">
            <a href="custom_waste.php" class="nav-link">Dispose Waste</a>
          </li>
          <li class="nav-item">
            <a href="custom_history.php" class="nav-link">View History</a>
          </li>
          <li class="nav-item">
            <a href="../admin/custom_view_product.php" class="nav-link">Waste Calculator</a>
          </li>
          <li class="nav-item">
            <form action="process/logout_process.php" method="post">
              <button class="btn btn-sm btn-light mt-3" name="btn_logout">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>

    <!-- MAIN CONTENT START -->
    <div class="col-md-9 p-4">
