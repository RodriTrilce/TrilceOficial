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


// Utils
var show = function (elem) {
	elem.style.display = 'block';
};

var hide = function (elem) {
	elem.style.display = 'none';
};

var gid = (elem) => {
  return document.getElementById(elem);
}

var get = (url) => {
  return new Promise(function(resolve, reject) {
    var req = new XMLHttpRequest();
    req.open('GET', url);

    req.onload = function() {
      if (req.status == 200) {
        resolve(req.response);
      }
      else {
        reject(Error(req.statusText));
      }
    };

    req.onerror = function() {
      reject(Error("Network Error"));
    };

    req.send();
  });
}

function enrollment(nextBtn,prevBtn,form, type){
  this.currentTab = 0; // Current tab is set to be the first tab (0)
  this.nextBtn = nextBtn;
  this.prevBtn = prevBtn;
  this.form    = form;
  this.blockType = type;
  
  this.init = function(){
    this.showTab(this.currentTab); // Display the current tab
    
    document.getElementById(this.prevBtn).addEventListener('click', function(){
      this.nextPrev(-1);
    }.bind(this));
    
    document.getElementById(this.nextBtn).addEventListener('click', function(){
      this.nextPrev(1);
      //document.getElementById(this.form).submit();
    }.bind(this));
  }

  this.showTab = function(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = this.blockType;
    //x[n].style.visibility = 'visible';
    // ... and fix the Previous/Next buttons:

    if (n == 0) {
      document.getElementById(this.prevBtn).style.display = "none";
    } else {
      document.getElementById(this.prevBtn).style.display = "inline";
    }
    
    if (n == (x.length - 1)) {
      document.getElementById(this.nextBtn).innerHTML = "Enviar";
    } else {
      document.getElementById(this.nextBtn).innerHTML = `Siguiente <i class="fa fa-angle-right"></i>`;
    }
    
    // ... and run a function that displays the correct step indicator:
    this.fixStepIndicator(n)
  }

  this.nextPrev = function(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !this.validateForm()) return false;
    // Hide the current tab:
    x[this.currentTab].style.display = "none";
    // x[this.currentTab].style.visibility = "hidden";
    // Increase or decrease the current tab by 1:
    this.currentTab = this.currentTab + n;
    // if you have reached the end of the form... :
    if (this.currentTab >= x.length) {
      //...the form gets submitted:
      //document.getElementById("regForm").submit();
      console.log("finish")
      return false;
    }
    // Otherwise, display the correct tab:
    this.showTab(this.currentTab);
  }

  this.validateForm = function() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[this.currentTab].getElementsByTagName("input");
    
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false:
        valid = false;
      }else{
        y[i].removeAttribute("required");
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    /*if (valid) {
      document.getElementsByClassName("step")[this.currentTab].className += " finish";
    }*/
    
    return valid; // return the valid status
  }

  this.fixStepIndicator = function(n) {
    let v = document.getElementById("steps-guide");
    let z = v.getElementsByTagName("div")
    
    Array.from(z).forEach(function(a,i){
      a.classList = a.classList.remove('active');
      if(i==n) a.classList.add('active');
      if(i<n) a.classList.add('visited');
      (i<n)
    })
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


