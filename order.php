<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Nomor Kamera</h1>
        <ul><b>
            <li>1.Canon EOS 5D Mark IV</li>
            <li>2.Nikon D850</li>
            <li>3.Sony Alpha A7 III</li>
            <li>4.Fujifilm XA10</li>
            <li>5.Samsung Nx3000</li>
        <b></ul>
        <h2>Data Pesanan</h2>
        <ul>
            <?php
            $file = 'orders.txt';
            $orders = file($file, FILE_IGNORE_NEW_LINES);
            foreach ($orders as $order) {
                //memisahkan data dengan '|'
                $data = explode('|', $order);
                if (count($data) == 3){
                    $customerName = trim($data[0]);
                    $cameraID = trim($data[1]);
                    $rentalDays = trim($data[2]);

                    //menampilkan data
                    echo "<li><strong>Nama Pemesan:</strong> $customerName <br>";
                    echo "<strong>Nomor Kamera:</strong> $cameraID <br>";
                    echo "<strong>Lama Penyewaan:</strong> $rentalDays </li>";
                }else{
                    //format tidak sesuai, beri peringata atau lewati
                    echo "<li>Data Tidak Valid: $order</li>";
                }
            }
            ?>
        </ul>
    </div>
</body>
</html>