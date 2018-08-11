var home = {
  init : function()
  {
    this.initVariables();
    this.initListeners();
    this.initHome();
  },

  initVariables : function()
  {
    this.HOME_MODE = false;
  },

  initListeners : function()
  {
    this.listenerWindowHome();
  },

  initHome : function()
  {

  },

  listenerWindowHome : function()
  {
    window.addEventListener('mousemove', function(evt) {
      if((window.innerWidth / 2) > evt.screenX)
        this.MODE_HOME = 'COLEGIO';
      else
        this.MODE_HOME = 'ACADEMIA';
    });
  },

}

home.init();
