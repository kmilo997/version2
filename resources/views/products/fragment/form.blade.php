<div class="form-group">



{!! Form::label('id','codigo')!!}
{!! Form::number('id',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('nombre','Nombre del producto')!!}
{!! Form::text('nombre',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('minimo','Cantidad')!!}
{!! Form::number('minimo',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('precio_compra','Precio compra')!!}
{!! Form::number('precio_compra',null,['class	'=> 'form-control'])!!}
</div>


<div class="form-group">

{!! Form::label('precio_venta','Precio venta')!!}
{!! Form::number('precio_venta',null,['class	'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::submit('Guardar',['class '=> ' form-group btn-block btn-lg btn btn-primary'])!!}
</div>	