
<x-layout>
<x-header/>
    <body class="sub_page ">
    <section class="contact_section layout_padding d-flex justify-content-center align-items-center">
        <div class="container justify-content-center border border-light p-3">
            <div class="row">
                <div class="col-md-6">
                    <div class=" heading_container">
                        <h2 class="">
                            Login
                        </h2>
                    </div>
                    <form  method="POST" action="{{ route('login.store') }}">
                         @csrf
                        <x-_input name="email"/>
                        <x-_input name="password" type="password"/>
                        <div class="d-flex ">
                            <button type="submit">
                                Login
                            </button>
                        </div>
                    </form>

                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
<x-info_section/>

<x-footer/>
</x-layout>
