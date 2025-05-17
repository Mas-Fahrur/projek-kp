@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2 class="mb-4">Keranjang Belanja</h2>

    @php
        // Data dummy produk
        $cart = [
            ['id' => 1, 'nama' => 'Kaos Polos Hitam', 'harga' => 75000, 'qty' => 2],
            ['id' => 2, 'nama' => 'Hoodie Oversize', 'harga' => 150000, 'qty' => 1],
        ];
    @endphp

    @if(count($cart) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $item)
                    @php $subtotal = $item['harga'] * $item['qty']; $total += $subtotal; @endphp
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
                        <td>
                            <input type="number" value="{{ $item['qty'] }}" min="1" class="form-control w-50">
                        </td>
                        <td>Rp{{ number_format($subtotal, 0, ',', '.') }}</td>
                        <td>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3" class="text-end"><strong>Total</strong></td>
                    <td colspan="2"><strong>Rp{{ number_format($total, 0, ',', '.') }}</strong></td>
                </tr>
            </tbody>
        </table>

        <a href="#" class="btn btn-success">Lanjut ke Checkout</a>
    @else
        <div class="alert alert-info">Keranjang kosong.</div>
    @endif
</div>
@endsection
