<?php

// Your PHP code to include session and database connections
 include('database/db-connect.php');
 session_name('user_session');
session_start();
include('delete_items.php');



$result_image = '';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $image = "SELECT image FROM users WHERE email = '$email'";
    $result_image_query = mysqli_query($conn, $image);

    if ($result_image_query) {
        $image_fetch = mysqli_fetch_array($result_image_query);
        $result_image = $image_fetch['image'];
    }
}

$sql = "SELECT COUNT(*) as total FROM cart_details";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $length = $row['total'];
} else {
    echo "Error: " . $conn;
}






?>

 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="d-image/fav-icon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles for sliding effect */
        #mobile-menu {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            transition: max-height 0.3s ease-out;
            max-height: 0;
            overflow: hidden;
            z-index: 20; /* Ensure it's above other content */
        }

        #mobile-menu.open {
            max-height: 500px; /* Adjust based on your content height */
        }

        /* Ensure the overlay covers the entire screen */
        #overlay {
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 10;
        }
    </style>
    <title>Library Management System</title>
</head>

<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-green-500 text-white z-10 relative">
        <div class="container mx-auto flex items-center justify-between p-4">
            <!-- Logo -->
            <a href="index.php" class="text-2xl font-bold border-b hover:border-b-red-600 transition-all">LMS</a>

            <!-- Toggle Button for Mobile -->
            <button id="menu-toggle" class="lg:hidden text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
           
            <!-- Navbar Links -->
            <div id="menu" class="hidden lg:flex space-x-6 items-center">
                <?php if (!isset($_SESSION['email'])) { 
                    echo'
                    <a href="_adminlogin.php" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md">Admin Login</a>
                    <a href="_login.php" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md">User Login</a>
                    <a href="_register.php" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md">Register</a>
                    <a class="nav-link" href="view_profile.php">
                        <img src="d-image/user.png" alt="profile image" class="index_image_profile w-14 h-14 object-fit border rounded-full">
                    </a>';
                
                 } else { 
                    echo'
                    <a href="_logout.php" class="block px-4 py-2 text-white hover:bg-gray-600">Logout</a>
                    <a href="user_dashboard.php" class="block px-4 py-2 text-white hover:bg-gray-600">User Dashboard</a>
                    <a href="view_profile.php" class="block px-4 py-2 text-white hover:bg-gray-600">View Profile</a>
                    <button onclick="openCartSidebar()" class="text-white">
                        <i class="bi bi-bag"><sup class="font-bold text-md"> '.$length.'</sup></i>
                    </button>
                    <div class="nav-item">
                        <a class="nav-link" href="view_profile.php">
                            <img src="user_images/'.$result_image.'" alt="profile image" class="index_image_profile w-14 h-14 object-fit border rounded-full">
                        </a>
                    </div>';
                  
                  } ?>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="bg-gray-700 lg:hidden flex justify-center">
            <?php if (!isset($_SESSION['email'])){ 
             echo'   <a href="_adminlogin.php" class="block px-4 py-2 text-white hover:bg-gray-600">Admin Login</a>
                <a href="_login.php" class="block px-4 py-2 text-white hover:bg-gray-600">User Login</a>
                <a href="_register.php" class="block px-4 py-2 text-white hover:bg-gray-600">Register</a>
                <a class="nav-link" href="view_profile.php">
                    <img src="d-image/user.png" alt="profile image" class="index_image_profile w-14 h-14 object-fit border rounded-full">
                </a>';
               
            } else{ 
               echo' <a href="_logout.php" class="block px-4 py-2 text-white hover:bg-gray-600">Logout</a>
                <a href="user_dashboard.php" class="block px-4 py-2 text-white hover:bg-gray-600">User Dashboard</a>
                <a href="view_profile.php" class="block px-4 py-2 text-white hover:bg-gray-600">View Profile</a>
                <div class="nav-item">
                    <a class="nav-link" href="view_profile.php">
                        <img src="user_images/'.$result_image.'" alt="profile image" class="index_image_profile w-14 h-14 object-fit border rounded-full">
                    </a>
                </div>
                </div>
                <button onclick="openCartSidebar()" class="text-white text-end lg:hidden">
                    <i class="bi bi-bag"><sup class="font-bol text-md">'.$length.'</sup></i>
                </button>

                ';
        }?>
                       </nav>
          
    <!-- SIDE BAR -->
 <!-- SIDE BAR -->
<div id="sidebar" class="sidebar fixed inset-y-0 left-0 w-80 bg-white shadow-lg p-4 z-50 transform -translate-x-full transition-transform duration-300">
    <button onclick="closeSidebar()" class="text-blue-500 absolute top-4 right-4 text-2xl">&times;</button>
    <div id="cart-details">
        <!-- Cart details will be loaded here -->
    </div>
    <form action="" method="POST" id="checkout-form">
        <input type="hidden" id="book_id" name="book_id">

        <?php
        $select = "SELECT * FROM cart_details";
        $result = mysqli_query($conn, $select);
        $num_rows = mysqli_num_rows($result);
        if ($num_rows > 0) {
            while ($fetch = mysqli_fetch_assoc($result)) {
                $book_name = $fetch['book_name'];
                $author_name = $fetch['author_name'];
                $book_price = $fetch['book_price'];
                $total_price = $fetch['total_price'];
                $quantity = $fetch['quantity'];
                $image = $fetch['image'];
                echo ' <div class="container mx-auto">
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Book Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Price</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Example Row -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="book_images/' . $image . '" alt="Book Image" class="w-16 h-16 object-cover rounded">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">' . $book_name . '</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">' . $author_name . '</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">' . $book_price . '</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">' . $quantity . '</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">' . $total_price . '</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>';
            }
            echo '<a href="checkout.php" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-md hover:opacity-85">Checkout</a>
        <form method="POST" action="delete_items.php">
            <input value="Clear Cart" name="delete" type="submit" class="mt-4 bg-gray-300 border text-white px-4 py-2 rounded-md hover:opacity-85">
        </form>';
        } else {
            echo '<h1 class="text-center text-red-500 text-lg">No items in cart Yet!</h1>';
        }
        ?>
    </form>
</div>
    <!-- OVERLAY -->
    <div id="overlay" class="hidden"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const overlay = document.getElementById('overlay');

            menuToggle.addEventListener('click', () => {
                if (mobileMenu.classList.contains('open')) {
                    mobileMenu.classList.remove('open');
                    overlay.classList.add('hidden');
                } else {
                    mobileMenu.classList.add('open');
                    overlay.classList.remove('hidden');
                }
            });

            overlay.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                overlay.classList.add('hidden');
            });

            window.openCartSidebar = function () {
                document.getElementById('sidebar').classList.remove('-translate-x-full');
                document.getElementById('overlay').classList.remove('hidden');
            }

            window.closeSidebar = function () {
                document.getElementById('sidebar').classList.add('-translate-x-full');
                document.getElementById('overlay').classList.add('hidden');
            }
        });
    </script>
   
</body>

</html>
