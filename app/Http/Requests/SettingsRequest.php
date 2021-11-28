<?php

namespace App\Http\Requests;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
        $rules = RuleFactory::make([
            '%title%' => 'nullable | max:150 | string',
            '%description%' => 'nullable | string',
            '%keywords%' => 'string | nullable',
            '%author%' => 'string | nullable',
            'logo' => 'image | mimes:jpg,jpeg,png,svg | min:0 | max:3072',
            'favicon' => 'image | mimes:jpg,jpeg,png | min:0 | max:3072'
        ]);
        return $rules;
    }

}
