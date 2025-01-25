<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f3ef; /* Light beige */
            font-family: Arial, sans-serif;
        }

        .sidebar {
            background-color: #2c2c2c; /* Black */
            color: white;
            min-height: 100vh;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #800000; /* Mehroon */
            color: white;
        }

        .navbar {
            background-color: #800000; /* Mehroon */
        }

        .navbar .navbar-brand {
            color: white;
        }

        .dashboard-card {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #2c2c2c;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="d-flex">
    <div class="sidebar p-3">
    <h3 class="text-center py-2">Admin Panel</h3>
    <a href="#" class="d-block mb-2">Dashboard</a>
    
    <!-- Categories Dropdown -->
    <div class="dropdown mb-2">
        <a class="dropdown-toggle d-block text-decoration-none text-white" href="#" role="button" id="categoriesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
        </a>
        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
            <li><a class="dropdown-item text-dark" href="AddCat.php">Add Category</a></li>
            <li><a class="dropdown-item text-dark" href="ShowCat.php">Show Categories</a></li>
        </ul>
    </div>
    
    <!-- Products Dropdown -->
    <div class="dropdown mb-2">
        <a class="dropdown-toggle d-block text-decoration-none text-white" href="#" role="button" id="productsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Products
        </a>
        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
            <li><a class="dropdown-item text-dark" href="#">Add Product</a></li>
            <li><a class="dropdown-item text-dark" href="#">Manage Products</a></li>
        </ul>
    </div>
    
    <!-- Logout -->
    <a href="#" class="d-block mt-2 text-white">Logout</a>
</div>

 <!-- Main Content -->
 <div class="flex-grow-1">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Furniture Dashboard</a>
                    <form class="d-flex ms-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </nav>