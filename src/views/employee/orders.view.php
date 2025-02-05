<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css">
    <title>Shop</title>

</head>

<body dir="ltr">
<?php
$page = 'feedbacks';

include "./includes/header/header.php";
include "./includes/chatbot/chatbot.php";


?>
<div class="min-h-screen flex">
    <?php //  <!--   SIDEBAR  -->
    include "./includes/sidebar/sidebar.php"; ?>

    <main class="flex-1 pl-16 pt-20">

        <?php
        include "views/includes/tables/tasksTable.php";
        ?>

    </main>
</div>

</body><?php
