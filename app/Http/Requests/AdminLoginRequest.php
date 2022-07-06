<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:8'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'يجب إدخال البريد الإلكترونى',
            'email.email'=>' صيغة البريد الإلكترونى غير صحيحة info@gmail.com',
            'password.required'=>'يجب إدخال كلمة المرور',
            'password.min'=>'يجب ألا يقل عدد حروف كلمة المرور عن 8 أحرف'
        ];
    }
}
