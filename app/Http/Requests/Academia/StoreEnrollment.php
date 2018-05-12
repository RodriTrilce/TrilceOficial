<?php

namespace App\Http\Requests\Academia;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnrollment extends FormRequest
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
                  'step2_names' => 'required|min:3'
        ];
    }

    public function attributes()
    {
        return [
          'step2_names' => 'Paso 2: Nombres y apellidos',
          'step2_address' => 'Paso 2: Dirección',
          'step2_phonehome' => 'Paso 2: Número de casa',
          'step2_mobile' => 'Paso 2: Número celular',
          'step2_email' => 'Paso 2: E-mail',
          'step2_yearpostulate' => 'Paso 2: Año que postulo',
          'step2_school' => 'Paso 2: Escuela',
          'step2_universitypostulate' => 'Paso 2: Universidad a la que postulo',
          'step2_profession' => 'Paso 2: Profesión',
          'step2_oldacademy' => 'Paso 2: Academia anterior',
          'step3_apoderate' => 'Paso 3: Apoderado',
          'step3_names' => 'Paso 3: Nombres y apellidos',
          'step3_dni' => 'Paso 3: DNI',
          'step3_phonehome' => 'Paso 3: Número de casa',
          'step3_mobile' => 'Paso 3: Número de celular',
          'step3_address' => 'Paso 3: Dirección',
          'step3_email' => 'Paso 3: E-mail',
          'step3_work' => 'Paso 3: Lugar de trabajo',
          'step3_profession' => 'Paso 3: Ocupación',
          'step3_emergencyphone' => 'Paso 3: Número de emergencia',
          'checkbox' => 'Paso 3: Confirmación',
          'g-recaptcha-response' => 'Paso 3: Capcha'
        ];
    }
}
