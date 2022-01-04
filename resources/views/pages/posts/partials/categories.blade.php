<!--Category Blog-->
<div class="sidebar-widget categories-blog">
    <div class="sidebar-title">
        <h4>Категорії</h4>
    </div>
    @inject('categories','App\Providers\CategoriesForSidebar')
    <ul>
        <li><a href="{{route('posts')}}">Усі категорії</a></li>
        {{$categories->get_categories()}}
    </ul>
</div>
