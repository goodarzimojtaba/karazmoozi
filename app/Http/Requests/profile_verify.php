<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profile_verify extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['string','required'],
            'grade'=>['required'],
            'major'=>['required'],
            'mobile_father'=>['required','numeric','digits:11'],
            'mobile_mother'=>['required','numeric','digits:11'],
        ];
    }
    public function mesaages(){
        return[
            'name.required'=>'نام و نام خانوادگی خود را وارد نکردید',
            'grade.required'=>'پایه تحصیلی خود را وارد نکردید',
            'major.required'=>'پایه تحصیلی خود را وارد نکردید',
            'mobile_father.required'=>'موبایل پدر را وارد نکردید',
            'mobile_mother.required'=>'موبایل مادر را وارد نکردید',
            'mobile_father.digits'=>'فرمت شماره موبایل صحیح نیست',
            'mobile_mother.digits'=>'فرمت شماره موبایل صحیح نیست',

        ];
    }
}
