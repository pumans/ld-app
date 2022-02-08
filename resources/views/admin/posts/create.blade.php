@extends('layout.admin')
@section('title', 'Адміністратор новин')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Новини
                <small>Адмін панель</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">{{ isset($post) ? 'Редагувати' : 'Додати' }} новину</li>
            </ol>
        </section>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Додати новину</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form
                        style="display: flex; flex-direction: column; width: 80%" method="post" enctype="multipart/form-data"
                        action="{{ isset($post) ? route('admin.posts.update', $post->id) : route('admin.posts.store') }}">
                        @csrf
                        @if(isset($post))
                            @method('PUT')
                        @endif
                        <input type="hidden" name="admin_user_id" value="1">
                        <p style="margin-top: 10px">Категорія</p>
                        <select name="category_id">
                            @foreach($categories as $category)
                            <option
                                {{ isset($post) && $category->id == $post->category->id ? 'selected' : '' }}
                                value="{{$category->id}}" >{{$category->name}}
                            </option>
                            @endforeach
                        </select>

                        <p style="margin-top: 10px">Титул</p>
                        <input type="text"
                        @if(isset($post)) value="{{$post->title}}" @else placeholder="введіть заголовок новини"
                        @endif name="title" required>

                        <p style="margin-top: 10px">SEO Титул</p>
                        <input type="text"
                        @if(isset($post)) value="{{$post->seo_title}}"
                        @else placeholder="введіть SEO заголовок новини" @endif name="seo_title">

                        <p style="margin-top: 10px">Короткий зміст новини</p>
                        <textarea style="height:50px"
                        placeholder="короткий зміст новини"  name="preview" required>@isset($post) {{$post->preview}}@endisset</textarea>

                        <p style="margin-top: 10px">Текст новини</p>
                        <textarea style="height:100px; margin-top: 20px" placeholder="текст новини"  name="body" required>@isset($post) {{$post->body}}@endisset</textarea>

                        <p style="margin-top: 10px">Фото новини</p>
                        @if(isset($post) && $post->image)
                        <div>
                            <img src="/storage/posts/{{$post->image}}">
                        </div>
                        @endif
                        <input type="file" name="image" @isset($post) value="{{$post->image}} @endisset">

                        <p style="margin-top: 10px">META опис</p>
                        <textarea style="height:50px" placeholder="опис"  name="meta_description">@isset($post) {{$post->meta_description}}@endisset</textarea>

                        <p style="margin-top: 10px">META ключеві слова</p>
                        <textarea style="height:50px" placeholder="ключеві слова" name="meta_keywords">@isset($post) {{$post->meta_keywords}}@endisset</textarea>

                        <input class="btn btn-success btn-lg" style="width: 150px" type="submit" value="Зберегти">
                    </form>

                    <!-- /.box-body -->
                </div>

                <!-- /.box -->
            </div>
        </div>

    </div>
@endsection
