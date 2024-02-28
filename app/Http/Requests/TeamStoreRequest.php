<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamStoreRequest extends FormRequest
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
            'jabatan' => ['nullable', 'max:255', 'string'],
            'text' => ['nullable', 'max:255', 'string'],
            'image' => ['nullable', 'image', 'max:1024'],
            'imgurl' => ['nullable', 'max:255', 'string'],
            'url' => ['nullable', 'url'],
            'file' => ['nullable', 'file'],
            'video' => ['nullable', 'max:255', 'string'],
        ];
    }
}
