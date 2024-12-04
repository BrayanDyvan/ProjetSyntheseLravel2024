<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesResquest extends FormRequest
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
            'jeu_id'=>'required',
            'categorie_id'=>'required',
        ];
    }


    public function messages()
    {
        return [
            
            'jeu_id'=>'le jeu est requi',
            'categorie_id'=>'La catégorie du jeu est requise',
        ];
    }
}
