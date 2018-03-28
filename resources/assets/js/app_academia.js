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

// Simulacrum -> Signup Form
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