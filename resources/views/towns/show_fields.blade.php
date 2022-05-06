<!-- County Id Field -->
<div class="col-sm-12">
    {!! Form::label('county', 'County:') !!}
    <p>{{ $town->county->name }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $town->name }}</p>
</div>

<!-- County Seat Field -->
<div class="col-sm-12">
    {!! Form::label('county_seat', 'County Seat:') !!}
    <p>{{ $town->county_seat ? 'Yes' : 'No' }}</p>
</div>

<!-- County Level Field -->
<div class="col-sm-12">
    {!! Form::label('county_level', 'County Level:') !!}
    <p>{{ $town->county_level ? 'Yes' : 'No' }}</p>
</div>

