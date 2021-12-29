@php
    use App\Models\Rombel;
    use App\Models\Rayon;

    $dataRayon = Rayon::all();
    $dataRombel = Rombel::all();
@endphp

@extends('Layouts.Admin.index')

@section('title', 'Rombel')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="col-md-6 mx-auto text-center">
            <form action="{{ url('dataUser/'. $updatePengguna->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">

                <div class="form-group">
                  <label>Nis</label>
                  <input type="text" class="form-control" name="nis" value="{{ $updatePengguna->nis }}">
                </div>

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{ ucfirst($updatePengguna->name) }}">
                </div>

                <div class="form-group">
                    <label>Rombel</label>
                    <select class="form-control" name="rombel">
                        @foreach ($dataRombel as $item)
                          <option>{{ $item->nama_rombel }}</option>
                        @endforeach
                    </select>
                  </div>

                <div class="form-group">
                    <label>Rombel</label>
                    <select class="form-control" name="rayon">
                        @foreach ($dataRayon as $rayon)
                          <option value="{{ ucfirst($rayon->nama_rayon) }}">{{ ucfirst($rayon->nama_rayon) }}</option>
                        @endforeach
                    </select>
                  </div>

                <div class="form-group">
                  <label>Role</label>
                  @php
                      $roles = [
                        'admin', 'student'
                      ];
                  @endphp
                  <select name="role" class="form-control">
                    @foreach ($roles as $role)  
                      <option value="{{ ucfirst($role) }}"
                       @if ($role === $updatePengguna->role)
                          selecteds
                      @endif
                      >{{ $role }}</option>
                      
                    @endforeach
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>

              </form>
            </div>

        </div>
        <!-- /.container-fluid -->
@endsection