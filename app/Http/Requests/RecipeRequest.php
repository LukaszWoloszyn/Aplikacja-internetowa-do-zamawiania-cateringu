<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
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
            'offers_id' => 'required|exists:offers,id',
            'title' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'time' => 'required|integer',
            'servings' => 'required|integer',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
        ];
    }
}
