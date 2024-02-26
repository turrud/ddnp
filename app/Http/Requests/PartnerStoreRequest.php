<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerStoreRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'max:255', 'string'],
            'text' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
            'imgurl' => ['nullable', 'max:255', 'string'],
            'file' => ['nullable', 'file'],
            'video' => ['nullable', 'max:255', 'string'],
        ];
    }
}
