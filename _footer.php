<?php
include ('database\db-connect.php');


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Library Management System</title>

</head>

<body class="flex flex-col min-h-screen">

    <footer class="bg-green-500 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap md:flex-nowrap">
                <!-- Contact Information -->
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <p class="mb-2"><strong>Address:</strong> 123 Library Street, Booktown</p>
                    <p class="mb-2"><strong>Phone:</strong> (123) 456-7890</p>
                    <p class="mb-2"><strong>Email:</strong> info@library.com</p>
                </div>

                <!-- Quick Links -->
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul>
                        <li><a href="index.php" class="hover:text-black">Home</a></li>
                        <li><a href="about.php" target="_blank" class="hover:text-black">About Us</a></li>
                        <li><a href="services.php" class="hover:text-black">Services</a></li>
                        <li><a href="contact.php" class="hover:text-black">Contact</a></li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="w-full md:w-1/3">
                    <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-500 hover:text-blue-400">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.5C6.49 2.5 2 6.99 2 12.5s4.49 10 10 10c5.51 0 10-4.49 10-10S17.51 2.5 12 2.5zm-1 17.93v-5.47h-1.7V14h1.7v-1.48c0-1.71.82-3.22 2.24-3.22 1.07 0 1.68.08 1.68.08v1.85h-.95c-.93 0-1.2.57-1.2 1.17V14h2.07l-.33 2.02h-1.74v5.48h-2.5z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="text-blue-400 hover:text-blue-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M21 12.86v-1.76c0-.22-.06-.44-.16-.64l-8.7-6.7a.9.9 0 00-1.28 0l-8.7 6.7c-.1.2-.16.42-.16.64v1.76c0 .22.06.44.16.64l8.7 6.7a.9.9 0 001.28 0l8.7-6.7c.1-.2.16-.42.16-.64zm-9 4.24l-6-4.5v-2.25l6-4.5 6 4.5v2.25l-6 4.5z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="text-pink-500 hover:text-pink-400">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.23 12.27c.25 1.22.25 2.48 0 3.7-1.03 5.12-5.27 8.7-10.23 8.7S2.87 21.09 1.84 15.97c-.25-1.22-.25-2.48 0-3.7 1.03-5.12 5.27-8.7 10.23-8.7s9.2 3.58 10.23 8.7zM12 4.4c-4.07 0-7.4 3.34-7.4 7.4s3.33 7.4 7.4 7.4 7.4-3.33 7.4-7.4-3.33-7.4-7.4-7.4zm0 12.4a5 5 0 1 1 0-10 5 5 0 0 1 0 10z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 border-t border-gray-700 pt-4 text-center text-white">
                <p>&copy; 2024 Library Management System. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>