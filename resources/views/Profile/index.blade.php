

@extends('Layouts.User.index')

@section('title', 'Seleksi')
    
@section('content')
     <!-- partial -->
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          
          {{-- Profile --}}
            <div class="col-lg-8 d-flex flex-column">
              <div class="row flex-grow">
                <div class="col-6 col-lg-4 col-lg-12 grid-margin stretch-card" style="height: 200px;">
                  <div class="card card-rounded">
                    <div class="card-body" >
                      <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                          <h4 class="card-title card-title-dash">Your Data Profile</h4>
                        </div>
                        <div>
                          <button class="btn btn-success text-white mb-0 me-0" type="button"  data-toggle="modal" data-target="#editModal"><i class="mdi mdi-account-plus" style="padding: 20px 10px 0px 0px;"></i>Edit Data Profile</button>
                        </div>
                      </div>
                      <div class="table-responsive  mt-1">
                        <table class="table select-table my-auto">
                          <tbody>
                            <tr>
                              <td>
                                Nis : 
                              </td>
                              <td>
                               {{ $user->nis }}
                              </td>
                              <td>
                                <h6>Name :{{ $user->name }}</h6>
                                <p>Role : {{ $user->role }}</p>
                              </td>
                              <td>
                                <h6>Rombel : {{ $user->rombel }}</h6>
                              </td>
                              <td>
                                <h6>Rayon : {{ $user->rayon }}</h6>
                              </td>
                            </tr> 
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex flex-column">
              <div class="row flex-grow">
                <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                  <div class="card bg-primary card-rounded">
                    <div class="card-body pb-0">
                      <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                      <div class="row">
                        <div class="col-sm-4">
                          <img
                          style="cursor: pointer;"
                          src="{{ asset('/storage/profile_img/'. Auth::user()->image) }}"
                          class="rounded-circle my-4 mx-4" width="250" height="200" id="avaImage">
                        </div>
                        <div class="col-sm-8">
                          <div class="status-summary-chart-wrapper pb-4">
                            <canvas id="status-summary"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                  <div class="card card-rounded">
                    <div class="card-body">
                      <div class="card-title">Edit</div>
                      <div class="row">
                     
                      <form action="{{ route('change-ava') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-sm-6 mx-auto">
                          <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                            <label for="file-upload" class="custom-file-upload">
                              <i class="mdi mdi-cloud-upload"></i> Custom Upload
                            </label>
                            <input id="file-upload" type="file" name="image" />
                          </div>
                        </div>
                        <div class="col-sm-6 mx-auto">
                          <button type="submit" style="margin-left: 45px;"" class="btn btn-info mt-2"><i class="mdi mdi-briefcase-upload"></i></button>
                        </div>

                        </form>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          {{--End Profile --}}
   
    <!-- Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data <span style="color: rgb(114, 114, 247);"> {{ Auth::user()->name }} </span> </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


            <form action="{{ route('change-profile') }}" method="POST" enctype="multipart/form-data">
              @csrf

              @method("PUT")

          <div class="form-group">
                <label for="nis" class="col-form-label">Nis :</label>
                <input type="text" class="form-control" name="nis">
            </div>
            <div class="form-group">
                <label for="name" class="col-form-label">Name :</label>
                <input type="text" class="form-control" name="name">
            </div>


            @php
                use App\Models\Rombel;
                use App\Models\Rayon;

                $dataRayon = Rayon::all();
                $dataRombel = Rombel::all();
            @endphp

            <div class="form-group">
                <label for="rombel" class="col-form-label">Rombel :</label>
                <select class="form-control" name="rombel">
                    @foreach ($dataRombel as $item)
                      <option>{{ $item->nama_rombel }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="rayon" class="col-form-label">Rayon :</label>
              <select class="form-control" name="rayon">
                  @foreach ($dataRayon as $rayon)
                    <option value="{{ ucfirst($rayon->nama_rayon) }}">{{ ucfirst($rayon->nama_rayon) }}</option>
                  @endforeach
              </select>
            </div>

            
            
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        </div>
      </div>
    </div>

@endsection

@section('script')

    <script>
      // filepond

        // Get a reference to the file input element
        const inputElement = document.querySelector('input[id="image"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);

                
    </script>
     
@endsection

