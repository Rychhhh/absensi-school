@extends('Layouts.Admin.index')

@section('title', 'Rombel')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Admin</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nis</th>
                                    <th>Name</th>
                                    <th>Rombel</th>
                                    <th>Rayon</th>
                                    <th>Role</th>
                                    <th>Tanggal Buat</th>
                                    <th>Masuk</th>
                                    <th>Keluar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userData as $user)
                                    
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nis }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->rombel }}</td>
                                    <td>{{ $user->rayon }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->created_at }}</td>

                                        @foreach ($presensi as $item)
                                            <td>{{ $item->jamdatang }}</td>
                                            <td>{{ $item->jamkeluar }}</td>
                                        @endforeach
                                    

                                   
                                    <td class="d-flex flex-row">
                                        <a href="{{ url('dataUser/'.$user->id. '/edit') }}" class="btn btn-info btn-cicle mr-3">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        {{-- Delete --}}
                                        <form action="{{ url('dataUser/'.$user->id) }}" method="POST" onclick="return confirm('info','Apa anda yakin ingin menghapus')">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                          </form>
                                    </td>
                                </tr>
                                
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
        </div>
        <!-- /.container-fluid -->
@endsection