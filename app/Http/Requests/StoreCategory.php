<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_en' => "required|string|unique:categories,name->en",
            'name_ar' => "required|string|unique:categories,name->ar",
            'image' => 'required|file|mimes:png,jpg,jpeg|max:3072',
            'status' => 'required|string|in:active,un_active'
        ];
    }
}
