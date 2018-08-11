import flatpickr from "flatpickr";
import { Spanish } from "flatpickr/dist/l10n/es.js"
import dragula from "dragula"

import froalaEditor from "froala-editor/js/froala_editor.pkgd.min"
import $ from "jquery"

window.$ = $;
flatpickr.localize(Spanish);

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

window.secureDelete = form => confirm('Seguro de querer eliminar?');

function createImage(input)
{
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#blah')
        .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
}

function manageImages()
{

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

  this.iterate = function(elem)
  {
    let name = elem.name;
    this.iterateDraw(elem);
  }

  this.iterateDraw = function(elem)
  {

    if(this.iterateCheck(elem.name)){
      return false;
    }

    var id = this.slug(elem.name);
    let insert = `
            <div class="item" id="__item_${id}">
               <input type="radio" value="${elem.name}" id="for_${id}" name='markerimage'>
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
    var image     = new FileReader();
    var img       = document.createElement("img");
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

if(page == 'blog_create'){
  // Date picker
  flatpickr("#mo_finish",{
      enableTime: true,
      dateFormat: "Y-m-d H:i:ss",
  });

  // Editor
  $(function() {
    $('#create_content').froalaEditor({
      height: 300,
      toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertLink', 'insertTable', '|', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']
    });
  });

  var run = new manageImages;
  run.init();

}

if(page == 'math_olympics_create' || page == 'math_olympics_edit')
{
  flatpickr("#mo_finish",{
      enableTime: true,
      dateFormat: "Y-m-d H:i:s",
  });

  var remove  = document.getElementById('math_olympics_bases_remove');

  if(remove){
    remove.addEventListener('click', () => {
      document.getElementById('math_olympics_bases_div').innerHTML =  `
      <input class="form-control-file" id="create_bases" type='file' name="base_url" accept=".pdf">
      <small class="form-text text-muted">Selecionar el archivo pdf de las bases</small>`;

      var b = document.getElementById('create_bases');
      b.addEventListener('change', function(){
        if(b.name){
          remove.style.display = 'none';
        }
      });

    });
  }

  const resultAdd     = document.getElementById('result_newresult');
  var resultContent   = document.getElementById('results_content');

  if(resultAdd){
    resultAdd.addEventListener('click', function(){
      resultContent.insertAdjacentHTML('beforeend', `
        <div class="row col-12">
          <div class="col-6"><input type="text" name="file_name[]" placeholder="Grados del resultado"></div>
          <div class="col-6"><input type="file" name="file_type[]"></div>
        </div>
      `);
    });

    document.getElementById('result_save').addEventListener('click', () => document.getElementById('result_save_form').submit());
  }
}


if(page == 'venue_create')
{
  // Editor
  $(function() {
    $('#create_content').froalaEditor({
      height: 300,
      toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertLink', 'insertTable', '|', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']
    });
  });

}




window.hideUnlicensed = false;
window.hideUnlicensedT = false
window.hideUnlicensedElement = false;
var _hideUnlicensed = setInterval(function(){

  if(!window.hideUnlicensed){
    [].forEach.call(document.getElementsByTagName('a'), a => {
      if(a.href == 'https://www.froala.com/wysiwyg-editor?k=u'){
        window.hideUnlicensed = true;
        window.hideUnlicensedElement = a;
      }

    });
  }else{
    if(!window.hideUnlicensedT){
      var wrapper = document.querySelector('.fr-wrapper');
      wrapper.insertAdjacentHTML('afterbegin', `<div id='hideUnlicensed' style='width: 100%;position:absolute;background:white;z-index:10000;padding:5px;border-bottom:1px solid gray;'></div>`);
      window.hideUnlicensedT = true;
    }else{
      if(document.getElementById('hideUnlicensed')){
        document.getElementById('hideUnlicensed').style.height = window.getComputedStyle(window.hideUnlicensedElement, null).getPropertyValue('height');
      }
    }

  }

}, 100);



if(page == 'banners_index'){
  var drake = dragula();
  drake.containers.push(document.getElementById('banners'));
}
