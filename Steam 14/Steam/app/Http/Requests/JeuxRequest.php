<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JeuxRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
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
            'nom' => 'required',
            'dateDepot'=>'required|date',
            'Resumer'=>'required',
            'video'=>'required|Active_URL',
            'image'=>'required|image|mimes:png,jpeg,jpg,gif|max:4096',
            'nbVersion'=>'required',
            'professeur_id'=>'required',
            'equipe_id'=>'required',
            
        ];
    }

    public function messages()
    {
        return [
            'nom' => 'Entrer le nom',
            'dateDepot'=>'entrer la date de dépot du jeu',
            'Resumer'=>'Entrer la description du jeu ',
            'video'=>'Entrer un lien valide pour une vidéo démo',
            'image.mimes'=>'Le type de fichier n\'est pas reconnu(png, jpg, gif).',
            'image.image'=>'ce n\'est pas une image',
            'image'=>'Le lien est requis',
            'image.max'=>'La taille de l\'image ne peut pas dépasser 4096Kb.',
            'nbVersion'=>'Entrer le nombre de version du jeu',
            'professeur_id'=>'sélectionner le nom du professeur qui dépose le jeu',
            'equipe_id'=>'Selectionner une équipe',
        ];
    }
}
