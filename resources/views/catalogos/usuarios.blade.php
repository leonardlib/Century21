@extends('layouts.app')

@section('titulo')
    Inicio
@endsection
<link href="{{ asset('/css/index/index.css') }}" rel="stylesheet" type="text/css" />
@section('container')
      
    <script type="text/javascript">
        $('#inicio').attr('class', 'active');
    </script>
@endsection