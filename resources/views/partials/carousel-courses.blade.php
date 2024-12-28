<div id="carouselCourses" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($courses as $course)
            <div class="carousel-item @if($loop->first) active @endif">
                <div class="d-flex justify-content-center">
                    <div class="card course-card" style="width: 18rem;">
                        <img src="{{ $course->image_url ?? asset('storage/' . $course->image) }}" class="card-img-top" alt="{{ $course->title }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <a href="{{ url('/course/' . $course->slug) }}" class="btn btn-primary">{{ translate('read_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCourses" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCourses" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
