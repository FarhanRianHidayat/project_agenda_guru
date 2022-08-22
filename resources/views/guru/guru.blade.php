@extends('layout.main')

@section('content')
<a type="button" href="{{route('tambahguru')}}" class="btn btn-dark mb-4 mt-4">+ TAMBAH</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Nik Guru</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)

        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->nikguru }}</td>
            <td>{{ $row->matapelajarann }}</td>
            <td>{{ $row->username }}</td>
            <td>{{ $row->password }}</td>
            <td class="d-flex">
                <a type="button" href="/tampilanguru/{{$row->id}}" class="btn btn-warning mr-2">Edit</a>
                <form action="/deletedataguru/{{$row->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
