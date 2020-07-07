@extends('layout.master')
@section('content')

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="/siswa">
    <img src="https://img.icons8.com/carbon-copy/2x/back.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    Kembali
  </a>
</nav>
<div class="col-6">
        <h1>Edit Data Siswa</h1>
    </div>
<div class="container">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
    @endif
    <div class="row">
    <div class="col-lg-12">

    <form action="/siswa/{{$siswa->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="namadepan">Nama Depan</label>
                    <input name="nama_depan" type="text" class="form-control" id="namadepan" aria-describedby="emailHelp" value="{{$siswa->nama_depan}}">
                </div>

                <div class="form-group">
                    <label for="namabelakang">Nama Belakang</label>
                    <input name="nama_belakang" type="text" class="form-control" id="namabelakang" value="{{$siswa->nama_belakang}}">
                </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="L" @if($siswa->jenis_kelamin =='L') selected @endif >Laki-Laki</option>
                <option value="P" @if($siswa->jenis_kelamin =='P') selected @endif >Perempuan</option>
                </select>
                </div>

                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input name="agama" type="text" class="form-control" id="agama" aria-describedby="emailHelp" value="{{$siswa->agama}}">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" rows="3">{{$siswa->alamat}}</textarea>
                </div>

                
              
            </div>
                <button type="submit" class="btn btn-warning">Update</button>
    </form>
    </div>

    </div>
</div>
   
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
            </div>
            </div>
        </div>
        </div>




        @endsection

