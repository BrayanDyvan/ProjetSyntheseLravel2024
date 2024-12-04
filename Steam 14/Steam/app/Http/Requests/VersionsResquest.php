<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VersionsResquest extends FormRequest
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
            'lien'=>'required|Active_URL',
            'qualiteVersion'=>'required',
            'jeu_id'=>'required',
        ];
    }
    public function messages()
    {
        return [
            
            'nom'=>'le nom de la version  est requise',
            'lien'=>'Le lien de l\' image est requi',
            'qualiteVersion'=>'La qualité de la version est requise',
            'jeu_id'=>'le jeu est requis',
        ];
    }
}
