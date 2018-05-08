/*!
 * App.js v0.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

// Imports
import { tns } from 'tiny-slider/src/tiny-slider.module'

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
var supportsTouch = (typeof Touch == "object");
if(supportsTouch){
    document.addEventListener('touchstart', function() {},false);
}

// capitalize frist letter upper
String.prototype.capitalize = function(){
    return this.replace(/\b(\w+)/g, (m,p) => p[0].toUpperCase() + p.substr(1).toLowerCase());
}

// Utils
var show  = (elem) => elem.style.display = 'block';
var hide  = (elem) => elem.style.display = 'none';
var gid   = (elem) => document.getElementById(elem);

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
  this.currentTab = 0;
  this.nextBtn = nextBtn;
  this.prevBtn = prevBtn;
  this.form    = form;
  this.blockType = type;
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
        "all" : 30,
      }
    }
  }];
  
  this.init = function(){
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
  
  this.cleanSelect = function(select, title){
    while (select.options.length) select.remove(0);
    let v = document.createElement('option');
    v.text = title;
    v.selected = true;
    v.disabled = true;
    select.add(v);
    return select;
  }

  this.showTab = function(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = this.blockType;
    document.getElementById(this.prevBtn).style.display = (n==0?'none':'inline');
    document.getElementById(this.nextBtn).innerHTML = (n == (x.length - 1)?'Enviar':`Siguiente <i class="fa fa-angle-right"></i>`);
    this.fixStepIndicator(n)
  }

  this.nextPrev = function(n,e) {
    var x = document.getElementsByClassName('tab');
    if (n == 1 && !this.validateForm()) return false;
    x[this.currentTab].style.display = 'none';
    // Increase or decrease the current tab by 1:
    this.currentTab = this.currentTab + n;
    if (this.currentTab >= x.length) {
      e.preventDefault();
      //...the form gets submitted:
      //document.getElementById("regForm").submit();
      console.log("finish")
      return false;
    }
    this.showTab(this.currentTab);
  }

  this.validateForm = function() {
    var s = [], x, i, valid = true;
    x = document.getElementsByClassName('tab');
    s = Array.prototype.concat.apply(s, x[this.currentTab].getElementsByTagName("input"));
    s = Array.prototype.concat.apply(s, x[this.currentTab].getElementsByTagName("select"));
    
    for (i = 0; i < s.length; i++) {
      
      if (!s[i].validity.valid) {
        s[i].classList.add('invalid');
        valid = false;
      }else{
        s[i].removeAttribute('required');
        s[i].classList.remove('invalid');
      }

      
    }
    // If the valid status is true, mark the step as finished and valid:
    /*if (valid) {
      document.getElementsByClassName("step")[this.currentTab].className += " finish";
    }*/
    return valid;
  }

  this.fixStepIndicator = function(n) {
    let v = document.getElementById("steps-guide");
    let z = v.getElementsByTagName("div")
    
    Array.from(z).forEach(function(a,i){
      a.classList = a.classList.remove('active');
      if(i==n) a.classList.add('active');
      if(i<n) a.classList.add('visited');
      (i<n)
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
  document.querySelector('#step1_photo').addEventListener('change',function(){
    this.setAttribute("data-text", document.querySelector("#step1_photo").value.replace(/.*(\/|\\)/, ''))
  });

  let a = new enrollment('next', 'prev', 'enrollment-form', 'flex');
  a.init();
  
  document.querySelector("#termsActive").addEventListener('click', () => {
    console.log(1)
    document.querySelector("#terms").style.display = 'block';
  });
  
})();


