<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css">
    <title>Shop</title>

</head>

<body class="max-w-screen">
<?php

use controllers\GlobalMethods;

GlobalMethods::setPage('products');

include "includes/header/employeeNav.php";


?>
<div class="min-h-screen flex">
    <?php //  <!--   SIDEBAR  -->
    include "./includes/sidebar/cpanel/superAdmin.sidebar.php"; ?>

    <main
        class="flex-1 mt-20 ml-16 bg-white border border-gray-100 shadow-md shadow-black/5 p-6 mr-3 mb-3 rounded-md lg:col-span-2">
        <?php
        include "views/includes/forms/products/add.php";
        ?>
    </main>
</div>

</body>