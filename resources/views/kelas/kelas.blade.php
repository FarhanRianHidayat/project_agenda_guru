@extends('layout.main')

@section('content')
<a type="button" href="{{route('tambahkelas')}}" class="btn btn-dark mb-4 mt-4">+ TAMBAH</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Walikelas</th>
            <th scope="col">Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)

        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $row->walikelas }}</td>
            <td>{{ $row->kelass }}</td>
            <td class="d-flex">
                <a type="button" href="/tampilankelas/{{$row->id}}" class="btn btn-warning mr-2">Edit</a>
                <form action="/deletedatakelas/{{$row->id}}" method="post">
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
