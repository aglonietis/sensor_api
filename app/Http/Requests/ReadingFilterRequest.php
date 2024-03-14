<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ReadingFilterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'sensor_id' => 'nullable|string|min:1|max:36',
            'from' => 'nullable|date|date_format:Y-m-d H:i:s.u',
            'to' => 'nullable|date|date_format:Y-m-d H:i:s.u'
        ];
    }
}
