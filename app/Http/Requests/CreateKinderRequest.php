<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Kinder;

class CreateKinderRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return Kinder::$rules;
    }

    public function messages(){
        return [
            'name.required' => 'Ism-familiyangiz sohasi to\'ldirilishi kerak!',
            'email.required' => 'Emailingiz sohasi to\'ldirilishi kerak!',
            'phone.required' => 'Telefon nomeringiz sohasi to\'ldirilishi kerak!',
            'subject.required' => 'Mavzu sohasi to\'ldirilishi kerak!',
            'message.required' => 'Xabar sohasi to\'ldirilishi kerak!'
        ];
    }
}
