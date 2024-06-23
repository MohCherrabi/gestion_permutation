<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtablissementRequest extends FormRequest
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
            'etablissement' => 'required|string|max:255', // Exemple de règle de validation pour l'attribut 'etablissement'
            'code' => 'required|string|max:50', // Exemple de règle de validation pour l'attribut 'code'
            'adresse' => 'required|string|max:255', // Exemple de règle de validation pour l'attribut 'adresse'
            'tel' => 'required|string|max:10|min:10', // Exemple de règle de validation pour l'attribut 'tel'
            'fax' => 'required|string|max:10|min:10', // Exemple de règle de validation pour l'attribut 'fax', autorisant la valeur NULL
            'ville_id' => 'required|exists:villes,id', // Exemple de règle de validation pour l'attribut 'ville_id', vérifiant que l'ID existe dans la table 'villes'
        ];
    }
    public function messages(): array
    {
        return [
            'etablissement.required' => 'Le champ établissement est requis.',
            'etablissement.string' => 'Le champ établissement doit être une chaîne de caractères.',
            'etablissement.max' => 'Le champ établissement ne peut pas dépasser :max caractères.',

            'code.required' => 'Le champ code est requis.',
            'code.string' => 'Le champ code doit être une chaîne de caractères.',
            'code.max' => 'Le champ code ne peut pas dépasser :max caractères.',
            'code.max' => 'Le champ code ne peut pas dépasser :max caractères.',

            'adresse.required' => 'Le champ adresse est requis.',
            'adresse.string' => 'Le champ adresse doit être une chaîne de caractères.',
            'adresse.max' => 'Le champ adresse ne peut pas dépasser :max caractères.',

            'tel.required' => 'Le champ téléphone est requis.',
            'tel.string' => 'Le champ téléphone doit être une chaîne de caractères.',
            'tel.max' => 'Le champ téléphone ne peut pas dépasser :max caractères.',
            'tel.min' => 'Le champ téléphone ne peut pas dépasser :min caractères.',

            'fax.string' => 'Le champ fax doit être une chaîne de caractères.',
            'fax.required' => 'Le champ fax est requis.',
            'fax.max' => 'Le champ fax ne peut pas dépasser :max caractères.',
            'fax.min' => 'Le champ fax ne peut pas dépasser :min caractères.',

            'ville_id.required' => 'Le champ ville est requis.',
            'ville_id.exists' => 'La ville sélectionnée est invalide.',
        ];
    }
}
