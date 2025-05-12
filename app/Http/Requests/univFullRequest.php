<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\University;

class univFullRequest extends FormRequest
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
            'acronyme'=> ['required', 'string'],
            'name' => ['string', 'required'],
            'dateCreation' => ['required', 'date'],
            'description' => ['string', 'required'],
            'address' => ['string'],
            'country' => ['string'],
            'city' => ['string', 'required'],
            'webSite' => ['string', 'required'],
            'email' => ['string'],
            'contact' => ['string', 'required'],
            'contact2' => ['string', 'nullable'],
            'nbStudents' => ['integer', 'required'],
            'percentageIntegration' => ['required']
        ];
    }
}
