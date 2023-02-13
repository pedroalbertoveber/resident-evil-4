<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GunRequest extends FormRequest
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
            'type' => ['required', 'min:3', 'max:255'],
            'action' => ['required', 'min:3', 'max:255'],
            'ammunition' => ['required', 'min:3', 'max:255'],
            'fire_power' => ['required'],
            'fire_speed' => ['required'],
            'reload_speed' => ['required'],
            'capacity' => ['required'],
            'initial_price' => ['required'],
        ];
    }
}
