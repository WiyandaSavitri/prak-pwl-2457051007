@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="h2 mb-0">Daftar Pengguna</h1>
        <small class="text-muted">Data mahasiswa yang sudah terdaftar</small>
    </div>
    <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah User</a>
</div>

<x-user-table :users="$users" />
@endsection