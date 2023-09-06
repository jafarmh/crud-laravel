<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
 

class CustomerRequest extends FormRequest
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
            "PhoneNumber"=>'phone:IR',
            "Firstname"=>"required|string|min:3",
            "Lastname"=>"required|string|min:3",
            "email"=>"required|email|unique:customers,email",
            "DateOfBirth"=>"required|date",
            "BankAccountNumber"=>"required|string",
            //"BankAccountNumber"=>"required|string|regex:$regexBankCardNumber",
            
 
        ];
    }
}
