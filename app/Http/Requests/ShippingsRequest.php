<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingsRequest extends FormRequest
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
            'id' => 'required|exists:settings',
            'name' => 'required',
            'plan_value' => 'nullable|numeric'
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'طريقة التوصيل غير موجودة',
            'id.exists' => 'طريقة التوصيل غير موجودة',
            'name.required'=>'',
            'plan_value.numeric'=>'الحقل يقبل أرقام فقط',
        ];
    }
}
