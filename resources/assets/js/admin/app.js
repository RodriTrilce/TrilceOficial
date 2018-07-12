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

function createImage(input) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#blah')
        .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
}




function manageImages(){

  this.init = function()
  {
    this.images = document.getElementById('imagesMulti');
    this.manage = document.querySelector('.showimages');

    if(this.images){
      this.hearImages();
    }
  }

  this.hearImages = function()
  {
    this.images.addEventListener('change', input => Array.from(input.target.files).forEach(this.iterate.bind(this)) );
  }

  this.hearDelete = function(){
    /*
        document.addEventListener('click', function (event) {
        	// If the event target doesn't match bail
        	if (event.target.classList.contains('img_delete')){
              event.stopPropagation();

              var nlist = Array.from(document.getElementById('imagesMulti').files);

              var xlist = new FormData();

              nlist.forEach((file,i) => {
                if(event.target.parentElement.id === "__item_" + this.slug(file.name)){
                  //nlist = nlist.splice(i, 1)
                  xlist.append(i, file)
                }

                console.log(file);

              }, true);

    //          document.getElementById('imagesMulti').files = xlist;

              event.target.parentElement.remove();
          }

        }.bind(this));
    */
  }

  this.iterate = function(elem)
  {
    let name = elem.name;
    this.iterateDraw(elem);
    this.hearDelete();
  }

  this.iterateDraw = function(elem)
  {

    if(this.iterateCheck(elem.name)){
      return false;
    }

    var id = this.slug(elem.name);
    let insert = `
            <div class="item" id="__item_${id}">
               <input type="radio" value="${id}" id="for_${id}" name='markerimage'>
               <label for="for_${id}" id="for_image_${id}"></label>
               <div class="img_delete">☓</div>
             </div>`;

    this.manage.insertAdjacentHTML('beforeend', insert);
    var img       = this.iterateDrawImg(elem);
    var forLabel  = document.getElementById('for_image_'+id);
    forLabel.appendChild(img);
  }

  this.iterateCheck = function(name)
  {
    if(document.getElementById('__item_' + this.slug(name)))
      return true;
    else
      return false;
  }

  this.iterateDrawImg = function(elem, img){
    var image = new FileReader();
    var img = document.createElement("img");
    image.onload = function(e){
      img.src = e.target.result;
    };
    image.readAsDataURL(elem);
    return img;
  }


  this.slug = function(text)
  {
    return text.toString().toLowerCase()
      .replace(/\s+/g, '-')
      .replace(/[^\w\-]+/g, '')
      .replace(/\-\-+/g, '-')
      .replace(/^-+/, '')
      .replace(/-+$/, '');
  }
}

var run = new manageImages;
run.init();



import flatpickr from "flatpickr";
import { Spanish } from "flatpickr/dist/l10n/es.js"

flatpickr.localize(Spanish);

flatpickr("#mo_finish",{
    enableTime: true,
    dateFormat: "Y-m-d H:i:s",
});

window.secureDelete = function(form)
{
  return confirm('Seguro de querer eliminar?');
}


var remove  = document.getElementById('math_olympics_bases_remove');
if(remove){
  remove.addEventListener('click', () => {
    console.log(22)
    document.getElementById('math_olympics_bases_div').innerHTML =  `<input class="form-control-file" id="create_bases" type='file' name="base_url" accept=".pdf">
    <small class="form-text text-muted">Selecionar el archivo pdf de las bases</small>`;
    remove.style.display = 'none';
  });
}
