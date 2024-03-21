<?php

namespace App\Http\Requests;
use Illuminate\Support\Str;

use Illuminate\Foundation\Http\FormRequest;

class TestFilterRequest extends FormRequest
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
        return [
            // "test"=> ['required','min:4'],
            // "slug"=> ["required","regex:/^[a-z0-9\-]+$/"],
        ];
    }
    public function prepareForValidation(){
        $this->merge([
            // 'slug'=> 'aze-aze',
            // 'slug'=> $this->input('slug') ?: Str::slug($this->input('test'))
        ]);
    }
}
