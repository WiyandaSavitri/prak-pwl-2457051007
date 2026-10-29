@extends('layouts.app')

@section('content')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        ✅ {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        ❌ {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="h2 mb-0">Daftar Pengguna</h1>
        <small class="text-muted">Data mahasiswa yang sudah terdaftar</small>
    </div>
    <a href="{{ route('user.create') }}" class="btn-brand text-decoration-none"><i class="bi bi-plus-lg"></i> Tambah User</a>
</div>

<x-user-table :users="$users" />
@endsection