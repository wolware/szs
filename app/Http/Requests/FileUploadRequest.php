<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileUploadRequest extends FormRequest
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
            'file' => 'mimetypes:image/jpeg,application/pdf,image/gif,image/png,application/vnd.openxmlformats-officedocument.wordprocessingml.document,'.
                'application/msword,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,image/svg+xml,'.
                'application/vnd.oasis.opendocument.spreadsheet,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ];
    }

    public function messages()
    {
        return [
            'files.*.mimes' => 'Tip podatka nije dozvoljen.',
        ];
    }
}
