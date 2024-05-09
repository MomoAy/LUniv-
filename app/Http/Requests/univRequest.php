<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class univRequest extends FormRequest
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
            "acronyme" => ["required", "string", "min:2", 'unique:universities'],
            "dateCreation" => ["required", "date"],
            "country" => ["required", "string"],
            "city" => ["required", "string"],
            "webSite" => ["required", "url", 'unique:universities'],
            "nbStudents" => ["required", "integer", "min:1"],
        ];
    }
}
