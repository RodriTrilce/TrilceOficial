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
          'step1_dni' => 'required',
          'step1_university' => 'required',
          'step1_venue' => 'required',
          'step1_cycle' => 'required',
          'step1_turn' => 'required',
          'step1_condition' => 'required',
          'step2_names' => 'required',
          'step2_district' => 'required',
          'step2_address' => 'required',
          'step2_phonehome' => 'required',
          'step2_mobile' => 'required',
          'step2_email' => 'required',
          'step2_yearpostulate' => 'required',
          'step2_school' => 'required',
          'step2_universitypostulate' => 'required',
          'step2_profession' => 'required',
          'step2_oldacademy' => 'required',
          'step3_apoderate' => 'required',
          'step3_names' => 'required',
          'step3_dni' => 'required',
          'step3_phonehome' => 'required',
          'step3_mobile' => 'required',
          'step3_email' => 'required',
          'step3_work_location' => 'required',
          'step3_work_phone' => 'required',
          'step3_profession' => 'required',
          'step3_emergencyphone' => 'required',
          'checkbox' => 'required',
          'g-recaptcha-response' => 'required|recaptcha'
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
          'step3_work_location' => 'Paso 3: Lugar de trabajo',
          'step3_work_location' => 'Paso 3: Teléfono lugar de trabajo',
          'step3_profession' => 'Paso 3: Ocupación',
          'step3_emergencyphone' => 'Paso 3: Número de emergencia',
          'checkbox' => 'Paso 3: Confirmación',
          'g-recaptcha-response' => 'Paso 3: Captcha'
        ];
    }
}
