@extends('layout.main')

@section('content')
    <div class="container">
    <h1 class="text-center mb-4">Edit Data Kelas</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%"
                >
                    <form method="POST" action="/updatedatakelas/{{$data->id}}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <input type="text" name="walikelas" value="{{$data->walikelas}}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                                @error('walikelas')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <input type="text" name="kelass" value="{{$data->kelass}}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                                @error('kelass')
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