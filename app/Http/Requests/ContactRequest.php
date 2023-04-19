<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
                'name' => 'required',
                'email' => 'required|email',
                'theme' => 'required|max:50',
                'message' => 'required|max:500'
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Поле Имя является обязательным',
            'email.required' => 'Поле Email является обязательным',
            'email.email' => 'Введите корректный Email',
            'theme.required' => 'Поле Тема является обязательным',
            'message.required' => 'Поле Сообщение является обязательным',
        ];
    }
}
