<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuruRequest extends FormRequest
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
            'nama' => 'required',
            'nip' => 'required',
            'jenisKelamin => required',
            'tempatLahir => required',
            'tanggalLahir => required',
            'nik => required',
            'agama => required',
            'alamat =>required'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Tidak Boleh Kosong!',
            'nip.required' => 'Nip Tidak Boleh Kosong!',
            'jenisKelamin.required' => 'jenisKelamin Tidak Boleh Kosong!',
            'tempatLahir.required' => 'tempatLahir Tidak Boleh Kosong!',
            'tanggalLahir.required' => 'tanggalLahir Tidak Boleh Kosong!',
            'nik.required' => 'nik Tidak Boleh Kosong!',
            'agama.required' => 'agama Tidak Boleh Kosong!',
            'alamat.required' => 'alamat Tidak Boleh Kosong!'
        ];
    }
}
