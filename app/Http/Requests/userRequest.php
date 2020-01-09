<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'name'          => 'required',
            'email'         => 'required|email',
            'age'           => 'required|digits:2',
            'number'        => 'required|digits:10',
            'address'       => 'required',
            'password'      =>'required',
            'cf_password'   =>'same:password'


        ];
    }
    public function messages(){

        return [
            'name.required'     =>'ban chua nhap ten',
            'email.required'    =>'ban chua nhap email',
            'email.email'       =>'email khong dung dinh dang',
            'age.required'      =>'ban chua nhap tuoi',
            'number.required'   =>'ban chua nhap sdt',
            'age.digits'        =>'tuoi phai nho hon 99',
            'number.digits'     =>'sdt chi co 10 ',
            'address.required'  =>'ban chua nhap dia chi',
            'password.required' =>'ban chua nhap mat khau',
            'cf_password'       =>'nhap lai mat khau kong dung'

        ];
    }
}
