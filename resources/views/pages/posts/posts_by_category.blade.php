@extends('layout.app')
@section('title', 'Новини')
@section('content')

    <!-- Page Title Section -->
    <div class="page-title-section">
        <div class="auto-container">
            <h2>Новини в категорії  <span>{{$category->name}}</span> </h2>
        </div>
    </div>
    <!-- End Page Title Section -->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container padding-top">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="our-blogs">
                        <!-- News Block -->
                        @each('pages.posts.partials.post', $posts, 'post', 'pages.posts.partials.empty_post')
                    </div>

                    <!-- Post Share Options -->
                    @include('pages.posts.partials.paginate')

                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top margin-left">

                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <div class="sidebar-title">
                                <h4>Пошук</h4>
                            </div>
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!--Category Blog-->
                    @include('pages.posts.partials.categories')

                    <!-- Popular Posts -->
                    @include('pages.posts.partials.popular')

                    </aside>
                </div>

            </div>
        </div>
    </div>
@endsection
