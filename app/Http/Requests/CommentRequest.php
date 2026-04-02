<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'post_id' => 'required|exists:post,id', // اتأكد إن اسم جدول المقالات عندك post مش posts
            'author' => 'required|string|max:255',
            'content' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'content.required' => 'mandatory field.',
            'author.required' => 'mandatory field.',
        ];
    }
}
