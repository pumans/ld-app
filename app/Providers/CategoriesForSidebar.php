<?php
namespace App\Providers;

use App\Models\Category;

class CategoriesForSidebar
{
    public function get_categories(){
        foreach (Category::all() as $category){
            echo '<li><a href="'. route('posts_by_category', $category->id).'">'.$category->name. '</a></li>';
        }
    }
}
