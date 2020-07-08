<div class="table-responsive">
    <table class="table" id="kinders-table">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Subject</th>
                <th>Message</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @php
                dd($kinders);
            @endphp --}}
        @foreach($kinders as $kinder)
            <tr>
                <td>{{ $kinder->name }}</td>
                <td>{{ $kinder->email }}</td>
                <td>{{ $kinder->phone }}</td>
                <td>{{ $kinder->subject }}</td>
                <td>{{ $kinder->message }}</td>
                <td>
                    {!! Form::open(['route' => ['kinders.destroy', $kinder->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('kinders.show', [$kinder->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('kinders.edit', [$kinder->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
