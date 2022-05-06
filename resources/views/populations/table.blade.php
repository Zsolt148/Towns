<div class="table-responsive">
    <table class="table" id="populations-table">
        <thead>
        <tr>
            <th>Town</th>
            <th>Year</th>
            <th>Women</th>
            <th>Total</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($populations as $population)
            <tr>
                <td>{{ $population->town->name ?? '-' }}</td>
                <td>{{ $population->year }}</td>
                <td>{{ $population->women }}</td>
                <td>{{ $population->total }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin:populations.destroy', $population->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin:populations.show', [$population->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin:populations.edit', [$population->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
