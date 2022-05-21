@forelse($live_classes as $live_class)
<article class="courseListItem">
    <a href="{{URL::to('/live/'.$live_class->slug)}}" target="_blank">
        <div class="imgZoomWrap">
            <img src="{{$live_class->image}}" 
            class="img-fluidThumb" alt="">
        </div>
    </a>
    <div class="courseBtmWrap">
        <ul class="courseLang">

    @foreach($live_class->languages as $key => $language)
        <li>{{ $language->name }}</li>
     @endforeach
        
        </ul>
        <h4>{{$live_class->class_name ?? ''}}</h4>
        <h6><small>{{$live_class->category->name ?? ''}}</small></h6>
        <h6><small>By
            <?php
            $educators = collect($live_class->educators)
                    ->map(function($value, $key) {
                        return $value->name;
                    })->implode(', ');
            ?>
            {{$educators}} 
        </small></h6>
        <ul class="courseAttr">
            <li>
                <h6><small>Start date</small></h6>
                <h6>{{date('j M Y',strtotime($live_class->start_date))}}</h6>
            </li>
            <li>
                <h6><small>Duration</small></h6>
                <h6>3 months</h6>
            </li>
        </ul>
        <h6 class="ratingWrap">
            <span class="starRatings">
                <u class="orangeTxt bold">{{$live_class->overall_rating_points}}</u>
                <i class="active"></i>
                <i class="active"></i>
                <i class="active"></i>
                <i class="active"></i>
                <i></i>
            </span>
            <small>({{$live_class->no_of_enroll_student}} people)</small>
        </h6>
        <div class="bottomLinks">
            <h5 class="priceInfo">
                <span class="newPrice"><i>₹</i>{{$live_class->price}}</span>
                <span class="realPrice"><i>₹</i>{{$live_class->mrp}}</span>
            </h5>
            <a href="{{url('/live/'.$live_class->slug)}}" class="arrowBtn">View course</a>
        </div>
    </div>
</article>
@empty
<h1>Classes Not found</h1>
@endforelse
