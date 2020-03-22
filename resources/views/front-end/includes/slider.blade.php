<div class="slider">
    <div id="coin-slider"> 
        @foreach($sliders as $slider)
        <a href="#"><img src="{{ asset('/')}}{{$slider->slider_image}}" width="960" height="360" alt="" /></a> 
        @endforeach
    </div>
    <div class="clr"></div>
</div>
    <div class="clr"></div>
</div>
</div>