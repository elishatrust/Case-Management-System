<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class ClientRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => ['required','string'],
            'email' => ['required','string','email','max:255'],
            'phone' => ['required','integer','max:10'],
            'address' => ['required','string'],
        ];
    }
}
