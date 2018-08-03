import Parallax from 'parallax-js'


;(() => {
  const home = {
    STATUS_SHOW : false,
    STATUS_COLEGIO : false,
    STATUS_ACADEMIA : false,

    ACADEMIA : {
      btn : document.getElementById('btnAcademia'),
      human : document.querySelector('.home--float-girl'),
      layers : document.querySelector('.academia-layers'),
      slogan : document.getElementById('slogan-academia'),

      class : {
        humanLeave : 'academia-leave-human',
      }
    },

    COLEGIO : {
      btn : document.getElementById('btnColegio'),
      human : document.querySelector('.home--float-boy'),
      layers : document.querySelector('.colegio-layers'),
      slogan : document.getElementById('slogan-colegio'),

      class : {
        humanLeave : 'colegio-leave-human',
      }
    },

    init : function()
    {
      if(this.isMobile()) return false;
      this.listen();
      //this.svgWizard();

      this.activeWindow();
    },

    listen : function()
    {
      this.listenShow();
    },

    listenShow : function()
    {
      this.listenShowAcademia();
      this.listenShowColegio();
    },

    activeWindow : function()
    {
      var a = this;
      window.addEventListener('mousemove', function(evt) {
        if((window.innerWidth/2) > evt.screenX){

          // COLEGIO

          this.layersVisible(this.COLEGIO);
          this.ACADEMIA.human.classList.add( this.ACADEMIA.class.humanLeave );

          this.COLEGIO.human.classList.remove( this.COLEGIO.class.humanLeave );
          this.layersHidden(this.ACADEMIA);


          window.para.disable();
          window.para2.enable();



          this.ACADEMIA.layers.style.position = 'absolute !important';


          this.ACADEMIA.slogan.style.display = 'none';
          this.COLEGIO.slogan.style.display = 'block';

          this.COLEGIO.slogan.style.visibility = 'visible';
          this.ACADEMIA.slogan.style.visibility = 'hidden';

          this.ACADEMIA.slogan.style.opacity = '0';
          this.COLEGIO.slogan.style.opacity = '1';




        }else{

          this.ACADEMIA.human.classList.remove( this.ACADEMIA.class.humanLeave );
          this.layersHidden(this.COLEGIO);

          this.layersVisible(this.ACADEMIA);
          this.COLEGIO.human.classList.add( this.COLEGIO.class.humanLeave );

          window.para.enable();
          window.para2.disable();


          this.ACADEMIA.layers.style.position = 'unset';
          this.COLEGIO.layers.style.position = 'absolute !important';

          this.ACADEMIA.slogan.style.display = 'block';
          this.COLEGIO.slogan.style.display = 'none';

          this.ACADEMIA.slogan.style.visibility = 'visible';
          this.COLEGIO.slogan.style.visibility = 'hidden';

          this.ACADEMIA.slogan.style.opacity = '1';
          this.COLEGIO.slogan.style.opacity = '0';


        }

      }.bind(this), false);

    },


    listenShowAcademia : function()
    {
      if(this.STATUS_SHOW) return false;

      this.ACADEMIA.btn.addEventListener('mouseenter', this.academiaRun.in.bind(this));
      this.ACADEMIA.btn.addEventListener('mouseleave', this.academiaRun.out.bind(this));
    },

    listenShowColegio : function()
    {
      if(this.STATUS_SHOW) return false;

      this.COLEGIO.btn.addEventListener('mouseenter', this.colegioRun.in.bind(this));
      this.COLEGIO.btn.addEventListener('mouseleave', this.colegioRun.out.bind(this));
    },

    academiaRun : {
      in : function()
      {
        this.layersVisible(this.ACADEMIA);
        this.COLEGIO.human.classList.add( this.COLEGIO.class.humanLeave );
      },

      out: function()
      {
        this.COLEGIO.human.classList.remove( this.COLEGIO.class.humanLeave );
        this.layersHidden(this.ACADEMIA);
      }
    },

    colegioRun : {
      in : function()
      {
        this.layersVisible(this.COLEGIO);
        this.ACADEMIA.human.classList.add( this.ACADEMIA.class.humanLeave );
      },

      out: function()
      {
        this.ACADEMIA.human.classList.remove( this.ACADEMIA.class.humanLeave );
        this.layersHidden(this.COLEGIO);
      }
    },

    layersVisible : function(tem){
      tem.layers.style.visibility = 'visible';
      tem.layers.style.opacity = '1';

      // [].forEach.call(tem.layers.getElementsByTagName('path'), path => {
      //   path.style.opacity = '1';
      // });
    },

    layersHidden : function(tem){
      tem.layers.style.opacity = '0';


      // [].forEach.call(tem.layers.getElementsByTagName('path'), path => {
      //   path.style.opacity = '0';
      // });
    },

    svgWizard : function()
    {
      [].forEach.call(document.getElementsByTagName('path'), path => {
        path.style.transition = 'all .' + this.getRandomInt(2,9) + 's ease-in';
        path.style.animation = (this.getRandomInt(1,10,true) > 5 ? 'layer-path' : 'layer-path2' ) + ' ' + this.getRandomInt(3,5) +'s linear infinite';

      });
    },

    getRandomInt : function (min, max)
    {
      return Math.floor(Math.random() * (max - min + 1) + min);
    },

    isMobile: function()
    {
      var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
      var result = false;

      if (mobile) {
        result = true;
        var userAgent = navigator.userAgent.toLowerCase();
        if ((userAgent.search("android") > -1) && (userAgent.search("mobile") > -1))
      	 result = true; // android mobile
        else if ((userAgent.search("android") > -1) && !(userAgent.search("mobile") > -1))
      	 result = false;
      }

      return result;
    }

  }

  home.init();

})();

var scene = document.getElementById('scene');
window.para = new Parallax(scene,{
  relativeInput : false
});


var scene2 = document.getElementById('scene2');
window.para2 = new Parallax(scene2,{
  relativeInput : false
});

window.para.disable();
window.para2.disable();
