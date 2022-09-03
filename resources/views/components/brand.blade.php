@props(['products'])
@foreach($products as $product)
<div class="box">
    <a href="/product_details/{{$product->id}}">
        <div class="img-box">

            <img src="{{ url('public/images/'.$product->photo)}}" alt="">
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
