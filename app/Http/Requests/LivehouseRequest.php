<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivehouseRequest extends FormRequest
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
          "name" => "required",
          "email" => "required",
          "img" => "required",
          "province_id" => "required",
          "capacitie_type" => "required",
          "smoking_type" => "required",
          "test" => "required",
          "price" => "required",
          "img" => "image",
          "catchcopy" => "required",
          "homepage" => "required",
        ];
    }
}
