<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Transaksi</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 4px; text-align: left; }
    </style>
</head>
<body>
    <h2>Laporan Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Produk</th>
                <th>Total</th>
                <th>Dibayar</th>
                <th>Kembalian</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $tx)
                <tr>
                    <td>{{ $tx->name }}</td>
                    <td>{{ $tx->paid_at->format('d-m-Y H:i') }}</td>
                    <td>
                        <ul>
                            @foreach($tx->products as $p)
                                <li>
                                    {{ $p['name'] ?? 'Produk tidak diketahui' }} 
                                    x{{ $p['quantity'] ?? '?' }} 
                                    ({{ $p['price'] ?? '?' }})
                                </li>
                            @endforeach
                        </ul>
                    </td>                    
                    <td>{{ $tx->total_price }}</td>
                    <td>{{ $tx->amount_paid }}</td>
                    <td>{{ $tx->change }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
