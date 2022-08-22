@extends('layout.main')

@section('content')
    <div class="container">
    <h1 class="text-center mb-4">Edit Data Guru</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%"
                >
                    <form method="POST" action="/updatedataguru/{{$data->id}}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                                @error('nama')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nik Guru</label>
                            <input type="text" name="nikguru" value="{{$data->nikguru}}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                                @error('nikguru')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                            <input type="text" name="matapelajarann" value="{{$data->matapelajarann}}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                                @error('matapelajarann')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" value="{{$data->username}}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                                @error('username')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">password</label>
                            <input type="text" name="password" value="{{$data->password}}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                                @error('password')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection