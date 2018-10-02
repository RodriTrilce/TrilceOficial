/*!
 * App.js v1.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

 //import 'datalist-polyfill/datalist-polyfill'
import { Validation } from 'bunnyjs/src/Validation';
import { tns } from 'tiny-slider/src/tiny-slider'
import { Tabs } from './require/tabs';
import pollyfill from 'array-from-polyfill';
import VanillaModal from 'vanilla-modal';
import SlimSelect from 'slim-select'
import BadgerAccordion from './require/badger_accordion';
import SliderTrilce from './require/slider_trilce';
import Enrollment from './academia/enrollment';
import Preparation from './academia/preparation';
import backgroundEffect from './academia/blog';
import AcorditionProposal from './colegio/educational_proposal';



window.SlimSelect = SlimSelect;
window.UID        = {
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


/**!
 *  Index
 */
 if(page == 'index'){
  setTimeout(function(){
    document.body.className += ' loaded';
  }, 1000);

  var modal = new VanillaModal();
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
    loop: true
  });
  //    controlsText: ['&#xf111;','&#xf112;'],

  SliderTrilce.init(slider);

  if(modal_open.length) modal.open(modal_open[0]);

 }

/**!
  * Preparation
  */
  if(page == 'preparation'){
    var init_preparation = new Preparation();
    init_preparation.init();
  }

/**!
 *  Enrollment
 */
  if(page == 'enrollment'){
    let enrolment = new Enrollment('next', 'prev', 'enrollment-form', 'flex');
    enrolment.init();

    document.querySelector("#termsActive").addEventListener('click', () => {
      document.querySelector("#terms").style.display = 'block';
    });
  }

/**!
 *  Contact
 */
  if(page == 'contact'){
    Validation.init(document.forms[0], true);
  }

/**!
 *  Blog
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

    //backgroundEffect.init(slider);
  }

/**!
 *  Math Olympics
 */
 if(page == 'math_olympics'){
   const accordion1  = new BadgerAccordion('.js-badger-accordion_1'),
         accordion2 = new BadgerAccordion('.js-badger-accordion_2'),
         tabs       = new Tabs({
           elem: 'om__tabs',
           open: 0
         });

   tabs.init();
 }

/**!
 *  Frecuent Questions
 */
 if(page == 'frequent_questions'){
   const accordion1 = new BadgerAccordion('.js-badger-accordion_1'),
         accordion2 = new BadgerAccordion('.js-badger-accordion_2'),
         accordion3 = new BadgerAccordion('.js-badger-accordion_3'),
         accordion4 = new BadgerAccordion('.js-badger-accordion_4'),
         tabs       = new Tabs({
           elem: 'tabs_frequent_questions',
           open: 0
         });

   tabs.events.on('render', info => {
     accordion1.open(0);
   });

   tabs.init();
 }
