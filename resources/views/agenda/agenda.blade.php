@extends('layout.main')

@section('content')
<a type="button" href="{{route('tambahagenda')}}" class="btn btn-dark mb-4 mt-4">+ TAMBAH</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Materi</th>
            <th scope="col">Jam Pelajaran</th>
            <th scope="col">Absensi</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jenis Pembelajaran</th>
            <th scope="col">Link Pembelajaran</th>
            <th scope="col">Dokumentasi</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)

        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $row->namaguru }}</td>
            <td>{{ $row->matapelajaran }}</td>
            <td>{{ $row->materipelajaran }}</td>
            <td>{{ $row->jampelajaran }}</td>
            <td>{{ $row->absensi }}</td>
            <td>{{ $row->kelas }}</td>
            <td>{{ $row->jenispembelajaran }}</td>
            <td>{{ $row->linkpembelajaran }}</td>
            <td>
                <img src="{{ asset('fotoagenda/'.$row->dokumentasi) }}" alt="" srcset="" class="img-fluid">
            </td>
            <td>{{ $row->keterangan }}</td>
            <td class="d-flex">
                <a type="button" href="/tampilanagenda/{{$row->id}}" class="btn btn-warning mr-2">Edit</a>
                <form action="/deletedataagenda/{{$row->id}}" method="post">
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
