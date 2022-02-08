<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * новость может добавлять только авторизованый пользователь в админ панели
     * @return bool
     */
    public function authorize()
    {
        return auth("admin")->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'admin_user_id' => ' numeric',
            'category_id' => ' ',
            'title' => 'required | max: 100 |min: 3',
            'seo_title' => ' ',
            'preview' => 'required | max: 400 |min: 3',
            'body' => 'required | max: 1500 |min: 3',
            'image' => 'image',
            'meta_description'=> ' ',
            'meta_keywords' => ' ',
        ];
    }
}
