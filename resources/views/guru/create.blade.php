@extends('layouts.master')
@section('title','Tambah Data Guru');
@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/guru/insert", method="POST" enctype="multipart/form-data">
                @csrf
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{old('nama')}}">
                </div>
                <div class='text-danger'>
                @error('nama')
                {{message}}
                @enderror
                </div>
                <div class="form-group">
                    <div class="input-group">
                  <label for="exampleInputPassword1">NIP</label>
                  <input type="text" class="form-control" name="nip" placeholder="NIP" value="{{old('nip')}}">
                </div>
                </div>
                <div class='text-danger'>
                 @error('nip')
                {{message}}
                @enderror
                </div>
                <div class="form-group">
                     <div class="input-group">
                  <label for="exampleInputPassword1">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="{{old('jabatan')}}">
                </div>
                </div>
                <div class='text-danger'>
                 @error('jabatan')
                {{message}}
                @enderror
                </div>
                <div class="form-group">
                     <div class="input-group">
                  <label for="exampleInputPassword1">Pendidikan</label>
                  <input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan" value="{{old('pendidikan')}}">
                </div>
                </div>
                <div class='text-danger'>
                 @error('pendidikan')
                {{message}}
                @enderror
                </div>
                <div class="form-group">
                     <div class="input-group">
                  <label for="exampleInputPassword1">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="{{old('tempat_lahir')}}">
                </div>
                </div>
                <div class='text-danger'>
                 @error('tempat_lahir')
                {{message}}
                @enderror
                </div>
                <div class="form-group">
                     <div class="input-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{old('tanggal_lahir')}}">
                </div>
                </div>
                <div class='text-danger'>
                 @error('tanggal_lahir')
                {{message}}
                @enderror
                </div>
                <div class="form-group">
                     <div class="input-group">
                  <label>Agama</label>
                  <select name="agama" class="form-control">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                  </select>
                </div>
                </div>
                <div class='text-danger'>
                @error('agama')
                {{message}}
                @enderror
                </div>
                 <div class="form-group">
                     <div class="input-group">
                  <label for="exampleInputPassword1">No Telp</label>
                  <input type="text" class="form-control" name="telp" placeholder="No Telp" value="{{old('telp')}}">
                </div>
                 </div>
                <div class='text-danger'>
                 @error('telp')
                {{message}}
                @enderror
                </div>
                 <div class="form-group">
                     <div class="input-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{old('alamat')}}">
                </div>
                 </div>
                <div class='text-danger'>
                @error('alamat')
                {{message}}
                @enderror
                </div>
                 <div class="form-group">
                     <div class="input-group">
                  <label for="exampleInputFile">Photo</label>
                  <input type="file" name="photo"  value="{{old('photo')}}">

                  <p class="help-block">Masukan Foto Disini.</p>
                </div>
                 </div>
                <div class='text-danger'>
                @error('photo')
                {{message}}
                @enderror
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

@endsection
@push('scripts')
<script>
$(function() {
    $('#guru-table').DataTable();
});
</script>
@endpush
