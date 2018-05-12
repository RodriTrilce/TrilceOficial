/*!
 * App.js v0.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */
 
 // Imports
 import { tns } from 'tiny-slider/src/tiny-slider.module'
 
export const ValidationLang = {
  required: "'{label}' es obligatorio.",
  email: "'{label}' debe ser una dirección de e-mail valida.",
  maxLength: "'{label}' debe tener maximo {maxLength} digitos.",
  minLength: "'{label}' debe tener minimo {minLength} digitos.",
  tel: "{label} debe ser un numero telefónico."
};

export const ValidationConfig = {
  classInputGroup: 'form-group',
  classInputGroupError: 'has-danger',
  classLabel: 'form-control-label',
  tagNameError: 'small',
  classError: 'text-help',
  selectorInput: '[name]'
};

import { Validation } from 'bunnyjs/src/Validation';
Validation.ui.config  = ValidationConfig;
Validation.lang       = ValidationLang;

Validation.lang.onlytext = 'Solo es permitido texto';

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

console.log(Validation);

/*

*/

 // Define methods utils
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
 
 // Safari fix hover touch
 document.addEventListener('touchstart', function() {},false);
 /*var supportsTouch = (typeof Touch == "object");
 if(supportsTouch){
 }
 */
 
 // capitalize frist letter upper
 String.prototype.capitalize = function(){
     return this.replace(/\b(\w+)/g, (m,p) => p[0].toUpperCase() + p.substr(1).toLowerCase());
 }

// Utils
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

function enrollment(nextBtn,prevBtn,form, type){
  this.currentTab   = 0;
  this.nextBtn      = nextBtn;
  this.prevBtn      = prevBtn;
  this.form         = form;
  this.blockType    = type;
  this.step1University;
  this.step1Venue;
  this.cost = [{
    one : {
      "pucp" : {
        "san isidro" : {
          "cost" : 100,
          "time" : 30
        },
        "los olivos" : {
          "cost" : 50,
          "time" : 15
        },
        "torrico" : {
          "cost" : 50,
          "time" : 15
        }
      },
      "uni" : {
        "all" : {
          "cost" : 50,
          "time" : 15
        }
      },
      "san marcos" : {
        "all" : {
          "cost" : 50,
          "time" : 15
        }
      }
    },
    nine : {
      "uni" : {
        "ciencia" : 12,
        "letras" : 15
      },
      "san marcos" : {
        "ciencia" : 12,
        "letras" : 15
      },
      "pucp" : {
        "ciencia" : 30,
        "letras" : 30,
      }
    }
  }];
  
  this.init = function(){
    Validation.init(document.forms[0], true);
    
    this.showTab(this.currentTab);
    this.hearUniversity();
    this.hearVenue();
    
    document.getElementById(this.prevBtn).addEventListener('click', (e) => this.nextPrev(-1,e));
    document.getElementById(this.nextBtn).addEventListener('click', (e) => this.nextPrev(1,e));;

  }
  
  this.hearUniversity = function(){
    var elem = document.querySelector('#step1_university');
    var select = document.getElementById('step1_venue');
    
    elem.addEventListener('change', () => {
      this.step1University = elem.options[elem.selectedIndex].value;
      this.cleanSelect(select, 'Sede');
      this.cleanSelect(document.getElementById('step1_cycle'), 'Ciclo');
      
      get(`/api/academia/enrollment/${this.step1University}`).then((response) => {
          response = JSON.parse(response).data;
          for(var k in response){
              let s = document.createElement('option');
              s.text = k.capitalize();
              s.value = response[k];
              select.add(s);
          }
      }, (error) => console.error('error', error));
      
    });
  }
  
  this.hearVenue = function(){
    let elem = document.querySelector('#step1_venue');
    const select = document.querySelector('#step1_cycle');
    elem.addEventListener('change' , () => {
      this.step1Venue = elem.options[elem.selectedIndex].value;
      
      this.cleanSelect(select, 'Ciclo');
      
      get(`/api/academia/enrollment/${this.step1University}/${this.step1Venue}`).then((response) => {
          response = JSON.parse(response).data;
          for(var k in response){
              let s = document.createElement('option');
              s.text = response[k].capitalize();
              s.value = k;
              select.add(s);
          }
      }, (error) => console.error('error', error));
    })
  }
  
  this.cleanSelect = function(select, title)
  {
    while (select.options.length) select.remove(0);
    let v = document.createElement('option');
    v.text = title;
    v.selected = true;
    v.disabled = true;
    v.hidden   = true;
    select.add(v);
    return select;
  }

  this.showTab = function(n)
  {
    if(this.currentTab == 2) this.drawTerms();
    var x = document.getElementsByClassName('tab');
    x[n].style.display = this.blockType;
    document.getElementById(this.prevBtn).style.display = (n==0?'none':'inline');
    document.getElementById(this.nextBtn).innerHTML = (n == (x.length - 1)?'Enviar':`Siguiente <i class="fa fa-angle-right"></i>`);
    this.fixStepIndicator(n);
  }
  
  this.drawTerms = function()
  {
    var term2  = document.getElementById('terms-2');
    var term21 = document.getElementById('terms-21');
    var term9  = document.getElementById('terms-9');
    var term9a = document.getElementById('terms-9-s');
    var term91 = document.getElementById('terms-91');
    
    var university = document.getElementById('step1_university');
    university = university.options[university.selectedIndex].text.toLowerCase();

    var route = this.cost[0].one[university];
    
    var routeNine = this.cost[0].nine[university];
    var sede = document.getElementById('step1_venue');
    
    sede = sede.options[sede.selectedIndex].text;
    sede = sede.toLowerCase();
    
    var time, cost, science, letter;
    if(Object.keys(route).length > 1){
      cost = route[sede].cost;
      time = route[sede].time;
    }else{
      cost = route.all.cost;
      time = route.all.time;
    }
    
    science = routeNine.ciencia;
    letter  = routeNine.letras;
    
    // Set
    term2.innerHTML = cost;
    term21.innerHTML = time;
    
    if(university !== 'pucp'){
      term9.style.display = 'inline-block';
      let b = term9a.options[term9a.selectedIndex].value;
      term91.innerHTML = '12';
      term9a.addEventListener('change', () => {
        let b = term9a.options[term9a.selectedIndex].value;
        term91.innerHTML = (b=='letras'?15:12);
      });
    }else{
      term9.style.display = 'none';
      term91.innerHTML = '30';
    }
    
  }

  this.nextPrev = function(n,e)
  {
    var x = document.getElementsByClassName('tab');
    var tb;
    
    switch (this.currentTab) {
      case 0:
        tb = '.tab1';
      break;

      case 1:
        tb = '.tab2';
      break;

      case 2:
        tb = '.tab3';
      break;
      
    }
    
    Validation.validateSection(document.querySelector(tb)).then((result,e) => {
      if(n === -1){
        x[this.currentTab].style.display = 'none';
        this.currentTab = this.currentTab +
         n;
        this.showTab(this.currentTab);
      }else{
        if (result === true) {
            x[this.currentTab].style.display = 'none';
            this.currentTab = this.currentTab + n;

            console.log("ajasjasj"+ this.currentTab + " ---- " + x.length);

            if (this.currentTab >= x.length) {
//              e.preventDefault();
              return false;
            }else{
              this.showTab(this.currentTab);
            }
        } else {
            Validation.focusInput(result[0]);
        }
      }
    });
    
  }

  this.fixStepIndicator = function(n) {
    let v = document.getElementById("steps-guide");
    let z = v.getElementsByTagName("div")
    
    Array.from(z).forEach(function(a,i){
      a.classList = a.classList.remove('active');
      if(i==n) a.classList.add('active');
      if(i<n) a.classList.add('visited');
      
    });
  }

}

/**!
 *  Index Slider
 */
 if(page == 'index'){
   var slider = tns({
     container: '.index-banners',
     items: 1,
     slideBy: 'page',
     autoplay: true,
     autoplayButtonOutput: false,
     touch: true,
     responsive: true,
     mouseDrag: true,
     controls: false,
     nav: true,
     autoplayHoverPause: true,
   //  lazyload: true
   });
 }


/**!
 *  Simulacrum: Formulario de registro
 */
~(($,_)=>{
  if(gid('f1_validate')){
    const step1 = gid('f1_validate');
    step1.addEventListener('click', ()=>{
      hide(gid('step1'));
      show(gid('step2'));

      gid('s2_dni').value = gid('s1_dni').value
      
    });
  }
})(document,window);

/**!
 *  Entering: Lista de cachimbos
 */
~(($) => {
  if(page !== 'entering') return false;

  function getEntering(university,year)
  {
    get(`/api/academia/entering/${university}/${year}`).then((response) => {
        response = JSON.parse(response).data;
        var bind = '';
        response.forEach((e,i) => {
          bind += `
          <div class="row col-xs-12">
            <div class="col-xs-1">${e.entering}</div>
            <div class="col-xs">${e.lastname}</div>
            <div class="col-xs">${e.lastname_second}</div>
            <div class="col-xs">${e.name}</div>
            <div class="col-xs-3">${e.profession}</div>
          </div>
          `
        });
        document.getElementById('entering').innerHTML = bind;
    }, (error) => {
      console.error("Failed!", error);
    })
  }
  
  var x = $.getElementById('year_list');
  var v = x.querySelectorAll('li');
  
  v.forEach(elem => {
    elem.addEventListener('click', () => {
      v.forEach(e => e.classList.remove('select'));
      elem.classList.add('select');
      getEntering(university, elem.getAttribute('data-year'));
    });

  });
  

  // Default
  getEntering(university, '2018');
  
})(document);

// Index
(() => {
  if(page !== 'index') return false;
  
  window.onload = function()
  {
    setTimeout(function(){
      document.body.className += ' loaded'
    }, 1000)
  }
})();




// Elrolmen
(() => {
  if(page !== 'enrollment') return false;

  // Upload fix
/*  document.querySelector('#step1_photo').addEventListener('change',function(){
    this.setAttribute("data-text", document.querySelector("#step1_photo").value.replace(/.*(\/|\\)/, ''))
  });*/

  let a = new enrollment('next', 'prev', 'enrollment-form', 'flex');
  a.init();
  
  document.querySelector("#termsActive").addEventListener('click', () => {
    document.querySelector("#terms").style.display = 'block';
  });
  
})();


