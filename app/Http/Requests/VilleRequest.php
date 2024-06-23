<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VilleRequest extends FormRequest
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
            'ville' => 'required|string|max:255', // Exemple de règle de validation pour l'attribut 'ville'
            'region_id' => 'required|exists:regions,id', // Exemple de règle de validation pour l'attribut 'region_id', vérifiant que la région existe dans la table 'regions'
        ];
    }

    public function messages(): array
    {
        return [
            'ville.required' => 'Le champ ville est requis.',
            'ville.string' => 'Le champ ville doit être une chaîne de caractères.',
            'ville.max' => 'Le champ ville ne peut pas dépasser :max caractères.',
            'region_id.required' => 'Le champ région est requis.',
            'region_id.exists' => 'La région sélectionnée est invalide.',
        ];
    }
}
