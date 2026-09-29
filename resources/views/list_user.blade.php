@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Pengguna</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah Pengguna</a>
</div>

{{-- Memanggil komponen tabel dinamis dan mengirimkan variabel $users --}}
<x-user-table :users="$users" />
@endsection