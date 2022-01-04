<div class="news-block-three">
    <div class="inner-box">
        <div class="image">
            <a href="{{route('single', $post->id)}}"><img src="/storage/posts/{{$post->image}}" alt="" /></a>
        </div>
        <div class="title">{{$post->title}}</div>
        <h4><a href="{{route('single', $post->id)}}">{{$post->preview}}</a></h4>
        <div class="post-date">Опубліковано
            {{Date::parse($post->created_at)->format('d.m.Y в H:i')}}</div>
    </div>
</div>
