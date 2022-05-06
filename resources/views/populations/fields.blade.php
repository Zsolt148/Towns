<!-- Town Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('town_id', 'Town:') !!}
    {!! Form::select('town_id', $towns, $town->town_id ?? null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', 'Year:') !!}
    {!! Form::text('year', null, ['class' => 'form-control','id'=>'year']) !!}
</div>

<!-- Women Field -->
<div class="form-group col-sm-6">
    {!! Form::label('women', 'Women:') !!}
    {!! Form::number('women', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>
