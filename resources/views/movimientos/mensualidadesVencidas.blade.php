@extends('layouts.app')
<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
    <div class="row">
        <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Mensualidades Pagadas</h3></div>
            <div class="table-responsive">
                <table id="tabContratos" class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Contrato</th>
                        <th>Monto $</th>
                        <th>Fecha</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mensualidades as $mensualidad)
                        <tr>
                            <td>{{$mensualidad->id}}</td>
                            <td>{{$mensualidad->contrato_id}}</td>
                            <td>{{$mensualidad->monto}}</td>
                            <td>{{$mensualidad->fecha}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#movimientos').attr('class', 'active');
        $('#mensualidades_vencidas').attr('class', 'active');
    </script>
    <script src="{{ asset('/js/mensualidades.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.2.0.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
@endsection
