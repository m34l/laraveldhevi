@extends('layouts.master')
@section('content')
<!-- Profile Image -->

          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{url('images/'.$guru->photo)}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$guru->nama}}</h3>

              <p class="text-muted text-center">{{$guru->jabatan}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>NIP</b> <a class="pull-right">{{$guru->nip}}</a>
                </li>
                <li class="list-group-item">
                  <b>Pendidikan</b> <a class="pull-right">{{$guru->pendidikan}}</a>
                </li>
                <li class="list-group-item">
                  <b>Tempat Lahir</b> <a class="pull-right">{{$guru->tempat_lahir}}</a>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Lahir</b> <a class="pull-right">{{$guru->tanggal_lahir}}</a>
                </li>
                <li class="list-group-item">
                  <b>No Telp</b> <a class="pull-right">{{$guru->telp}}</a>
                </li>
                <li class="list-group-item">
                  <b>Alamat</b> <a class="pull-right">{{$guru->alamat}}</a>
                </li>
                <li class="list-group-item">
                  <b>Skill</b> <a class="pull-right">Bisa segalanya</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>

@endsection
@push('scripts')
<script>
$(function() {
    $('#guru-table').DataTable();
});
</script>
@endpush