<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
            'title' => 'required|max:550',
            'description'=> 'required|max:150',
            'category' => 'required|max:20',
            'author' => 'required|max:20'
        ];
    }

    public function messages(){
        return[
            'title.required'=>'il titolo deve esistere', 
            'title.max'=>'il titolo deve essere massimo di 14 caratteri', 
            'description.required'=>'la descrizione deve esistere', 
            'descriprion.max'=>'la descrizione deve masimo 20 caratteri',
            'category.required'=>'la categoria deve esistere', 
            'author.required'=>'l autore deve esistere',  
        ];
    }
}
