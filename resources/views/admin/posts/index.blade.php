@extends('layout.admin')
@section('title', 'Адміністратор новин')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Новини
                <small>Адмін панель</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Новини</li>
            </ol>
        </section>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список новин</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Назва</th>
                                <th>Дата створення</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <!-- News Block -->
                            @forelse($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{Date::parse($post->created_at)->format('d.m.Y в H:i')}}</td>
                                <td>
                                    <a href="{{route('single', $post->id)}}"><span class="btn btn-primary btn-xs">Переглянути</span></a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning btn-xs">Редагувати</a>
                                <td>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs">Видалити</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <li>Наразі новини відсутні</li>
                            @endforelse
                        </table>
                        <!-- Post Share Options -->
                        @if($posts)
                        {{ $posts->links() }}
                        @endif
                    </div>

                    <!-- /.box-body -->
                </div>
                <a href="{{ route('admin.posts.create') }}"><span class="box-title btn btn-success btn-lg">Додати</span></a>
                <!-- /.box -->
            </div>
        </div>

    </div>
@endsection
