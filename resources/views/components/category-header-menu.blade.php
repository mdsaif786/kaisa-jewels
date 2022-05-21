<li><a href="{{URL::to('/listing')}}"><i class="gridDots"></i>All Books</a>
    <div class="megaMenu">
        <ul>
            @if (!empty($parentCategories))
                @foreach ($parentCategories as $key=>$parentCategory)
                    <li><a href="{{URL::to('/listing?c='.$parentCategory->slug)}}"><span>{{$parentCategory->name}}</span></a>
                        <ul>
                            @if (!empty($parentCategory->parent))
                                @foreach ($parentCategory->parent as $child_category)
                                    <li><a href="{{URL::to('/listing?c='.$child_category->slug)}}">{{$child_category->name}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</li>
