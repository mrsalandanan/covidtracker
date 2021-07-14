<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateTaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'firstname' => [
                'required', 'string',
            ],
            'lastname' => [
                'required', 'string',
            ],
            'age' => [
                'required', 'string',
            ],
            'address' => [
                'required', 'string',
            ],
            'symptoms' => [
                'required', 'string',
            ],
            'vaccine' => [
                'required', 'string',
            ],
            'status' => [
                'required', 'string',
            ],
        ];
    }

    public function authorize()
    {
        return Gate::allows('task_access');
    }
}
