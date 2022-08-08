<?php
namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
'nickname' => 'required',
'email'    =>  'required', Rule::unique('users')->ignore(auth()->id()),
'password' => 'min:8|confirmed',
'phone_number' => 'required',
];
}
}