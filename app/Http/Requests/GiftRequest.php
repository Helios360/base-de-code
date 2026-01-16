<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiftRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:50',
            'url' => ['nullable', 'url:http,https'],
            'details' => 'nullable|string',
            'price' => ['required', 'numeric', 'decimal:0,2'],
        ];
    }
    public function messages(): array{
        return [
            'name.required' => 'Le nom est obligatoire',
            'name.min' => 'Le nom doit contenir au moins :min',
            'name.max' => 'Le nom ne doit pas dépasser :max caractères',
            'url.url' => "L'url doit être valide et commencer par http:// ou https://",
            'details.string' => 'Les détails doivent être du texte',
            'price.required' => 'Le prix est obligatoire',
            'price.numeric' => 'Le prix doit être un nombre',
            'price.decimal' => 'Le prix doit avoir 2 décimales max',
        ];
    }
}
