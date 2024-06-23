<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormateurRequest extends FormRequest
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
            'matricule' => 'required|integer', // Exemple de règle de validation pour l'attribut 'matricule', assurant qu'il est unique dans la table 'formateurs'
            'nom' => 'required|string|max:255', // Exemple de règle de validation pour l'attribut 'nom'
            'prenom' => 'required|string|max:255', // Exemple de règle de validation pour l'attribut 'prenom'
            // 'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Exemple de règle de validation pour l'attribut 'photo', autorisant les fichiers image avec une taille maximale de 2 Mo
            'grade' => 'required|string|max:255', // Exemple de règle de validation pour l'attribut 'grade'
            'date_naissance' => 'required|date', // Exemple de règle de validation pour l'attribut 'date_naissance'
            'date_recrutement' => 'required|date', // Exemple de règle de validation pour l'attribut 'date_recrutement'
            'poste' => 'required|string|max:255', // Exemple de règle de validation pour l'attribut 'poste'
            'tel' => 'required|string|max:10|min:10', // Exemple de règle de validation pour l'attribut 'tel'
            'email' => 'required|email|max:255', // Exemple de règle de validation pour l'attribut 'email', assurant qu'il est unique dans la table 'formateurs'
            'password' => 'required|string|min:8', // Exemple de règle de validation pour l'attribut 'password', exigeant une longueur minimale de 8 caractères
            'etablissement_id' => 'required|exists:etablissements,id', // Exemple de règle de validation pour l'attribut 'etablissement_id', vérifiant que l'ID existe dans la table 'etablissements'
            'metier_id' => 'required|exists:metiers,id', // Exemple de règle de validation pour l'attribut 'metier_id', vérifiant que l'ID existe dans la table 'metiers'
        ];
    }
    public function messages(): array
{
    return [
        // Messages personnalisés pour les règles de validation restantes
        'prenom.required' => 'Le champ prénom est requis.',
        'prenom.string' => 'Le champ prénom doit être une chaîne de caractères.',
        'prenom.max' => 'Le champ prénom ne peut pas dépasser :max caractères.',

        'matricule.required' => 'Le champ matricule est requis.',
        'matricule.integer' => 'Le champ matricule doit être un entier.',
        'matricule.unique' => 'Le matricule spécifié est déjà utilisé.',

        'nom.required' => 'Le champ nom est requis.',
        'nom.string' => 'Le champ nom doit être une chaîne de caractères.',
        'nom.max' => 'Le champ nom ne peut pas dépasser :max caractères.',


        // 'photo.image' => 'Le fichier photo doit être une image.',
        // 'photo.mimes' => 'Le fichier photo doit être au format :values.',
        // 'photo.max' => 'La taille du fichier photo ne peut pas dépasser :max kilo-octets.',

        'grade.required' => 'Le champ grade est requis.',
        'grade.string' => 'Le champ grade doit être une chaîne de caractères.',
        'grade.max' => 'Le champ grade ne peut pas dépasser :max caractères.',

        'date_naissance.required' => 'Le champ date de naissance est requis.',
        'date_naissance.date' => 'Le champ date de naissance doit être une date valide.',

        'date_recrutement.required' => 'Le champ date de recrutement est requis.',
        'date_recrutement.date' => 'Le champ date de recrutement doit être une date valide.',

        'poste.required' => 'Le champ poste est requis.',
        'poste.string' => 'Le champ poste doit être une chaîne de caractères.',
        'poste.max' => 'Le champ poste ne peut pas dépasser :max caractères.',

        'tel.required' => 'Le champ téléphone est requis.',
        'tel.string' => 'Le champ téléphone doit être une chaîne de caractères.',
        'tel.max' => 'Le champ téléphone ne peut pas dépasser :max caractères.',
        'tel.min' => 'Le champ téléphone ne peut pas dépasser :min caractères.',

        'email.required' => 'Le champ email est requis.',
        'email.email' => 'Le champ email doit être une adresse email valide.',
        'email.unique' => 'Cette adresse email est déjà utilisée par un autre employé.',

        'password.required' => 'Le champ mot de passe est requis.',
        'password.string' => 'Le champ mot de passe doit être une chaîne de caractères.',
        'password.min' => 'Le mot de passe doit comporter au moins :min caractères.',

        'etablissement_id.required' => 'Le champ établissement est requis.',
        'etablissement_id.exists' => 'L\'établissement sélectionné est invalide.',

        'metier_id.required' => 'Le champ métier est requis.',
        'metier_id.exists' => 'Le métier sélectionné est invalide.',
    ];
}

}
