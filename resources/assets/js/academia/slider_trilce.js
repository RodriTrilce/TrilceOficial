
const SliderTrilce = {
  init: function()
  {
    this.setVariables();
    this.setListener();

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
      this.setShadowContent(item);
    });
  },

  setShadowContent: function(item)
  {
    item.pseudoStyle("before","z-index", item.dataset.shadow);
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
        fillHeight = (heightSide/heightBox*100)-5,
        fillHeightFinish = (100-fillHeight)+3;

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
  }
}

export default SliderTrilce;
