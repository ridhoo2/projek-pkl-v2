@extends('layouts.app')

@section('title', 'History')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap4.min.css" />
<link rel="shortcut icon" href="img/pnj.ico" type="image/x-icon">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>History</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="bd-highlight d-flex">
                        <div class="p-2 flex-grow-1 bd-highlight text-right">
                        <a href="{{route('tambahpeminjam')}}" type="button" class="btn btn-primary mt-2 mb-4">Tambah+</a>
                        <a href="/PdfPeminjam" type="button" class="btn btn-danger mt-2 mb-4">PDF</a>
                        <a href="/excel1" class="btn btn-success mt-2 mb-4" target="_blank">EXPORT EXCEL</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-striped table" id="table-1">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">ID</th>
                                        <th scope="col" class="text-center">Foto</th>
                                        <th scope="col" class="text-center">NIM</th>
                                        <th scope="col" class="text-center">Nama</th>
                                        <th scope="col" class="text-center">Nama Barang</th>
                                        <th scope="col" class="text-center">keterangan</th>
                                        <th scope="col" class="text-center">Jumlah</th>
                                        <th scope="col" class="text-center">Kepemilikan</th>
                                        <th scope="col" class="text-center">Tgl.Dipinjam</th>
                                        <th scope="col" class="text-center">Tgl.Pengembalian</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    <tr>
                                        @foreach ($data as $no => $row)
                                        <input type="hidden" value="{{ $row->image }}" class="key{{ $no }}">
                                        <input type="hidden" value="{{ $row->nim }}" class="key{{ $no }}">
                                        <input type="hidden" value="{{ $row->nama }}" class="key{{ $no }}">
                                        <input type="hidden" value="{{ $row->nama_barang }}" class="key{{ $no }}">
                                        <input type="hidden" value="{{ $row->jumlah }}" class="key{{ $no }}">
                                        <input type="hidden" value="{{ $row->kepemilikan }}" class="key{{ $no }}">
                                        <td class="text-center">{{$no + 1}}</td>
                                        <td class="text-center"><img src="{{ $row->image }}" style="width: 60px;"></td>
                                        <td class="text-center">{{$row->nim}}</td>
                                        <td class="text-center">{{$row->nama}}</td>
                                        <td class="text-center">{{$row->nama_barang}}</td>
                                        <td class="text-center">{{$row->keterangan}}</td>
                                        <td class="text-center">{{$row->jumlah}}</td>
                                        <td class="text-center">{{$row->kepemilikan}}</td>
                                        <td class="text-center">{{$row ->created_at->format('Y-m-d')}}</td>
                                        <td class="text-center">{{$row ->expired_at->format('Y-m-d')}}</td>
                                        <td class="text-center">
                                            <div class="container d-flex" style="margin: 0;padding: 0;">
                                                <form action="{{route('deletepeminjaman',$row->id)}}"
                                                    id="delete{{$row->id}}" method="POST" class="d-block">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="#" data-id={{$row->id}}
                                                        class="btn btn-icon btn-danger m-1 btn-lg delete swal-confrim">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </form>
                                                <a href="{{route('tampilanpeminjam',$row->id)}}"
                                                    class="btn btn-primary m-1 btn-lg">
                                                    <i class="fas fa-pencil-alt "></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('sweetalert::alert')
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/select.bootstrap4.js"></script>
<script src="{{ asset('js/after.js') }}"></script>
<script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush