/*!
 * App.js v0.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

// Imports
import { Validation } from 'bunnyjs/src/Validation';
import { tns } from 'tiny-slider/src/tiny-slider';
import {Tabs} from './require/tabs';
import VanillaModal from 'vanilla-modal';

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
   if(page == 'index'){
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

   }

  // Loader wrap
 setTimeout(function(){
   document.body.className += ' loaded'
 }, 1000)

 })();

 /**!
  *  Contact
  */
(function(){
  if(page !== 'contact'){ return false;}
  Validation.init(document.forms[0], true);
})();



if(page == 'blog_post'){
  var slider = tns({
   container: '#blog-banners',
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

  var backgroundEffect = {
    init : function(){
      setInterval(this.hearSelector.bind(this), 1);
    },

    hearSelector : function(){
      this.active = document.querySelector('.tns-slide-active');
      this.changeBackground();
    },

    changeBackground : function(){
      var image = this.active.getElementsByTagName('img'),
          image = image[0].src;

      document.querySelector('.background-image').style.background = `url('${image}')`;
    }
  }

  //backgroundEffect.init();
}

if(page == 'educational_proposal'){
  var tabs = new Tabs({
    elem: "tabs_educational_propuse",
    open: 0
  });

  const acorditionProposal = {
    init : function(){
      this.clickeable  = document.querySelector('.acordition-title');
      this.acordeable  = document.querySelector('.js-tabs__header');
      this.state       = false;
      this.icon        = document.querySelector('#tabs_educational_propuse_icon');

      this.fire        = false;
      this.hear();
    },

    hear : function(){
      setInterval(function(){
        if(window.getComputedStyle(this.clickeable).getPropertyValue('display') !== 'none'){
          if(!this.fire){
            this.height = '366px';
            this.hearClick();
            this.hearListClick();
            this.fire = true;
          }
        }
      }.bind(this), 100);
    },

    hearClick : function(){
      this.clickeable.addEventListener('click', function(){
        if(this.state)
          this.open();
        else
          this.close();
      }.bind(this));
    },

    hearListClick : function(){
      let elems = document.querySelectorAll('.js-tabs__title');

      [].forEach.call(elems, elem => {
        elem.addEventListener('click', click => {
          if(window.getComputedStyle(this.clickeable).getPropertyValue('display') === 'none') return false;
          this.close()
        });
      })
    },

    open : function(){
      this.state = false;
      this.acordeable.style.height = this.height;
      this.icon.classList.remove('fa-plus-square');
      this.icon.classList.add('fa-minus-square');
    },

    close : function(){
      this.state = true;
      this.acordeable.style.height = '0px';
      this.icon.classList.remove('fa-minus-square');
      this.icon.classList.add('fa-plus-square');
    }
  }

  acorditionProposal.init();

  var modal = new VanillaModal();

  if(modal_open.length){
    modal.open(modal_open[0]);
  }

}


if(page == 'venue_colegio'){
  var content = document.querySelector('.venue-content-editable');
  var tables = content.querySelectorAll('table');

  [].forEach.call(tables, table => {
    let thead   = table.querySelector('thead');
    let ths     = thead.querySelectorAll('tr th');
    let tbody   = table.querySelector('tbody');
    let trs     = tbody.querySelectorAll('tr');

    [].forEach.call(trs, tr => {
      let tds = tr.querySelectorAll('td');

      [].forEach.call(tds, function(td, i){
        td.dataset.label = ths[i].textContent;
      });

    });

  });

}
