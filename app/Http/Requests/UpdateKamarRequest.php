<?php

namespace App\Http\Requests;

use App\Models\Kamar;
use Illuminate\Foundation\Http\FormRequest;

class UpdateKamarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tipe_kamar' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tipe_kamar.required' => 'Tipe Kamar Tidak Boleh Kosong!'
        ];
    }
}
