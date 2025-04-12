<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class login extends FormRequest
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
           'code_melli'=>['numeric','required'],
           'birth'=>['numeric','digits:6','required']
        ];
    }
    public function messages(){
        return[
            'code_melli.required'=>'کد ملی را وارد نکردید!',
            'birth.required'=>'سال تولد خود را وارد نکردید',
            'birth.digits'=>'سال تولد را بصورت 6 رقمی وارد نمایید',
        ];
    }
}
