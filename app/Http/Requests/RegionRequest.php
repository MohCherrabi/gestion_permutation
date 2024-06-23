<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegionRequest extends FormRequest
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
            'region' => 'required|string|max:255', // Exemple de règle de validation pour le champ region
        ];
    }
    public function messages(): array
    {
        return [
            'region.required' => 'Le champ région est requis.',
            'region.string' => 'Le champ région doit être une chaîne de caractères.',
            'region.max' => 'Le champ région ne doit pas dépasser :max caractères de longueur.',
        ];
    }
}
