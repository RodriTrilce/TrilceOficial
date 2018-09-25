var backgroundEffect = {
  init : function(){
    setInterval(this.hearSelector.bind(this), 1);
  },

  hearSelector : function(){
    this.active = document.querySelector('.tns-slide-active');
    this.changeBackground();
  },

  changeBackground : function(){
    var image = this.active.getElementsByTagName('img'),
        image = image[0].src;

    document.querySelector('.background-image').style.background = `url('${image}')`;
  }
}

export {backgroundEffect};
