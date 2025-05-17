@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3 class="mb-4">Profil Saya</h3>

    @php
        // Data dummy
        $user = [
            'name' => 'Joko Santoso',
            'email' => 'joko@example.com',
            'no_hp' => '081234567890',
        ];
    @endphp

    <form>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" value="{{ $user['name'] }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email (tidak bisa diubah)</label>
            <input type="email" class="form-control" id="email" value="{{ $user['email'] }}" disabled>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="no_hp" value="{{ $user['no_hp'] }}">
        </div>

        <button type="submit" class="btn btn-primary" disabled>Simpan Perubahan</button>
    </form>
</div>
@endsection
