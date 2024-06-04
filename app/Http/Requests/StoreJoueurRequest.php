<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJoueurRequest extends FormRequest
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
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_de_naissance' => 'nullable|date',
            'poste' => 'required|string',
            'numero' => 'required|integer|between:1,99',
            'image' => 'image|max:8000|nullable'

        ];
    }
}
