@extends('main')

@section('content')
    <h2 class="text-center titre">Recherche par référence</h2>
    <div class="row" style="margin-top: 50px">
        {{ Form::open(['method'=>'GET','url'=>'test','class'=>'col-lg-12','role'=>'recherche']) }}
        {{ csrf_field() }}
        <form class="form-control row">
            <div class="input-group input-group-lg col-lg-12">
                <input type="text" class="form-control" value="{{$recherche}}" name="recherche"
                       placeholder="Faites une recherche">
            </div>
            <div class="input-group col-lg-12" style="margin: 20px 0px 40px 0px ">
                {{ Form::submit('Recherche', ['class'=>'btn btn-light btn-block'])}}
            </div>
            {!! Form::close() !!}
        </form>
    </div>
    <table class="table table-striped">
        <thead class="thead-dark">
        <th>Code</th>
        <th>Ref</th>
        </thead>
        @foreach($query as $q)
            <tr>
                <td>{{$q->Code}}</td>
                <td>{{$q->Ref}}</td>
            </tr>
        @endforeach
    </table>
@endsection