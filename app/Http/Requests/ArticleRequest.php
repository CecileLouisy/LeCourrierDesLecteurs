<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            "title"=>"required|between:3,100",
            "author"=>"required|between:3,30",
            "email"=>"required|max:500|email:rfc,dns",
            "age"=>"required|numeric|between:0,129",
            "zipcode"=>"required|size:5",
            "content"=>"required|min:10",
        ];
    }
//OK Aucun champ ne doit être plus long que ce qui est prévu dans la base de données
//OK Le titre et le nom de l'auteur doivent contenir au moins 3 caractères
//OK L'email doit avoir une forme valide
//OK L'age est une valeur numérique positive et inférieure à 130 ans
//OK Le code postal a une longueur de 5 caractères
//OK Le contenu du courrier comporte au moins 10 caractères
    
    public function messages () {
        return [
            "title.required"=>"Veuillez renseigner le titre de l'article.",
            "title.between"=>"Le titre doit contenir entre 3 et 100 caractères",
            "author.required"=>"Veuillez renseigner votre nom.",
            "author.between"=>"Votre nom doit contenir entre 3 et 30 caractères",
            "email.required"=>"Veuillez renseigner votre email.",
            "email.max"=>"Votre email doit contenir au maximum 500 caractères",
            "email.email"=>"La forme de votre email est invalide",
            "age.required"=>"Veuillez renseigner votre âge.",
            "age.numeric"=>"Veuillez entrer des chiffres.",
            "age.between"=>"Votre âge doit être compris entre 0 et 129 ans.",
            "zipcode.required"=>"Veuillez renseigner votre code postal.",
            "zipcode.size"=>"Le code postal doit contenir 5 caractères",
            "content.required"=>"Veuillez ajouter du contenu à cet article.",
            "content.min"=>"Le contenu de l'article doit comporter au minimum 10 caractères"
        ];
    }
}
