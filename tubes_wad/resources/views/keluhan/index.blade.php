@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Daftar Keluhan Anda</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Buat Keluhan</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Judul Keluhan</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($keluhans as $keluhan)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $keluhan->title }}</td>
            <td class="text-center">
                <form action="{{ route('keluhans.destroy',$keluhan->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('keluhans.show',$keluhan->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('keluhans.edit',$keluhan->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $keluhans->links() !!}
 
@endsection