<?php

namespace App\Http\Requests\Doctor;

use App\Models\Specialist;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'bail',
                'required',
                'string',
            ],
            'birth_date' => [
                'required',
                'date',
                'before:today',
            ],
            'specialist_id' => [
                'required',
                Rule::exists(Specialist::class, 'id'),
            ],
            'avatar' => [
                'nullable',
                'file',
                'image',
            ],
            'email' => [
                'required',
                'string',
            ],
            'password' => [
                'required',
                'string',
                'min:0',
                'max:255',
            ],
            'phone' => [
                'required',
                'string',
            ],
            'gender' => [
                'required',
                'boolean',
            ],
            'nationality' => [
                'required',
                'string',
            ],
            'address' => [
                'required',
                'string',
            ],
            'degree' => [
                'required',
                'string',
            ],
            'experience' => [
                'required',
                'string',
            ],
            'price' => [
                'required',
                'numeric',
            ],

        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute bắt buộc phải điền',
            'unique' => ':attribute đã được dùng',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Tên bác sĩ',
        ];
    }
}
