@extends('app')

@section('content')
    <h2 class="mt-4">Upload Excel File</h2>
    <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @error('excel_file')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @if (session('success'))
            <div style="color: green;" class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div style="color: red;" class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="input-group mb-3">
            <input type="file" required name="excel_file" class="form-control" id="inputGroupFile01">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if (isset($getfiles))
        <div class="container">

            <div class="row">
                <table class="mt-5 table">
                    <thead>
                        <tr>
                            <th scope="col">S.NO</th>
                            <th scope="col">FileName</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getfiles as $key => $getfile)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td><a href="{{ route('import.filedetail', ['fileName' => $getfile->file_name]) }}">{{ $getfile->file_name }}</a></td>
                        </tr>
                        <tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
