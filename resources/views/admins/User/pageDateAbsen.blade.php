@extends('Layouts.Admin.index')

@section('title', 'Rombel')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card card-info card-outline">
                <div class="card-header">Lihat Data</div>
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
                        <a  onclick="this.href='/filter-absen/'+ document.getElementById('tglawal').value +
                    '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
                            Lihat <i class="fas fa-print"></i>
                        </a>
                    </div>
                </div><!-- /.container-fluid -->
    
        </div>
        <!-- /.container-fluid -->
@endsection

