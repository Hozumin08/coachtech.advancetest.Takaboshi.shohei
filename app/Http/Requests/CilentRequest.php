<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CilentRequest extends FormRequest
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
            'familyname' => 'required',
            'firstname' => 'required',
            'gender' => 'numeric',
            'email' => 'required|email',
            'postcode' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'address' => 'required',
            'building_name' =>'nullable',
            'opinion' => 'required|max:120'
        ];
    }
    public function messages()
    {
        return[
            'familyname.required'=>'名字を入力してください',
            'firstname.required' =>'名前を入力してください',
            'gender.numeric'=>'性別を選んでください',
            'email.email'=>'適切なメールアドレスを入力してください',
            'postcode.regex:/^[0-9]{3}-[0-9]{4}$/'=>'郵便番号にはハイフンを入力してください',
            'address.required'=>'住所を入力してください',
            'opinion.max120'=>'ご意見は120文字以内で入力してください'
        ];
        dd($message);
    }
}
