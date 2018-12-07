@extends('main')

@section('content')
    <div class="col-sm-12">
        <h1>Exemple stocks clients</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
            <th>nom</th>
            <th>stocks</th>
            </thead>
            @foreach($stocks as $stock)
                <tr>
                    <td>{{$stock->code}}</td>
                    <td>{{$stock->total}}</td>
                </tr>
            @endforeach
{{--{{$stock->links()}}--}}
        </table>
    </div>
@endsection