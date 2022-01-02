<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     * аттрибут для создания массива и заполнения в нем полей
     * @var array<int, string>
     */
    protected $fillable = [
        'admin_user_id',
        'category_id',
        'title',
        'seo_title',
        'preview',
        'body',
        'image',
        'meta_description',
        'meta_keywords',
    ];

    public function comments(){
        return $this->hasMany(Comment::class)->orderBy("created_at");
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function AdminUser(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(AdminUser::class);
    }
}
