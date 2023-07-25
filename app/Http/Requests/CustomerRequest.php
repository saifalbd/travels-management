<?php

namespace App\Http\Requests;

use App\Rules\BdPhone;
use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'=>['required','string'],
            'gender'=>['required','in:Male,Female'],
            'father_name'=>['required','string'],
            'mother_name'=>['required','string'],
            'date_of_birth'=>['required','date'],
            'mobile'=>['required','numeric',new BdPhone],
            'email'=>['nullable','email'],
            'nid'=>['required','string'],
            'passport'=>['required','string'],
            'present_address'=>['required','string'],
            'permanent_address'=>['required','string'],
            'package_id'=>['required','numeric'],
            'amount'=>['required','numeric'],
            'advance'=>['required','numeric'],
            'after_permit'=>['required','numeric'],
            'after_visa'=>['required','numeric'],
            'due'=>['required','numeric'],
            'ref'=>['nullable','string'],
            'ref_address'=>['nullable','string'],
            'ref_mobile'=>['nullable','string'],
            'photo'=>['nullable','image']

        ];
    }
}
