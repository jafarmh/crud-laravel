<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
 

class CustomerEditRequest extends FormRequest
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

        $regexBankCardNumber = '/^(^[5|6]\d{3})-(\d{4})-(\d{4})-(\d{4})$/';

        return [
            "PhoneNumber"=>'sometimes|required|phone:IR',
            "Firstname"=>"required|string|min:3",
            "Lastname"=>"required|string|min:3",
            "email"=>"sometimes|required|email|unique:customers,email",
            "DateOfBirth"=>"sometimes|required|date",
            "BankAccountNumber"=>"sometimes|required|string",
            //"BankAccountNumber"=>"sometimes|required|string|regex:$regexBankCardNumber",
            
 
        ];
    }
}
