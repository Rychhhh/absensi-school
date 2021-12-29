<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreUpdateProfile extends FormRequest
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
            "nis" => "required|string",
            "name" => "required|string",
            "rombel" => "required|string",
            "rayon" => "required|string",
        ];
    }

    public function message()
    {
        return [
            '*.required' => 'Kolom wajib diisi',
        ];
    }
}
