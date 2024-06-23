<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MetierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'metier' => 'required|string|max:255', // Exemple de règle de validation pour l'attribut 'metier'
        ];
    }

    public function messages(): array
    {
        return [
            'metier.required' => 'Le champ métier est requis.',
            'metier.string' => 'Le champ métier doit être une chaîne de caractères.',
            'metier.max' => 'Le champ métier ne peut pas dépasser :max caractères.',
        ];
    }
}
