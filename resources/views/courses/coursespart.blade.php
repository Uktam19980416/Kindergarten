@foreach($courses as $course)
    <div class="col-md-6 course d-lg-flex ftco-animate">
        <div class="img hvr-grow" style="background-image: url(uploads/courses/{{ $course->images }}); cursor: pointer;"></div>
        <div class="text bg-light p-4">
            <h3><a href="#">{{ $course->course_name }}</a></h3>
            <p class="subheading"><span>Class time:</span> {{ $course->course_time }}</p>
            <p><?=substr($course->about_course, 0, 40)?></p>
        </div>
    </div>
@endforeach  

              