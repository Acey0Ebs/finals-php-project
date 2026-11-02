<!-- Test Logic -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === "admin@gmail.com" && $password === "admin") {
        header("Location: landlord-dashboard.php");
        exit();
    }
    else if ($email === "tenant@gmail.com" && $password === "tenant") {
        header("Location: tenant-dashboard.php");
        exit();
    }
    
    else {
        echo "Invalid email or password.";
    }
}
?>