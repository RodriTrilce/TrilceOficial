/*!
 * Enrollment.js v0.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */
 
// Imports

const ValidationLang = {
  required: "'{label}' es obligatorio.",
  email: "'{label}' debe ser una dirección de e-mail valida.",
  maxLength: "'{label}' debe tener maximo {maxLength} digitos.",
  minLength: "'{label}' debe tener minimo {minLength} digitos.",
  tel: "{label} debe ser un número telefónico.",
  onlytext: "Solo es permitido texto",
  captcha: "Verfica el captcha"
};

const ValidationConfig = {
  classInputGroup: 'form-group',
  classInputGroupError: 'has-danger',
  classLabel: 'form-control-label',
  tagNameError: 'small',
  classError: 'text-help',
  selectorInput: '[name]'
};

Validation.ui.config  = ValidationConfig;
Validation.lang       = ValidationLang;

Validation.validators.captcha = input => {
  return new Promise((valid, invalid) => {
      if (input.getAttribute('type') === 'captcha') {
              if(input.value == 'valid'){
                valid();
              }else{
                invalid();
              }
      } else {
          valid();
      }
  });
};

Validation.validators.onlytext = input => {
  return new Promise((valid, invalid) => {
      if (input.value.length > 0 && input.getAttribute('type') === 'onlytext') {
          const Regex = /(^[a-zA-Z ]+$)/i;
          if (Regex.test(input.value)) {
              valid();
          } else {
              invalid();
          }
      } else {
          valid();
      }
  });
};