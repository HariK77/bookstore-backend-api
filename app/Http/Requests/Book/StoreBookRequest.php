<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:3',
            'author' => 'required|string|min:3',
            'genre' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            'isbn' => 'required|min:3|unique:books',
            'image' => 'required|string|min:3',
            'publisher' => 'required|string|min:3',
        ];
    }
}
