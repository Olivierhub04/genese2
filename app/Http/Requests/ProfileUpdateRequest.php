<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => [ 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'lname' => ['string', 'max:255'],
            'telephone' => ['integer', 'max:255'],
            'genre' => ['string', 'max:255'],
            'addresse' => ['string', 'max:255'],
            'cordonees' => ['string', 'max:255'],
            'ville' => ['string', 'max:255'],
            'etat' => ['string', 'max:255'],
            'site' => ['string', 'max:255'],
            'numero_de_tva' => ['string', 'max:255'],
            'statut_matrimonial' => ['string', 'max:255'],
        ];
    }
}
