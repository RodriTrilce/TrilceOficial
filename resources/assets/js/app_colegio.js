/*!
 * App.js v0.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

// Imports
import { Validation } from 'bunnyjs/src/Validation';
import { tns } from 'tiny-slider/src/tiny-slider.module.js';

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

Element.prototype.remove = function() {
   this.parentElement.removeChild(this);
}

NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
   for(var i = this.length - 1; i >= 0; i--) {
       if(this[i] && this[i].parentElement) {
           this[i].parentElement.removeChild(this[i]);
       }
   }
}

NodeList.prototype.forEach = Array.prototype.forEach;

document.addEventListener('touchstart', function() {},false);

String.prototype.capitalize = function(){
   return this.replace(/\b(\w+)/g, (m,p) => p[0].toUpperCase() + p.substr(1).toLowerCase());
}

var show  = elem => elem.style.display = 'block';
var hide  = elem => elem.style.display = 'none';
var gid   = elem => document.getElementById(elem);

var get = (url) => {
  return new Promise((resolve, reject) => {
    var req = new XMLHttpRequest();
    req.open('GET', url);
    req.onload = () => {
      if (req.status == 200) {
        resolve(req.response);
      }else{
        reject(Error(req.statusText));
      }
    };
    req.onerror = () => reject(Error('Network Error'));
    req.send();
  });
}


/**!
 *  Index
 */
 (function(){
   if(page !== 'index') return false;

   // Slider
   var slider = tns({
     container: '.index-banners',
     items: 1,
     slideBy: 'page',
     autoplay: true,
     autoplayButtonOutput: false,
     touch: true,
     responsive: true,
     mouseDrag: true,
     controls: true,
     controlsText: ['&#xf111;','&#xf112;'],
     nav: false,
     autoplayHoverPause: true,
     loop: false
   });

  // Loader wrap
  window.onload = function()
  {
   setTimeout(function(){
     document.body.className += ' loaded'
   }, 1000)
  }

 })();

 /**!
  *  Contact
  */
(function(){
  if(page !== 'contact'){ return false;}
  Validation.init(document.forms[0], true);
})();
