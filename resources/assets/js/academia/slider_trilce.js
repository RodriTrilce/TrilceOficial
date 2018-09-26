
const SliderTrilce = {
  init: function()
  {
    this.setVariables();
    this.setListener();

    this.runOutLoaded();
    window.onload = () => this.run();
  },

  setListener: function()
  {
    window.addEventListener('resize', () => {
      this.run();
    });
  },

  setVariables: function()
  {
    this.items = document.querySelectorAll('.banner__item');
  },

  loopSet: function()
  {
    [].forEach.call(this.items, (item, i) => {
      this.setPositionBar(item);
      this.setImages(item);
    });
  },

  setImages: function(item)
  {
    var banner = item.querySelector('.banner__image');

    var md      = banner.getAttribute("data-image-md"),
    mdPosition  = banner.getAttribute("data-position-md"),
    mdSize      = banner.getAttribute("data-size-md");

    var xs      = banner.getAttribute("data-image-xs"),
    xsPosition  = banner.getAttribute("data-position-xs"),
    xsSize      = banner.getAttribute("data-size-xs");

    if(window.screen.availWidth < 768){
      banner.style.backgroundImage = `url(${xs})`;
      banner.style.backgroundPosition = `${xsPosition}`;
      banner.style.backgroundSize = `${xsSize}`;
    }else{
      banner.style.backgroundImage = `url(${md})`;
      banner.style.backgroundPosition = `${mdPosition}`;
      banner.style.backgroundSize = `${mdSize}`;
    }
  },

  setShadowContent: function(item)
  {
    item.pseudoStyle("before","z-index", item.dataset.shadow);
    item.pseudoStyle("before","opacity", item.getAttribute("data-shadow-opacity"));
  },

  setPositionBar : function(item)
  {
    let borderColor   = item.dataset.bordercolor;
    let banner__box   = item.querySelector('.banner__box'),
        heightContent = item.querySelector('.banner__content').offsetHeight,
        heightBox     = banner__box.offsetHeight,

        widthBox      = this.getStyle(banner__box, 'width').replace('px',''),
        widthBanner   = this.getStyle(item.querySelector('.banner__image'), 'width').replace('px',''),
        bar           = item.querySelector('.banner_box-bar');

    let widthSide  = (widthBanner-widthBox)/2,
        heightSide = (heightBox-heightContent)/2,
        fillHeight = (heightSide/heightBox*100)-2,
        fillHeightFinish = (100-fillHeight)+1.5;

    bar.style.background = `linear-gradient(to bottom,
      ${borderColor} 0%,
      ${borderColor} ${fillHeight}%,
      rgba(255, 255, 255,0) ${fillHeight}%,
      rgba(255, 255, 255,0) ${fillHeightFinish}%,
      ${borderColor} ${fillHeightFinish}%,
      ${borderColor} 100%
    )`;

    bar.style.marginLeft = widthSide + 'px';
    bar.style.visibility = 'visible';

  },

  removeLoading: function()
  {
    var loader = document.querySelector('.banner__loader');
    loader.style.opacity = "0";

    loader.addEventListener('transitionend', evt => {
      loader.style.height = "0";
    });
  },

  getStyle: function (elem, prop)
  {
    var styles = window.getComputedStyle(elem, null);
    var value = styles.getPropertyValue(prop);
    if (!value) {
      throw "No se encontro la propiedad css: " + prop;
    }
    return value
  },

  run: function()
  {
    this.loopSet();
    this.removeLoading()
  },

  runOutLoaded: function()
  {
    [].forEach.call(this.items, (item, i) => {
      this.setShadowContent(item);
    });
  }
}

export default SliderTrilce;
