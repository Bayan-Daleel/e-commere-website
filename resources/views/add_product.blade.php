<x-layout>
    <x-header/>
    <body class="sub_page ">
    <section class="contact_section layout_padding d-flex justify-content-center align-items-center">
        <div class="container justify-content-center border border-light p-3">
            <div class="row">
                <div class="col-md-6">
                    <div class=" heading_container">
                        <h2 class="">
                            Add Product
                        </h2>
                    </div>
                    <form  method="POST" action="{{route('add_product.store')}}" enctype="multipart/form-data">
                        @csrf
                        <x-_input name="name"/>
                        <x-_input name="slug"/>
                        <x-_input name="price"/>
                        <x-_input name="photo" type="file"/>
                        <x-_input name="no-pieces"/>
                        <x-text_erea name="description"/>
                        <x-select name="category_id"/>
                        <div class="d-flex ">
                            <button type="submit">
                                Add Product
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>
    </body>
    <x-info_section/>
    <x-footer/>
</x-layout>
