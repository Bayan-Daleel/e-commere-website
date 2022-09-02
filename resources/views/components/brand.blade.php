@props(['products'])
@foreach($products as $product)
<div class="box">
    <a href="">
        <div class="img-box">
            <img src="images/slider-img.png" alt="">
        </div>
        <div class="detail-box">
            <h6 class="price">
                {{$product->price}}
            </h6>
            <h6>
                {{$product->name}}
            </h6>
            <h6>
{{--
                {{$product->category()->name}}
--}}
            </h6>
        </div>
    </a>
</div>
@endforeach
