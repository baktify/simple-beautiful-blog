<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'full_text' => ['required', 'string', 'max:65535'],
            'image' => ['nullable', 'image', 'mimetypes:image/jpeg,image/png'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'tags' => ['nullable', 'exists:tags,id']
        ];
    }
}
