<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Checkout</title>
    <link rel="stylesheet" href="css/co.css">
</head>
<body>
    <div class="checkout-container">
        <h2>Checkout</h2>
        <form>
            <!-- Alamat Pengiriman -->
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat Pengiriman</label>
                <input type="text" id="address" placeholder="Masukkan alamat lengkap" required>
            </div>
            <div class="form-group">
                <label for="city">Kota</label>
                <input type="text" id="city" placeholder="Masukkan kota" required>
            </div>
            <div class="form-group">
                <label for="postcode">Kode Pos</label>
                <input type="text" id="postcode" placeholder="Masukkan kode pos" required>
            </div>
            
            <!-- Metode Pembayaran -->
            <div class="payment-method">
                <label for="payment-method">Metode Pembayaran</label>
                <select id="payment-method">
                    <option value="credit-card">Kartu Kredit/Debit</option>
                    <option value="cod">COD</option>

                    
                </select>
            </div>
            
            <!-- Total Harga -->
            <div class="total">
                <span>Total:</span>
                <span>Rp 40.000</span>
            </div>
            
            <!-- Tombol Checkout -->
            <button class="btn"> <a href="/sukses" > Bayar Sekarang </a>  </button>
        </form>
    </div>
</body>
</html>
