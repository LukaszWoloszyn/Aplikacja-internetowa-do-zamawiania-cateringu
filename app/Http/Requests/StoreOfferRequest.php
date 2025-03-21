<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfferRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'breakfast' => 'required|string|max:255',
            'lunch' => 'required|string|max:255',
            'dinner' => 'required|string|max:255',
            'tea' => 'required|string|max:255',
            'supper' => 'required|string|max:255',
            'image' => 'required|string|max:50',
            'price_week' => 'required|numeric|min:0',
            'price_month' => 'required|numeric|min:0',
            'delivery' => 'required|string|max:255',
        ];
    }
}
