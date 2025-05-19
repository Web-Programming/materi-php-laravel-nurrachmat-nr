@extends('layout.master')

@section('title', "Halaman List fakultas")

@section('content')
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Fakultas</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Fakultas</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Fakultas</h3>
                    <div class="card-tools">
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-collapse"
                        title="Collapse"
                      >
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-remove"
                        title="Remove"
                      >
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- Menampilkaan pesan insert sukses -->
                    @if (session("status"))
                      <div class="alert alert-success">
                        {{ session("status")}}
                      </div>
                    @endif  

                    @if (session("failed"))
                      <div class="alert alert-danger">
                        {{ session("failed")}}
                      </div>
                    @endif  

                    <a href="{{url("/fakultas/create" )}}" class="btn btn-small btn-success">
                        Buat fakultas Baru
                    </a>
                   <table class="table table-bordered mt-2">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Aksi</th>
                    </tr>
                    @foreach ($listfakultas as $fakultas) 
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$fakultas->nama}}</td>
                        <td>
                          <form action="{{ url("/fakultas/".$fakultas->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <a href="{{url("/fakultas/".$fakultas->id )}}" class="btn btn-small btn-default">
                              Detail
                            </a> 

                            <a href="{{url("/fakultas/".$fakultas->id."/edit" )}}" class="btn btn-small btn-warning">
                              Edit
                            </a> 
                            <button type="submit" class="btn btn-small btn-danger">Delete</button>
                          </form>  
                        </td>
                      </tr>
                    @endforeach
                   </table>

                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">Footer</div>
                  <!-- /.card-footer-->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
@endsection

