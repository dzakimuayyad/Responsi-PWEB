<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerName = $_POST['customer_name'];
    $cameraID = $_POST['camera_id'];
    $rentalDays = $_POST['rental-days'];
    // Simpan pesanan ke file txt
    $file = 'orders.txt';
    $data = "$customerName | $cameraID | $rentalDays hari" . PHP_EOL;
    file_put_contents($file, $data, FILE_APPEND);
    // Redirect kembali ke halaman utama setelah berhasil
    header("Location: index.html");
    exit;
}
?>