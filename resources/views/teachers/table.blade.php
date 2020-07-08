<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
            <tr>
                <th class="text-center">Images</th>
                <th class="text-center">Full Name</th>
                <th class="text-center">Job</th>
                <th class="text-center">Slogan</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teachers)
            <tr>
                <td class="text-center"><img src="/uploads/teachers/{{ $teachers->images }}" width="100px" height="100px" alt=""></td>
                <td class="text-center">{{ $teachers->full_name }}</td>
                <td class="text-center">{{ $teachers->job }}</td>
                <td class="text-center">{{ $teachers->slogan }}</td>
                <td class="text-center">
                    {!! Form::open(['route' => ['teachers.destroy', $teachers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teachers.show', [$teachers->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('teachers.edit', [$teachers->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
