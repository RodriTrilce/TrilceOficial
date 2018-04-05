/**
 *  Main Academia Js File
 */
 
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
  if(page !== 'entering') return;

  
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
  
  for (let i = 0; i < v.length; i++) {
    v[i].addEventListener('click', (evt) =>{
      
      for(var k=0; k < v.length; k++){ v[k].classList.remove('select') }
      
      v[i].classList.add('select');
      var year = v[i].getAttribute("data-year");
      
      getEntering(university, year);
      
    });
    
  }
  
  // Default
  getEntering(university, '2018');
  
})(document);








