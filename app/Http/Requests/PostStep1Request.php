<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStep1Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'province' => ['required'],
            'town' => ['required'],
            //'place' => ['required'],
            'post_id' => ['required'],
            // 'worktime' => ['required'],
            // 'category' => ['required'],
            // 'title' => ['required'],
            // 'text' => ['required'],
            'name' => ['required'],
        ];
    }
}
