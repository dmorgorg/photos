<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UploadFilePostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return
            // limit upload file size to 2Mb
            // 'fileInput'     => 'required|image|mimes:jpeg,png|min:1|max:2000',
            // 'countryInput'  => 'required',
            // 'dateInput'     => 'required|date',
            // 'tagging'       => 'required'
        ];
    }
}
