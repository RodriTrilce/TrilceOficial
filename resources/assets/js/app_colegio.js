/*!
 * App.js v0.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

import { Validation } from 'bunnyjs/src/Validation';
import { tns } from 'tiny-slider/src/tiny-slider';
import { Tabs } from './require/tabs';
import VanillaModal from 'vanilla-modal';
import SliderTrilce from './require/slider_trilce';
import AcorditionProposal from './colegio/educational_proposal';
import pollyfill from 'array-from-polyfill';
import BadgerAccordion from './require/badger_accordion';
//import BadgerAccordion from 'badger-accordion';


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
String.prototype.capitalize = function(){
   return this.replace(/\b(\w+)/g, (m,p) => p[0].toUpperCase() + p.substr(1).toLowerCase());
}
//document.addEventListener('touchstart', function() {},false);
window.UID = {
  _current: 0,
  getNew: function(){
    this._current++;
    return this._current;
  }
};
HTMLElement.prototype.pseudoStyle = function(element,prop,value){
  var _this = this;
  var _sheetId = "pseudoStyles";
  var _head = document.head || document.getElementsByTagName('head')[0];
  var _sheet = document.getElementById(_sheetId) || document.createElement('style');
  _sheet.id = _sheetId;
  var className = "pseudoStyle" + window.UID.getNew();

  _this.className +=  " "+className;

  _sheet.innerHTML += "\n."+className+":"+element+"{"+prop+":"+value+"}";
  _head.appendChild(_sheet);
  return this;
};


/**!
 *  Index
 */
if(page == 'index'){
 var slider = tns({
   container: '.index-banners',
   items: 1,
   slideBy: 'page',
   autoplay: true,
   autoplayButtonOutput: false,
   touch: true,
   mouseDrag: true,
   controls: false,
   nav: true,
   autoplayHoverPause: true,
   loop: true,
   arrowKeys: true,
   speed: 700
 });
 //    controlsText: ['&#xf111;','&#xf112;'],

 SliderTrilce.init(slider);

/*
 setTimeout(function(){
   document.body.className += ' loaded'
 }, 1000)
*/
}

/**!
*  Contact
*/
if(page == 'contact'){
  Validation.init(document.forms[0], true);
}

/**!
*  Blog post
*/
if(page == 'blog_post'){
  var slider = tns({
   container: '#blog-banners',
   items: 1,
   slideBy: 'page',
   autoplay: true,
   autoplayButtonOutput: false,
   touch: true,
   mouseDrag: true,
   controls: true,
   controlsText: ['&#xf111;','&#xf112;'],
   nav: false,
   autoplayHoverPause: true,
   loop: true
  });

  //backgroundEffect.init();
}

/**!
 *  Propuesta educativa
 */
if(page == 'educational_proposal'){
  var tabs = new Tabs({
    elem: 'tabs_educational_propuse',
    open: 0
  });

  AcorditionProposal.init();
  tabs.init();

  var modal = new VanillaModal();
  if(modal_open.length){
    modal.open(modal_open[0]);
  }

  // video play
  var v = document.getElementById("proposal"),
      play = document.querySelector(".bt-play"),
      c = document.querySelector(".educationalproposal__video-bg");
  v.addEventListener("ended", function(){
    v.play();
    v.pause();
    c.style.display = "block";
    play.style.display = "flex";
  });
  play.addEventListener("click", function(){
    v.play();
    c.style.display = "none";
    play.style.display = "none";
  })

}

/**!
 *  Sede Colegio
 */
if(page == 'venue_colegio'){
  var content = document.querySelector('.venue-content-editable'),
      tables = content.querySelectorAll('table');

  [].forEach.call(tables, table => {
    let thead   = table.querySelector('thead'),
        ths     = thead.querySelectorAll('tr th'),
        tbody   = table.querySelector('tbody'),
        trs     = tbody.querySelectorAll('tr');

    [].forEach.call(trs, tr => {
      let tds = tr.querySelectorAll('td');

      [].forEach.call(tds, function(td, i){
        td.dataset.label = ths[i].textContent;
      });

    });

  });

}

/**!
*  Frecuent Questions
*/
if(page == 'frequent_questions'){
  const accordion1 = new BadgerAccordion('.js-badger-accordion_1'),
        accordion2 = new BadgerAccordion('.js-badger-accordion_2'),
        accordion3 = new BadgerAccordion('.js-badger-accordion_3'),
        tabs       = new Tabs({
          elem: 'tabs_frequent_questions',
          open: 0
        });

  tabs.events.on('render', info => {
   accordion1.open(0);
  });

  tabs.init();
}
