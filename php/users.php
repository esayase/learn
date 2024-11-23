<?php
include("../another/connect_local.php");
// include("../another/connect_online.php");
session_start();

if(!isset($_SESSION["is_admin"]) || $_SESSION["is_admin"]!==true){
    header("location:../index.php");
}          


// Check if the connection was successful
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Write the SQL query to fetch users
$sql = "SELECT id, username, email, date FROM everyone";

// Execute the query and get the result
$result = mysqli_query($connection,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - User List</title>
    <link rel="stylesheet" href="../styles/header.css">
    <style>
        /* Basic styling for the table */
        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }








    
* {
    box-sizing:border-box;
    margin:0;
    padding:0;
    text-decoration: none;
}


nav{
    position:relative;
    display:flex;
    justify-content: center;
    gap:1rem;
    padding:1rem;
}

a{
    color:black;
}

a:hover{
    color:blue;
}



nav div:hover {
    color:rgb(16, 179, 117);
    cursor:pointer;
}
    

    </style>
</head>
<body>
<header>
        <nav>
            <a href="../index.php">Home</a>
            <a href="../about.php">About us</a>
            <a href="../contact.php">Contact us</a>
            <a href="#">Courses</a>
            <a href="users.php">users</a>
        </nav>

    </header>

    <h2 style="text-align: center;">User List</h2>

    <!-- Step 3: Check if there are users to display -->
    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Registration Date</th>
            </tr>
            <!-- Step 4: Loop through each row and display it -->
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p style="text-align: center;">No users found.</p>
    <?php endif; ?>

    <?php
    // Close the database connection
    mysqli_close($connection);
    ?>

</body>
</html>
