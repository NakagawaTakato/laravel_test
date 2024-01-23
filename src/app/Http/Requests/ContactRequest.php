<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            'name_one' => ['required', 'string', 'max:255'],
            'name_two' => ['required', 'string', 'max:255'],
            'sex_one' => ['required', 'string',  'max:255'],
            'sex_two' => ['required', 'string',  'max:255'],
            'sex_three' => ['required', 'string',  'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'tel_one' => ['required', 'string', 'max:255'],
            'tel_two' => ['required', 'string', 'max:255'],
            'tel_three' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'address_2' => ['required', 'string', 'max:255'],
            'kids' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:1000']
        ];
    }

    public function messages()
    {
        return [
            'name_one.required' => '名前を入力してください',
            'name_one.string' => '名前を文字列で入力してください',
            'name_one.max' => '名前を255文字以下で入力してください',
            'name_two.required' => '名前を入力してください',
            'name_two.string' => '名前を文字列で入力してください',
            'name_two.max' => '名前を255文字以下で入力してください',
            'sex_one.required' => '性別を入力してください',
            'sex_one.numeric' => '性別を文字列で入力してください',
            'sex_one.digits_between' => '性別を255文字以下で入力してください',
            'sex_two.required' => '性別を入力してください',
            'sex_two.numeric' => '性別を文字列で入力してください',
            'sex_two.digits_between' => '性別を255文字以下で入力してください',
            'sex_three.required' => '性別を入力してください',
            'sex_three.numeric' => '性別を文字列で入力してください',
            'sex_three.digits_between' => '性別を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel_one.required' => '電話番号を入力してください',
            'tel_one.string' => '電話番号を文字列で入力してください',
            'tel_one.max' => '名前を255文字以下で入力してください',
            'tel_two.required' => '電話番号を入力してください',
            'tel_two.string' => '電話番号を文字列で入力してください',
            'tel_two.max' => '名前を255文字以下で入力してください',
            'tel_three.required' => '電話番号を入力してください',
            'tel_three.string' => '電話番号を文字列で入力してください',
            'tel_three.max' => '名前を255文字以下で入力してください',
            'address.required' => '住所を入力してください',
            'address.numeric' => '住所を文字列で入力してください',
            'address.digits_between' => '住所を255文字以下で入力してください',
            'address_2.required' => '建物名を入力してください',
            'address_2.numeric' => '建物名を文字列で入力してください',
            'address_2.digits_between' => '建物名を255文字以下で入力してください',
            'kids.required' => '種類を入力してください',
            'kids.numeric' => '種類を数値で入力してください',
            'kids.digits_between' => '種類を255文字以下で入力してください',
            'content.required' => '内容を入力してください',
            'content.numeric' => '内容を数値で入力してください',
            'content.digits_between' => '内容を255文字以下で入力してください',
        ];
    }
}
