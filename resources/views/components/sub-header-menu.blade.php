<div class="catMenuWrap">
    <button type="button" class="scrollNavBtn" id="left_scroll_nav">Previous Menu</button>
    <div class="scrollCntWrap" id="subHeaderNav">
	    <div class="topCatMenuWrap" id="topCatMenuWrap">
	        @if (!empty($subHeaderCategories))
	            @foreach ($subHeaderCategories as $subHeaderCategory)
	                <a href="{{URL::to('/listing?c='.$subHeaderCategory->slug)}}">{{$subHeaderCategory->name}}</a>
	            @endforeach
	        @endif
	    </div>
	</div>
    <button type="button" class="scrollNavBtn" id="right_scroll_nav">Next Menu</button>
</div>
