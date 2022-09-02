<x-layout>
    <x-header/>
    <body class="sub_page ">
    <section class="contact_section layout_padding d-flex justify-content-center align-items-center">
        <div class="container justify-content-center border border-light p-3">
            <div class="row">
                <div class="col-md-6">
                    <div class=" heading_container">
                        <h2 class="">
                            Add User
                        </h2>
                    </div>
                    <form  method="POST" action="{{ route('add_user.store') }}" enctype="multipart/form-data">
                        @csrf
                        <x-_input name="name"/>
                        <x-_input name="username"/>
                        <x-_input name="password" type="password"/>
                        <x-_input name="email" type="email"/>
                        <div class="mb-6 mt-4 ">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ucwords('admin')}} </label>
                            <div>
                                <select  id="is_admin" name="is_admin" class=" bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="true">admin</option>
                                    <option value="false">not admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex ">
                            <button type="submit">
                                Add User
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
