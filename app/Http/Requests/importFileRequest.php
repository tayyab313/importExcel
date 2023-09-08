<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class importFileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return [
            'excel_file' => 'required|file|mimes:csv', // Check for CSV or TXT files
        ];
    }

    public function messages()
    {
        return [
            'excel_file.required' => 'Please select a file to upload.',
            'excel_file.file' => 'The selected file is not valid.',
            'excel_file.mimes' => 'The :attribute must be a CSV file.',
        ];
    }

}
