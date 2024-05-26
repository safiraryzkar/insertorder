<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classicmodels";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memperoleh nilai-nilai dari form
$orderNumber = isset($_POST['orderNumber']) ? $_POST['orderNumber'] : '';
$orderDate = isset($_POST['orderDate']) ? $_POST['orderDate'] : '';
$requiredDate = isset($_POST['requiredDate']) ? $_POST['requiredDate'] : '';
$shippedDate = isset($_POST['shippedDate']) ? $_POST['shippedDate'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$comments = isset($_POST['comments']) ? $_POST['comments'] : '';
$customerNumber = isset($_POST['customerNumber']) ? $_POST['customerNumber'] : '';

$check_customer_query = "SELECT * FROM customers WHERE customerNumber = '$customerNumber'";
$check_customer_result = $conn->query($check_customer_query);

if ($check_customer_result->num_rows > 0) {
    // CustomerNumber valid, lakukan operasi INSERT
    $sql = "INSERT INTO orders (orderNumber, orderDate, requiredDate, shippedDate, status, comments, customerNumber)
        VALUES ('$orderNumber', '$orderDate', '$requiredDate', '$shippedDate', '$status', '$comments', '$customerNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Order baru berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Nomor pelanggan tidak valid.";
}

$conn->close();
?>