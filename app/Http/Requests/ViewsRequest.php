<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (auth()->user()->role == 'admin') {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ip' => 'required|string',
            'user_agent' => 'required|string',
            'video_id' => 'required|integer',
            'user_id' => 'nullable|integer',
        ];
    }
}
