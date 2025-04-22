<?php
session_start();
if (!isset($_SESSION['user'])) {
 header("Location: index.php");
 exit;
}
?>
<h1>Selamat Datang <?php echo $_SESSION['user']; ?>!</h1>
<a href="logout.php" class="logout-btn">Logout</a>

<style>
        /* Reset body margin and padding */
        body {
            font-family: Arial, sans-serif;
            background-image:url(gunung.jpg);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            flex-direction: column;
        }

        /* Style for the heading */
        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Style for the form */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        /* Style for text and password input fields */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Style for the submit button */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:rgb(0, 4, 247);
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Hover effect for the submit button */
        input[type="submit"]:hover {
            background-color:rgb(0, 16, 247);
        }

        /* Responsive design for smaller screens */
        @media (max-width: 600px) {
            form {
                width: 80%;
            }
        }
    </style>
