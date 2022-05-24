<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductSearchRequest extends FormRequest
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
            'title' => 'string|nullable',
            'type' => 'string|nullable',
            'hasWheels' => 'integer|nullable',
            'wheels' => 'integer|nullable',
            'color' => 'string|nullable',
            'sort' => 'nullable|in:asc,desc'
        ];
    }
}
