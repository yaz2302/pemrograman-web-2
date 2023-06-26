@extends('admin.layout.app')
@section('content')
@if (Auth::user()->role != 'pelanggan')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4 table-responsive">
        <div class="card-header">
            @if (Auth::user()->role == 'admin')       
            <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Produk</a>
            @endif
            
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>tanggal</th>
                        <th>Nama Pesanan</th>
                        <th>Alamat</th>
                        <th>No hp</th>
                        <th>Email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripi</th>
                        <th>Id Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @php
                       $no = 1;
                   @endphp
                   @foreach ($pesanan as $pesan)
                   <tr>
                    <td>{{$id}}</td>
                    <td>{{$pesan->tanggal }}</td>
                    <td>{{$pesan->nama_pesanan }}</td>
                    <td>{{$pesan->alamat_pemesanan }}</td>
                    <td>{{$pesan->no_hp}}</td>
                    <td>{{$pesan->email}}</td>
                    <td>{{$pesan->jumlah_pesanan}}</td>
                    <td>{{$pesan->deskripsi}}</td>
                    <td>{{$pesan->produk_id}}</td>
                    <td><a href="{{ url('admin/pesanan/edit/'. $pesan->id) }}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{ url('admin/pesanan/delete/'. $pesan->id) }}" class="btn btn-danger">Delete</a></td>
                   </tr>
                   @php
                      $no++
                   @endphp
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@else    
@include('admin.access_denied')
@endif
@endsection