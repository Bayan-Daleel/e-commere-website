@props([product])
<x-layout>
    <x-header/>
    <body class="sub_page ">

    <section class="contact_section layout_padding d-flex justify-content-center align-items-center">

    <div class="container dark-grey-text mt-5">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <img src="{{asset('storage.photo')}}" class="img-fluid" alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Content-->
                    <div class="p-4">

                        <div class="mb-3">
                            <a href="">
                                <span class="badge purple mr-1">{{}}</span>
                            </a>
                        </div>

                        <p class="lead">
                            <span>$100</span>
                        </p>

                        <p class="lead font-weight-bold">Description</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa
                            sint voluptatibus!
                            Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

                        <form class="d-flex justify-content-left">
                            <!-- Default input -->
                            <input type="number" value="1" aria-label="Search" class="form-control mt-4" style="width: 80px">
                            <button class="button m-auto ml-lg-4" type="submit">Add to cart
                                <i class="fas fa-shopping-cart ml-1"></i>
                            </button>

                        </form>

                    </div>
                    <!--Content-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr>
        </div>
    </section>
    </body>
            <x-info_section/>
            <x-footer/>
</x-layout>
