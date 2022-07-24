@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="{{ asset('foto/'.$data->foto) }}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ $data->name }}</h3>

              <p class="text-muted text-center">{{ App\Models\Posisi::find($data->id)->name }}</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>No Identitas</b> <a class="float-right">{{ $data->no_identitas }}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="float-right">{{ $data->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>Jabatan</b> <a class="float-right">{{ $data->jabatan }}</a>
                </li>
                <li class="list-group-item">
                    <b>Nik</b> <a class="float-right">{{ $data->nik }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Npwp</b> <a class="float-right">{{ $data->npwp }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Division</b> <a class="float-right">{{ App\Models\Posisi::find($data->id)->name }}</a>
                  </li>


              </ul>

              {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-phone mr-1"></i>No Hp</strong>

              <p class="text-muted">
                {{ $data->no_hp }}
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

              <p class="text-muted">{{ $data->alamat }}</p>

              <hr>

              <strong><i class="fas fa-user mr-1"></i> Status</strong>

              <p class="text-muted">
                <span class="tag tag-danger">{{ $data->status }}</span>

              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i>No Backup</strong>

              <p class="text-muted">{{ $data->no_backup }}</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">


        <!-- /.col -->
        <div class="card-body">

                <iframe src ="{{ asset('datapdf/'.App\Models\DataUser::find($data->id)->cv) }}" width="100%" height="500px"></iframe>
                <iframe src ="{{ asset('datapdf/'.App\Models\DataUser::find($data->id)->ijazah) }}" width="100%" height="500px"></iframe>
                <iframe src ="{{ asset('datapdf/'.App\Models\DataUser::find($data->id)->sertifikat) }}" width="100%" height="500px"></iframe>
                <iframe src ="{{ asset('datapdf/'.App\Models\DataUser::find($data->id)->ktp) }}" width="100%" height="500px"></iframe>
                <iframe src ="{{ asset('datapdf/'.App\Models\DataUser::find($data->id)->npwp) }}" width="100%" height="500px"></iframe>

            </div>

      </div>


      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection

@extends('layout.endwrap')



