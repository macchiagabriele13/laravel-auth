<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|unique:projects,title|min:3|max:100',
            'cover_image' => 'nullable|image|max:4000',
            'difficulty' => 'required',
            'languages' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'il titolo e` richiesto',
            'title.unique' => 'il titolo deve essere univoco',
            'title.min' => 'il titolo deve contenere almeno :min caratteri',
            'title.max' => 'il titolo puo` contenere massimo :max caratteri',
            'languages.required' => 'il linguaggio e` richiesto',
            'difficulty.required' => 'la difficoltÃ  e` richiesta',
        ];
    }
}
