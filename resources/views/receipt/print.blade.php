<!-- resources/views/receipt/print.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Transaksi</title>
</head>
<body>
    <h1>Struk Transaksi</h1>
    <p>ID Transaksi: {{ $transaction->id }}</p>
    <p>Nama Pembeli: {{ $transaction->name }}</p>
    <p>Alamat: {{ $transaction->address ?? 'Tidak ada alamat' }}</p>
    <p>Total Harga: {{ 'Rp' . number_format($transaction->total_price, 0, ',', '.') }}</p>
    <p>Barang yang Dibeli:</p>
    <ul>
        @foreach(json_decode($transaction->products) as $product)
            <li>
                {{ $product->name }} x{{ $product->quantity }} 
                @ {{ 'Rp' . number_format($product->price, 0, ',', '.') }} 
                = {{ 'Rp' . number_format($product->price * $product->quantity, 0, ',', '.') }}
            </li>
        @endforeach
    </ul>
    <p>Total Pembayaran: {{ 'Rp' . number_format($transaction->amount_paid, 0, ',', '.') }}</p>
    <p>Perubahan: {{ 'Rp' . number_format($transaction->change, 0, ',', '.') }}</p>
</body>
</html>
