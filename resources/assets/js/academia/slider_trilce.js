
const SliderTrilce = {
  init: function()
  {
    this.setVariables();
    this.setListener();
    this.run();
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
      console.log( item);
      console.log(i)
    });
  },

  setPositionBar : function(item)
  {
/*
var heightContent = this.getStyle(item.querySelector('.banner__content'), 'height').replace('px',''),
    heightBox  = this.getStyle(item.querySelector('.banner__box'), 'height').replace('px',''),

*/
    let heightContent = item.querySelector('.banner__content').getBoundingClientRect().height,
        heightBox  = item.querySelector('.banner__box').getBoundingClientRect().height,

        widthBox      = this.getStyle(item.querySelector('.banner__box'), 'width').replace('px',''),
        widthBanner   = this.getStyle(item.querySelector('.banner__image'), 'width').replace('px',''),
        bar           = item.querySelector('.banner_box-bar');



    let widthSide  = (widthBanner-widthBox)/2;
    let heightSide = (heightBox-heightContent)/2;

    let fillHeight = heightSide/heightBox*100;
    let fillHeightFinish = 100-fillHeight;


//    console.log( heightBox + " --- " + )

console.log(`${fillHeight}  -- ${fillHeightFinish}`)


    bar.style.background = `linear-gradient(to bottom,
      #fff 0%,
      #fff ${fillHeight}%,
      rgba(255, 255, 255,0) ${fillHeight}%,
      rgba(255, 255, 255,0) ${fillHeightFinish}%,
      #fff ${fillHeightFinish}%,
      #fff 0%
    )`;

    bar.style.marginLeft = widthSide + 'px';
    bar.style.visibility = 'visible';
  },

  run: function()
  {
    this.loopSet();
//    this.setPositionBar();
  },

  getStyle: function (elem, prop)
  {
    var styles = window.getComputedStyle(elem, null);
    var value = styles.getPropertyValue(prop);
    if (!value) {
      throw "No se encontro la propiedad css: " + prop;
    }
    return value
  }
}

export default SliderTrilce;
