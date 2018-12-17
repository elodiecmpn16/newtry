@include('includes.css')
@include('logistique.header_logistique')

<div class="container">
  <div class="containerMetier">
        <div class="col-lg-12">
            <h1>Api Tremblaye test</h1>
            <table class="table table-striped">
                <thead class="thead-dark">
                {{--<th>Code</th>--}}
                <th>Ref</th>
                <th>Lot</th>
                <th>Entree</th>
                <th>Date</th>
                <th>Volume</th>
                <th>Libelle</th>
                <th>Nbr palette</th>
                <th>Nbr produit</th>
                {{--<th>Ref 2</th>--}}
                <th>Fournisseur</th>
                {{--<th>Ref client</th>--}}
                </thead>
                @foreach($datas as $data)
                    <tr>
                        {{--<td>{{$data->code}}</td>--}}
                        <td>{{$data->ref}}</td>
                        <td>{{$data->lot}}</td>
                        <td>{{$data->entree}}</td>
                        <td>{{$data->datent}}</td>
                        <td>{{$data->volume}}</td>
                        <td>{{$data->libelle}}</td>
                        <td>{{$data->nbpal}}</td>
                        <td>{{$data->nbprd}}</td>
                        {{--<td>{{$data->ref2}}</td>--}}
                        <td>{{$data->fournisseur}}</td>
                        {{--<td>{{$data->refclt}}</td>--}}
                    </tr>
                @endforeach
            </table>
        </div>
  </div>
</div>

@include('includes.script')
@include('includes.footer')
