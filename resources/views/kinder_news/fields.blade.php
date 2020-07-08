<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Desrciption Field -->
<div class="form-group col-sm-8 col-lg-12">
    {!! Form::label('desrciption', 'Desrciption:') !!}
    {!! Form::textarea('desrciption', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
{{-- <div class="container">
    <form method="post" action="{{ route('kinderNews.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" style="width: 500px;" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea style="width: 500px; height:200px;" class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="Image">Image</label>
            <input type="file" style="width: 500px;" class="form-control" id="images" name="images">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>    
        <a href="{{ route('kinderNews.index') }}" class="btn btn-default">Cancel</a>
    </form>    
</div> --}}

<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('images', 'Images:') !!}
    {!! Form::file('images', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-6" style="margin-top: 25px;">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
</div>
