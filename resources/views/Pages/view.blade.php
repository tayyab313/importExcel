@extends('app')
@section('content')
<div class="container">
    <div class="row">
        @if (isset($getfiles) && isset($columnNames))
        <h1 class="my-5 text-success">Excel File Detail</h1>
        <a href="{{route('import.index')}}" class="btn btn-primary text-light">back</a>
        <div class="table-responsive mt-5">
            <table class="table">
                <thead>
                    <tr>
                        @foreach ($columnNames as $value)
                            <th scope="col">{{ $value }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getfiles as $key => $getfile)
                        <tr>
                            @foreach (get_object_vars($getfile) as $property => $value)
                                <td>{{ $value }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>


<!-- Display pagination links -->
{{ $getfiles->links('pagination::bootstrap-4') }}
@endsection
