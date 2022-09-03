@props(['products'])
@foreach($products as $product)
<div class="box">
    <a href="{{ route('product_details.index') }}">
        <div class="img-box">
            <img src="{{asset('storage.photo')}}" alt="">
        </div>
        <div class="detail-box">
            <h6 class="price">
                @money($product->price)
            </h6>
            <h6>
                {{$product->name}}
            </h6>
            <h6>
                {{$product->category->name}}
            </h6>
        </div>
    </a>
</div>
@endforeach
