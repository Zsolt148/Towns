<div class="table-responsive">
    <table class="table" id="counties-table">
        <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($counties as $county)
            <tr>
                <td>{{ $county->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin:counties.destroy', $county->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin:counties.show', [$county->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin:counties.edit', [$county->id]) }}"
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
