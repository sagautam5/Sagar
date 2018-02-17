<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessagePostRequest extends FormRequest
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
            //
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users,email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fname.required' => 'please provide your first name',
            'lname.required' => 'please provide your last name',
            'email.required' => 'please provide your email address',
            'email.unique' => 'email already exists',
            'email.email' => 'please add valid email address',
            'subject.required' => 'please add subject',
            'message.required' => 'please say something for us'
        ];
    }
}
