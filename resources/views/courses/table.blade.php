<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th class="text-center">Images</th>
                <th class="text-center">Course Name</th>
                <th class="text-center">Course Time</th>
                <th class="text-center">About Course</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $courses)
            <tr>
                <td class="text-center"><img src="/uploads/courses/{{ $courses->images }}" style="width: 100px; height: 100px;" alt=""></td>
                <td class="text-center">{{ $courses->course_name }}</td>
                <td class="text-center">{{ $courses->course_time }}</td>
                <td class="text-center">{{ $courses->about_course }}</td>
                <td>
                    {!! Form::open(['route' => ['courses.destroy', $courses->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$courses->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courses.edit', [$courses->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
