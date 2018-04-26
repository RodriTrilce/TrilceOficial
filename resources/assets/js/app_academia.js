/*!
 * App.js v0.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

// Imports
import { tns } from "tiny-slider/src/tiny-slider.module"


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


~(function(w,d){
  if(page !== 'index') return false;
  
  w.onload = function()
  {
    setTimeout(function(){
      document.body.className += ' loaded'
    }, 1000)
  }
})(window,document);
