@foreach ($parents as $parent)
    <div class="item">
        <div class="testimony-wrap d-flex">
        <div class="user-img mr-4" style="background-image: url(uploads/parents/{{ $parent->images }})">
        </div>
        <div class="text ml-2 bg-light">
            <span class="quote d-flex align-items-center justify-content-center">
            <i class="icon-quote-left"></i>
            </span>
            <p><?=substr($parent->about_kinder, 0, 100)?></p>
            <p class="name">{{ $parent->full_name }}</p>
            <span class="position">{{ $parent->parent }}</span>
        </div>
        </div>
    </div>
@endforeach