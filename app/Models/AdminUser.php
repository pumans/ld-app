<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     * пользователи панели администрирования
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function posts(){
        return $this->hasMany(Post::class)->orderBy("created_at");
    }
}
