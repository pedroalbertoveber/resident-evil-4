<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SingUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['email', 'required'],
            'password' => ['required', 'min:5', 'max:255', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Your name is required!',
            'name.min' => 'Your name must be at least :min characters!',
            'email.required' => 'Your e-mail is required!',
            'email.email' => 'Your e-mail must be formated as an e-mail address!',
            'password.required' => 'Your password is required!',
            'password.min' => 'Your password must be at least :min characters!',
        ];
    }
}
