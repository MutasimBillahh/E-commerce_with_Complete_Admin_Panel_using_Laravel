@php

$tags_en = App\Models\Product::groupBy('product_tags_en')->select('product_tags_en')->get();

$tags_hin = App\Models\Product::groupBy('product_tags_hin')->select('product_tags_hin')->get();

@endphp


        
  <div class="sidebar-widget product-tag wow fadeInUp">
    <h3 class="section-title">Product tags</h3>
    <div class="sidebar-widget-body outer-top-xs">


      <div class="tag-list">


@if(session()->get('language') == 'hindi') 
@foreach($tags_en as $tag)
<a class="item active" title="Phone" href="category.html">{{$tag->product_tags_en}}</a>
@endforeach

  @else 
  @foreach($tags_hin as $tag)
<a class="item active" title="Phone" href="category.html">{{$tag->product_tags_hin}}</a>
@endforeach

@endif



       </a> </div>
      <!-- /.tag-list --> 
    </div>
    <!-- /.sidebar-widget-body --> 
  </div>
  <!-- /.sidebar-widget --> 
       