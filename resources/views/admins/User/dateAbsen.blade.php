@extends('Layouts.Admin.index')

@section('title', 'Rombel')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
         
              <div class="card-body">
                            <div class="form-group">
                                <label for="label">Tanggal Awal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="label">Tanggal Akhir</label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                            </div>
                            <div class="form-group">
                                <a href="" onclick="this.href='/filter-absen/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
                                    Lihat <i class="fas fa-print"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th> No</th>
                                                <th> Nis</th>
                                                <th> Tanggal</th>
                                                <th> Jam Datang</th>
                                                <th> Jam Keluar</th>
                                                <th> Keterangan</th>
                                                <th> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($presensi as $absen)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $absen->user_nis }}</td>
                                                <td>{{ $absen->tgl }}</td>
                                                <td>{{ $absen->jamdatang }}</td>
                                                <td>{{ $absen->jamkeluar }}</td>
                                                @if ($absen->keterangan == '')
                                                    <td>Tidak Keterangan</td>
                                                @else 
                                                    <td>{{ $absen->keterangan }}</td>    
                                                @endif
                                                <td> 
                                                    <a href="" class="btn btn-danger btn-circle mr-5">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="" class="btn btn-info btn-cicle">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                
                                </div>
                            </div>    
        </div>
        <!-- /.container-fluid -->
@endsection

