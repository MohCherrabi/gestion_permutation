<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermutationRequest extends FormRequest
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
            'date' => 'required|date', // Exemple de règle de validation pour l'attribut 'date', qui spécifie que la date est requise et doit être une date valide
            'ville_id' => 'required|exists:villes,id', // Exemple de règle de validation pour l'attribut 'ville_id', vérifiant que l'ID existe dans la table 'villes'
            'formateur_id' => 'required|exists:formateurs,id', // Exemple de règle de validation pour l'attribut 'formateur_id', vérifiant que l'ID existe dans la table 'formateurs'
            'valide' => 'required', // Exemple de règle de validation pour l'attribut 'valide', spécifiant que la valeur doit être soit true soit false
        ];
    }
    public function messages(): array
    {
        return [
            'date.required' => 'Le champ date est requis.',
            'date.date' => 'Le champ date doit être une date valide.',

            'ville_id.required' => 'Le champ ville est requis.',
            'ville_id.exists' => 'La ville sélectionnée est invalide.',

            'formateur_id.required' => 'Le champ formateur est requis.',
            'formateur_id.exists' => 'Le formateur sélectionné est invalide.',

            'valide.required' => 'Le champ valide est requis.',
        ];
    }
}
