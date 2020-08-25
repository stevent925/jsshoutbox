<?php
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "earwax925", "shoutbox");


if (mysqli_connect_errno()) {
    echo 'Failed to connect: ' . mysqli_connect_errno();
}


?>