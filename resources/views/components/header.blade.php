
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html"> About</a>
                        </li>
                        <li class="nav-item active">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " data-toggle="dropdown">Category</a>
                                <div class="dropdown-menu rounded-0 m-0 " style="z-index:5">
                                    <a class="dropdown-item" href="/?{{http_build_query(request()->except('category','page'))}}"
                                       :active="count(request()->all())==0">
                                        ALL</a>
                                    @foreach(\App\Models\Category::all() as $category)
                                    <a  class="dropdown-item"
                                        href="/?category={{ $category->name }}&{{ http_build_query(request()
                                        ->except('category', 'page')) }}"
                                        :active='request()->is("categories/{$category->slug}")'
                                        >
                                        {{ucwords($category->name)}}"
                                          </a>
                                    @endforeach

                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#product"> Products </a>
                        </li>
                        <li class="nav-item active">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Admin Rules</a>
                                <div class="dropdown-menu rounded-0 m-0 " style="z-index:5">
                                    <a href="{{ route('add_category.index') }}" class="dropdown-item">Add Category</a>
                                    <a href="{{ route('add_user.index') }}" class="dropdown-item">Add User</a>
                                    <a href="{{ route('add_product.index') }}" class="dropdown-item">Add Product</a>

                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="user_option">
                        <a href="{{ route('login.index') }}">
                            <img src="images/user.png" alt="">
                            <span>
                  Login
                </span>
                        </a>
                        &nbsp; &nbsp;
                        <a href="{{ route('register.index') }}">
                            <span>
                  Register
                </span>
                        </a>

                    </div>
                </div>
                <div>
                    <div class="custom_menu-btn ">
                        <button>
                <span class=" s-1">

                </span>
                            <span class="s-2">

                </span>
                            <span class="s-3">

                </span>
                        </button>
                    </div>
                </div>

            </nav>
        </div>
    </header>
    <!-- end header section -->

    {{$slot}}
</div>
