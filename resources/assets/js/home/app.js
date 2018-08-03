;(() => {
  const home = {
    STATUS_SHOW : false,
    STATUS_COLEGIO : false,
    STATUS_ACADEMIA : false,

    ACADEMIA : {
      btn : document.getElementById('btnAcademia'),
      human : document.querySelector('.home--float-girl'),
      layers : document.querySelector('.academia-layers'),

      class : {
        humanLeave : 'academia-leave-human',
      }
    },

    COLEGIO : {
      btn : document.getElementById('btnColegio'),
      human : document.querySelector('.home--float-boy'),
      layers : document.querySelector('.colegio-layers'),

      class : {
        humanLeave : 'colegio-leave-human',
      }
    },

    init : function()
    {
      if(this.isMobile()) return false;
      
      this.listen();
      this.svgWizard();
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

      [].forEach.call(tem.layers.getElementsByTagName('path'), path => {
        path.style.opacity = '1';
      });
    },

    layersHidden : function(tem){
      tem.layers.style.visibility = 'hidden';
      tem.layers.style.opacity = '0';

      [].forEach.call(tem.layers.getElementsByTagName('path'), path => {
        path.style.opacity = '0';
      });
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

    isMobile: function() {
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

  window.home = home;

})();

var app = window.home;
app.init();
