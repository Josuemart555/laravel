@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('socios.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('socios.date')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">
		<div class="table-responsibe">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Código Socio</th>
					<th>Nombre</th>
                    <th>No Tarjeta Crédito</th>
                    <th>Fecha emisión</th>
                    <th>Monto</th>
                    <th>Saldo</th>
				</thead>
				@foreach ($socios as $so)
				<tr>
					<td>{{ $so->cod_socio }}</td>
					<td>{{ $so->nombre }}</td>
					<td>{{ $so->no_tc }}</td>
					<td>{{ date('d-m-Y', strtotime($so->fecha_emision)) }}</td>
					<td>{{ $so->monto }}</td>
					<td>{{ $so->saldo }}</td>
                </tr>
				@endforeach
			</table>
		</div>
		{{$socios->render()}}
	</div>
</div>
@endsection
