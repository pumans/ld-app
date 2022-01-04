@extends('layout.app')
@section('title', $post->title)
@section('content')
    <!-- Page Title Section -->
    <div class="page-title-section style-two">
        <div class="auto-container">
            <h2>{{$post->title}}</h2>
        </div>
    </div>
    <!-- End Page Title Section -->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container padding-top style-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img src="/storage/posts/{{$post->image}}" alt="" />
                            </div>
                            <div class="lower-content">
                                <div class="post-info"><span class="theme_color">{{$post->category->name}}</span> - Опубліковано {{Date::parse($post->created_at)->format('d.m.Y в H:i')}} </div>
                                <p>{!! $post->body !!}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Related Projects -->
                    <div class="related-projects">
                        <div class="title-box">
                            <h3>Related Posts</h3>
                        </div>
                        <div class="row clearfix">

                            <!-- News Block Four -->
                            <div class="news-block-four col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="/images/resource/news-4.jpg" alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <div class="title">business</div>
                                        <h4><a href="blog-detail.html">Problems About Social Insurance For Truck Drivers</a></h4>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block Four -->
                            <div class="news-block-four col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="/images/resource/news-5.jpg" alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <div class="title">News</div>
                                        <h4><a href="blog-detail.html">5 Steps To Build Strategy Planning</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

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
    @if(\Auth()->check())
        <!-- Lower Section -->
        <div class="lower-section">
            <div class="auto-container">
                <!-- Comments -->
                @foreach($post->comments as $comment)
                    <div class="comment-form" style="margin: 1px;padding:.50rem 1.25rem;background-color: ghostwhite;border-top:1px solid rgba(0,0,0,.25);border-left: 3px solid #0a53be">
                        <div class="group-title">
                            <h5> {{$comment->user->name}}</h5>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group" style=" padding:.75rem 1.25rem;background-color: ghostwhite;border-top:1px solid rgba(0,0,0,.25);border-left: 3px solid #0a53be">
                            <p>{{$comment->text}}</p>
                        </div>
                    </div>
                @endforeach
                <!-- Comment Form -->
                    <div class="comment-form">
                        <div class="group-title">
                            <h3>Залишити коментар</h3>
                        </div>

                        <!--Comment Form-->
                        <form method="POST" action="{{ route("comment", $post->id) }}">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="{{\Auth::user()->name}}" value="{{\Auth::user()->name}}" required>
                                    @error('username')<p style="color: red">{{$message}}</p>@enderror
                                </div>
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <input type="hidden" name="user_id" value="{{\Auth::user()->id}}">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="text" placeholder="Коментар ..." required></textarea>
                                    @error('text')<p style="color: red">{{$message}}</p>@enderror
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Коментувати</span></button>
                                </div>

                            </div>
                        </form>

                    </div>
                    <!--End Comment Form -->
                </div>
            </div>
            <!-- End Lower Section -->
        @endif
    </div>
@endsection
