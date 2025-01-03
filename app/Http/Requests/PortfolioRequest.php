<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'photo.*' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'title.*' => 'nullable|string',
            'headline.*' => 'nullable|string',
            'description.*' => 'nullable|string',
            'id.*' => 'nullable|integer',
            'project_link.*' => 'nullable|url'



        ];


    }
}
