
<x-layout>
<x-header>
    <x-slider/>
</x-header>

<!-- about section -->

<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            About Us
                        </h2>

                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                    <a href="#product">
                        Our Products
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="images/about-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

<!-- brand section -->

<section class="brand_section" id="product">
    <div class="container">
        <div class="heading_container">
            <h2>
                 Products
            </h2>
        </div>
        <div class="brand_container layout_padding2">
            <x-brand :products='$products'/>
            <div class="d-block">
        </div>
        </div>
        {{$products->links()}}
    </div>
</section>

<!-- end brand section -->

    <!-- discount section -->

    <section class="discount_section  layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <h2>
                            The Latest Collection
                        </h2>
                        <h2 class="main_heading">
                            50% DISCOUNT
                        </h2>

                        <div class="">
                            <a href="#product">
                                Our Products
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/discount-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end discount section -->

<!-- info section -->
<x-info_section/>
<!-- end info_section -->
<x-footer/>
</x-layout>

