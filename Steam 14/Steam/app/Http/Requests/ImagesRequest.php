<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImagesRequest extends FormRequest
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
            'lien'=>'required|image|mimes:png,jpeg,jpg,gif|max:4096',
            'jeu_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            
            'nom'=>'le nom de la version  est requise',
            'lien'=>'Le lien est requis',
            'lien.mimes'=>'Le type de fichier n\'est pas reconnu(png, jpg, gif).',
            'lien.image'=>'ce n\'est pas une image',
            'lien.max'=>'La taille de l\'image ne peut pas dépasser 4096Kb.',

            'jeu_id'=>'le jeu est requis',
        ];
    }
}
