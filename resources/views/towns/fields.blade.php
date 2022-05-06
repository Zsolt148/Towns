<!-- County Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('county_id', 'County:') !!}
    {!! Form::select('county_id', $counties, $town->county_id ?? null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- County Seat Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('county_seat', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('county_seat', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('county_seat', 'County Seat', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- County Level Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('county_level', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('county_level', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('county_level', 'County Level', ['class' => 'form-check-label']) !!}
    </div>
</div>
