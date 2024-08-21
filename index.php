<?php 

include('_header.php');

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- bootrsap 5 icon  link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- link for carasoul -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <title>Library Management System</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="index.css">
   
 <style>
      .text-container {
            display: inline-block;
            min-height: 1.5em; /* Ensures space for the text to avoid shifting */
            white-space: nowrap; /* Prevents text wrapping */
        }
        .typing {
            font-family: monospace;
        }
        .hidden {
            /* visibility: hidden; */
        }
       
 </style>
</head>

<body class="flex flex-col min-h-screen ">

    <?php
    
   
    ?>


    <!-- home Section -->
    <div class="relative h-screen bg-black">
        <img src="d-image/WhatsApp Image 2024-07-31 at 10.04.56 AM.jpeg" data-aos="flip-up"  alt="Library Image"
            class="w-full h-full object-cover opacity-30" />
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4 md:px-8">
            <h1 id="animatedText"  class="text-container text-3xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 lg:mb-6" data-aos="flip-down">
               
            </h1>
            <p class="text-base md:text-lg lg:text-xl mb-4 md:mb-6 lg:mb-8" data-aos="fade-down-left">
                Explore a world of knowledge and discovery.
            </p>
            <a href="all_books.php"
                class="inline-block bg-lime-300 text-white py-2 px-6 rounded-lg text-lg md:text-xl font-semibold hover:bg-lime-400 transition-colors duration-300"
                data-aos="fade-down">
                Explore Now
            </a>
        </div>
    </div>




    <!-- Conatct -->
    <div class="container lg:mx-auto">
        <div class="row text-black mt-12 mb-12 p-4 text-center">
            <h2 class="text-3xl font-bold text-center mb-8" data-aos="fade-down-right">What is Library?</h2>
            <p class="text-lg text-green-600 w-full lg:text-center mt-3 text-justify px-16" data-aos="fade-up-right">A
                library is a collection of
                resources and services designed to meet the information needs of its users. Traditionally, libraries
                have been physical spaces containing books, journals, and other printed materials. </p>
            <img src="d-image/m-1.jfif" alt="Libray"
                class="mt-3 rounded-lg zoom-in hover:scale-105 transition-transform hover:border-green-400 hover:opacity-90 hover:shadow-lg shadow-green-300 mx-auto lg:w-96">
            <button data-aos="fade-down-right"
                class="group text-white mt-4 p-4 w-fit bg-green-600 rounded-lg  hover:opacity-90 transition-all flex items-center mx-auto">
                <a href="contact.php" class="relative z-10">Contact Us</a>
                <i
                    class="bi bi-telephone-forward text-white ml-2 transition-transform transform group-hover:rotate-90"></i>
            </button>
        </div>
    </div>
    <!-- Feature images -->
    <div class="relative overflow-hidden mx-auto my-20" data-aos="fade-down">
        <h2 class="text-3xl font-bold text-center mb-8">Featured Images</h2>
        <div class="slider-wrapper flex py-6">
            <div class="slider-item p-2">
                <img src="d-image/img9.jpg" alt="Image 1"
                    class="w-full h-auto rounded-lg shadow-lg hover:scale-105 transition-all ease-in hover:rounded-3xl">
            </div>
            <div class="slider-item p-2">
                <img src="d-image/img1.jpg" alt="Image 2"
                    class="w-full h-auto rounded-lg shadow-lg hover:scale-105 transition-all ease-in hover:rounded-3xl">
            </div>
            <div class="slider-item p-2">
                <img src="d-image/img3.jpg" alt="Image 3"
                    class="w-full h-auto rounded-lg shadow-lg hover:scale-105 transition-all ease-in hover:rounded-3xl">
            </div>
            <div class="slider-item p-2">
                <img src="d-image/img7.jpg" alt="Image 4"
                    class="w-full h-auto rounded-lg shadow-lg hover:scale-105 transition-all ease-in hover:rounded-3xl">
            </div>
            <div class="slider-item p-2">
                <img src="d-image/img9.jpg" alt="Image 5"
                    class="w-full h-auto rounded-lg shadow-lg hover:scale-105 transition-all ease-in hover:rounded-3xl">
            </div>
            <div class="slider-item p-2">
                <img src="d-image/img1.jpg" alt="Image 1"
                    class="w-full h-auto rounded-lg shadow-lg hover:scale-105 transition-all ease-in hover:rounded-3xl">
            </div>
            <div class="slider-item p-2">
                <img src="d-image/img2.jpg" alt="Image 2"
                    class="w-full h-auto rounded-lg shadow-lg hover:scale-105 transition-all ease-in hover:rounded-3xl">
            </div>
            <div class="slider-item p-2">
                <img src="d-image/img3.jpg" alt="Image 3"
                    class="w-full h-auto rounded-lg shadow-lg hover:scale-105 transition-all ease-in hover:rounded-3xl">
            </div>
            <div class="slider-item p-2">
                <img src="d-image/img7.jpg" alt="Image 4"
                    class="w-full h-auto rounded-lg shadow-lg hover:scale-105 transition-all ease-in hover:rounded-3xl">
            </div>

            <!-- Add more slider items as needed -->
        </div>
        <button
            class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-lg hover:bg-gray-600 transition-colors duration-300"
            id="prevBtn">&#10094;</button>
        <button
            class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-lg hover:bg-gray-600 transition-colors duration-300"
            id="nextBtn">&#10095;</button>
    </div>
    <!-- New Arrivals -->


    <?php
    if (isset($_SESSION['email'])) {
        // Fetch all books
        $select = "SELECT * FROM books LIMIT 4";
        $result = mysqli_query($conn, $select);
        $num_rows = mysqli_num_rows($result);

        if ($num_rows > 0) {
            echo '<div data-aos="flip-down" class="bg-gradient-to-r from-indigo-100 from-10% via-sky-100 via-30% to-gray-400 to-90% py-12">
            <div class="container mx-auto px-4">
                <h2 class="font-bold text-2xl text-neutral-800 w-full text-center mb-6">New Arrivals</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">';

            // Loop through each book
            while ($fetch = mysqli_fetch_assoc($result)) {
                $book_id = $fetch['book_id'];
                $book_name = $fetch['book_name'];
                $image = $fetch['book_image'];
                $book_price = $fetch['book_price'];
                $author_id = $fetch['author_id'];
                $cat_id = $fetch['cat_id'];

                // Fetch author name
                $author_query = "SELECT author_name FROM authors WHERE author_id = '$author_id'";
                $author_result = mysqli_query($conn, $author_query);
                $author_fetch = mysqli_fetch_assoc($author_result);
                $author_name = $author_fetch['author_name'];

                // Fetch category name
                $category_query = "SELECT cat_name FROM category WHERE cat_id = '$cat_id'";
                $category_result = mysqli_query($conn, $category_query);
                $category_fetch = mysqli_fetch_assoc($category_result);
                $cat_name = $category_fetch['cat_name'];

                // Display book information
                echo '<div class="bg-white shadow-lg rounded-lg overflow-hidden zoom-in">
                <img src="book_images/' . $image . '" alt="books" class="w-full h-64 object-cover hover:opacity-90 hover:scale-105 transition-transform">
                <div class="p-4">
                    <h3 class="font-bold text-lg">Book name: ' . $book_name . '</h3>
                    <p class="text-gray-600">Author: ' . $author_name . '</p>
                    <h3 class=" text-gray-600 text-lg">Category: ' . $cat_name . '</h3>
                    <p class="text-gray-600">Price :' . $book_price . ' -/</p>
                    
                </div>
            </div>';
            }

            echo '</div></div></div>';
            echo '<button class="group text-white mx-auto mt-4 p-4 w-fit bg-green-600 rounded-lg hover:opacity-90 transition-all flex items-center lg:mx-auto">
                <a href="all_books.php" class="relative z-10">View More</a>
                <i class="bi bi-arrow-down text-white ml-2 transition-transform transform group-hover:translate-y-2"></i>
            </button>
               
        </div>
    </div>';
        } else {
            echo '<div class="text-gray-600 font-semibold text-center">No books available</div>';
        }
    }
    ?>


<!-- Borrow Books -->

<?php
    if (isset($_SESSION['email'])) {
        // Fetch all books
        $select = "SELECT * FROM request_books LIMIT 4";
        $result = mysqli_query($conn, $select);
        $num_rows = mysqli_num_rows($result);

        if ($num_rows > 0) {
            echo '<div data-aos="flip-down" class="bg-gradient-to-r from-indigo-100 from-10% via-sky-100 via-30% to-gray-400 to-90% py-12">
            <div class="container mx-auto px-4">
                <h2 class="font-bold text-2xl text-neutral-800 w-full text-center mb-6">Borrow Books</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">';

            // Loop through each book
            while ($fetch = mysqli_fetch_assoc($result)) {
               
                $book_name = $fetch['book_name'];
                $image = $fetch['image'];
               
               

              

                // Display book information
                echo '<div class="bg-white shadow-lg rounded-lg overflow-hidden zoom-in">
                <img src="book_images/' . $image . '" alt="books" class="w-full h-64 object-cover hover:opacity-90 hover:scale-105 transition-transform">
                <div class="p-4">
                    <h3 class="text-lg">Book name:<span class="font-bold"> ' . $book_name . '</span></h3>
                   
                    
                </div>
            </div>';
            }

            echo '</div></div></div>';
            echo '<button class="group text-white mx-auto mt-4 p-4 w-fit bg-green-600 rounded-lg hover:opacity-90 transition-all flex items-center lg:mx-auto">
                <a href="view_borrow_books.php" class="relative z-10">View More</a>
                <i class="bi bi-arrow-down text-white ml-2 transition-transform transform group-hover:translate-y-2"></i>
            </button>
               
        </div>
    </div>';
        } else {
            echo '<div class="text-gray-600 font-semibold text-center">No books available</div>';
        }
    }
    ?>



    <!-- Upcoming Events -->

    <div class="bg-white py-12">
        <div class="container mx-auto px-4 ">
            <h2 class="text-3xl font-bold text-center mb-8">Upcoming Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Event Card 1 -->
                <div 
                    class="group bg-gradient-to-t from-green-400 via-purple-400 to-green-400 hover:opacity-50  text-white p-6 rounded-lg shadow-md
                    transform transition-transform duration-300 hover:-translate-y-4">
                    <h3 class="text-xl font-bold mb-2 text-white group-hover:text-black">Author Meet & Greet</h3>
                    <p class="text-white mb-4 group-hover:text-black">August 10, 2024 | 3:00 PM</p>
                    <p class="text-white group-hover:text-black">Join us for an exclusive meet and greet with renowned
                        author Jane Doe. She will discuss her latest book and answer questions from the audience.</p>
                </div>
                <!-- Event Card 2 -->
                <div
                    class="group bg-green-500 p-6 rounded-lg shadow-md bg-gradient-to-l from-green-400 via-purple-400 to-green-400 hover:opacity-50
                      transform transition-transform duration-300 hover:-translate-y-4">
                    <h3 class="text-xl font-bold mb-2 text-white group-hover:text-black">Summer Reading Challenge</h3>
                    <p class=" mb-4 text-white group-hover:text-black">August 15, 2024 | 10:00 AM</p>
                    <p class="text-white group-hover:text-black">Kick off the summer with our annual reading challenge!
                        Participate in fun activities, earn prizes, and discover new books.</p>
                </div>
                <!-- Event Card 3 -->
                <div
                    class="group bg-gray-100 p-6 rounded-lg shadow-md bg-gradient-to-r from-green-400 via-purple-400 to-green-400 hover:opacity-50
                      transform transition-transform duration-300 hover:-translate-y-4">
                    <h3 class="text-xl font-bold mb-2 text-white group-hover:text-black">Poetry Slam Night</h3>
                    <p class=" mb-4 text-white group-hover:text-black">August 22, 2024 | 7:00 PM</p>
                    <p class="text-white group-hover:text-black">Come and enjoy an evening of spoken word poetry. Local
                        poets will share their original works, and audience members are invited to participate.</p>
                </div>

            </div>

        </div>
    </div>



    <!-- PHP FOR REVIEW FORM -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isset($_SESSION['email'])) {
            // User is not logged in
            echo "<script>alert('You need to log in first'); window.location.href = '_login.php';</script>";
            exit(); // Stop further execution
        } else {
            // User is logged in, process the form
            $email = $_SESSION['email'];
            $select_review = "SELECT * FROM users WHERE email = '$email'";
            $result_view = mysqli_query($conn, $select_review);
            $fetch = mysqli_fetch_assoc($result_view);
            $id = $fetch['id'];
            $name = $fetch['name'];
            $image = $fetch['image'];


            if (isset($_POST['review'])) {
                $title = $_POST['title'];
                $desc = $_POST['description'];

                // Insert the review into the database
                $insert_query = "INSERT INTO review (title, description,users_id,users_name,users_image, time) VALUES ('$title', '$desc','$id','$name','$image',NOW())";
                $result_query = mysqli_query($conn, $insert_query);

                if ($result_query) {
                    echo "<script>alert('Your Review has been added');</script>";
                } else {
                    echo "<script>alert('Failed to added review');</script>";
                }


            }
        }
    }

    ?>
    <!-- Review Section form -->
    <div class="bg-white p-6 rounded-lg mx-auto shadow-xl w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4 text-gray-700">Elaborate your concern</h2>
        <form method="post" action="">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" id="title" name="title"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required></textarea>
            </div>
            <div class="text-right">
                <input type="submit" name="review" value="Add"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            </div>
        </form>
    </div>
    <!-- Review SECtiom -->




    <!-- List Review Dynamically from database -->
    <?php
    // Fetch reviews from the database
    $sql = "SELECT * FROM review LIMIT 3"; // Corrected query to fetch all reviews
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        echo '<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-4">';
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['users_name'];
            $title = $row['title'];
            $desc = $row['description'];
            $image = $row['users_image'];
            echo '<div class="bg-white shadow-lg rounded-lg overflow-hidden p-4 flex flex-col">
        <div class="flex items-center mb-4">
            <img src="user_images/' . $image . '" class="w-12 h-12 rounded-full border-2 border-gray-300 mr-4" alt="User">
            <div>
                <h5 class="text-xl font-semibold text-gray-800">' . $name . '</h5>
            </div>
        </div>
        <h6 class="text-lg font-bold text-gray-700 mb-2">' . $title . '</h6>
        <p class="text-gray-600 flex-1">' . $desc . '</p> <!-- flex-1 to ensure card size remains consistent -->
    </div>
    ';
        }

        echo ' </div>';
        echo ' <button
                class="group text-white mx-auto  my-4 p-4 w-fit bg-green-600 rounded-lg  hover:opacity-90 transition-all flex items-center lg:mx-auto">
                <a href="reviews.php" class="relative z-10">View More</a>
                <i
                    class="bi bi-arrow-down text-white ml-2 transition-transform transform group-hover:translate-y-2"></i>
            </button>';// Close the grid container
    } else {
        // Handle query error
        echo "<p class='text-center my-4'>No reviews found</p>";
    }


    ?>





    <?php
    include ('_footer.php');
    ?>

  


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
<script src="script.js"></script>


    </script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>