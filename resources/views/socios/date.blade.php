{!! Form::open(array('url'=>'/sociosDate','method'=>'GET','autocomplete'=>'off','role'=>'fecha_inicial','fecha_fin')) !!}
<div class="row">
	<div class="col-lg-6 col-md-6 col-xs-6">
        <div class="form-group">
            <label>Fecha Inicial</label>
            <input type="date" class="form-control datepicker" name="fecha_inicial">
        </div>
    </div>
	<div class="col-lg-6 col-md-6 col-xs-6">
        <div class="form-group">
            <label>Fecha Final</label>
            <input type="date" class="form-control datepicker" name="fecha_fin">
        </div>
    </div>
	<div class="col-lg-12 col-md-12 col-xs-12">
        <div class="form-group pull-right">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</div>

{!! Form::close() !!}
