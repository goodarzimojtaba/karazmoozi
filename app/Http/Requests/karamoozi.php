<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class karamoozi extends FormRequest
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
            'area'=>['required','string'],
            'karamoozi_name'=>['required','string'],
            'karamoozi_address'=>['required','string'],
            'karamoozi_post'=>['required','numeric','digits:10'],
            'karfarma'=>['required','string'],
        ];
    }
    public function messages()
    {
        return [
            'area.required' => 'وارد کردن منطقه الزامی است.',
            'area.string' => 'منطقه باید به صورت متن وارد شود.',
    
            'karamoozi_name.required' => 'وارد کردن نام محل کارآموزی الزامی است.',
            'karamoozi_name.string' => 'نام محل کارآموزی باید به صورت متن وارد شود.',
    
            'karamoozi_address.required' => 'وارد کردن آدرس محل کارآموزی الزامی است.',
            'karamoozi_address.string' => 'آدرس محل کارآموزی باید به صورت متن باشد.',
    
            'karamoozi_post.required' => 'وارد کردن کد پستی الزامی است.',
            'karamoozi_post.numeric' => 'کد پستی باید فقط شامل عدد باشد.',
            'karamoozi_post.digits' => 'کد پستی باید دقیقاً ۱۰ رقم باشد.',
    
            'karfarma.required' => 'وارد کردن نام کارفرما الزامی است.',
            'karfarma.string' => 'نام کارفرما باید به صورت متن وارد شود.',
        ];
    }
    
}
