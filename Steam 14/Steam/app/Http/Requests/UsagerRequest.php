<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
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
            'nom'=>'required',
            'prenom'=>'required',
            'avatar'=>'required',
            'matricule'=>'required',
            'professeur_id'=>'required',
            'equipe_id'=>'required',
          'email'=>'required',
          'password'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'nom'=>'le nom est requis',
            'prenom'=>'le prénom est requis',
            'matricule'=>'le matricule est requis',
            'avatar'=>'l\'avatar est requis',
            'email'=>'l\'email est requis',
            'password'=>'Le mot de passe est requis',
            'professeur_id'=>'sélectionner le nom du professeur qui enregistre l\'usager',
            'equipe_id'=>'Selectionner une équipe',
        ];
    }
}
