<!DOCTYPE html>
<html>
<head>
    <title>Form Order Baru</title>
</head>
<body>
    <h2>Form Order Baru</h2>
    <form action="insert_order.php" method="post">
        <label for="orderNumber">Nomor Order:</label>
        <input type="number" name="orderNumber" required><br><br>

        <label for="orderDate">Tanggal Order:</label>
        <input type="date" name="orderDate" required><br><br>

        <label for="requiredDate">Tanggal Dibutuhkan:</label>
        <input type="date" name="requiredDate" required><br><br>

        <label for="shippedDate">Tanggal Pengiriman:</label>
        <input type="date" name="shippedDate"><br><br>

        <label for="status">Status:</label>
        <input type="text" name="status" required><br><br>

        <label for="comments">Komentar:</label>
        <textarea name="text" rows="4" cols="50"></textarea><br><br>

        <label for="customerNumber">Nomor Pelanggan:</label>
        <input type="number" name="customerNumber" required><br><br>

        <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
    </form>
</body>
</html>
