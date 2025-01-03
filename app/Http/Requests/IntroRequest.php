<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntroRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'experience' => 'nullable|integer|min:1',
            'complete_project' => 'nullable|integer|min:1',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg',
            'resume' => 'nullable|file|mimes:pdf|max:2048',
        ];
    }
}
