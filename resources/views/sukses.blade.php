<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Sukses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .success-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
            text-align: center;
        }

        .success-container h2 {
            color: #28a745;
        }

        .success-container p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .order-details {
            text-align: left;
            margin-bottom: 20px;
        }

        .order-details p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #218838;
        }

        .btn-secondary {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .btn-secondary:hover {
            background-color: #0056b3;
        }

        .success-icon {
            font-size: 50px;
            color: #28a745;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">✔️</div>
        <h2>Checkout Sukses!</h2>
        <p>Terima kasih, pesanan Anda telah berhasil diproses. Kami akan segera mengirimkan produk anda</p>

        <div class="order-details">
            <p><strong>Nomor Pesanan:</strong> #1</p>
            <p><strong>Harga:</strong> Rp. 50.000</p>
            <p><strong>ongkir:</strong> Rp.0</p>
            <p><strong>Diskon:</strong> 10.000</p>
            <p><strong>Total Pembayaran:</strong> Rp 40.000</p>
        </div>

        <button class="btn" href="/">Kembali ke Beranda</button>
        <!-- <button class="btn-secondary">Lanjutkan Belanja</button> -->
    </div>
</body>
</html>
