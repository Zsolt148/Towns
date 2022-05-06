<div class="table-responsive">
    <table class="table" id="post2s-table">
        <thead>
        <tr>
            <th>Title</th>
        <th>Content</th>
        <th>User Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($post2s as $post2)
            <tr>
                <td>{{ $post2->title }}</td>
            <td>{{ $post2->content }}</td>
            <td>{{ $post2->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['post2s.destroy', $post2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('post2s.show', [$post2->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('post2s.edit', [$post2->id]) }}"
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
