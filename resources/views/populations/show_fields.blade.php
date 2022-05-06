<!-- Town Id Field -->
<div class="col-sm-12">
    {!! Form::label('town_id', 'Town') !!}
    <p>{{ $population->town->name }}</p>
</div>

<!-- Year Field -->
<div class="col-sm-12">
    {!! Form::label('year', 'Year:') !!}
    <p>{{ $population->year }}</p>
</div>

<!-- Women Field -->
<div class="col-sm-12">
    {!! Form::label('women', 'Women:') !!}
    <p>{{ $population->women }}</p>
</div>

<!-- Total Field -->
<div class="col-sm-12">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $population->total }}</p>
</div>

