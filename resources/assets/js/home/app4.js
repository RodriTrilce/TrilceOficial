var home = {
  init : function()
  {
    this.initVars();
    this.initEvents();
  },

  initVars : function()
  {
    this.ACTIVE = false,
    this.TIME_ACTIVE_PAGE = 500,
    this.TIMER_EXECUTE = false,
    this.TIMER_EXECUTE_PAGE = false;

    this.class = {
      background : {
        academia : '.background_academia',
        colegio : '.background_academia'
      }
    }


    this.video = {
      colegio : document.getElementById('video-colegio'),
      academia : document.getElementById('video-academia')
    }

  },

  initEvents : function()
  {
    this.isVisible();
    this.initHome();
  },

  isVisible : function()
  {
    document.addEventListener("visibilitychange", this.eventVisible, false);
  },

  eventVisible : function()
  {
    if(document.hidden) {
      return false;
    }else{
      return true;
    }
  },

  initHome : function()
  {
    console.log(2)
    window.addEventListener('mousemove', evt => this.eventTypePage(evt));
  },

  eventTypePage : function(evt)
  {
    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    if(this.eventVisible())
    {
      if((w / 2) > evt.x){
        if(this.TYPE == 'COLEGIO') return;
        this.activeEventPage('COLEGIO');
      }else{
        if(this.TYPE == 'ACADEMIA') return;
        this.activeEventPage('ACADEMIA');
      }
    }
    /*else{
      this.eventVideoPauseAll();
    }*/
  },

  activeEventPage : function(type)
  {
    switch (type) {
      case 'COLEGIO':
        this.timer(1, 'COLEGIO', this.eventColegio);
        break;

      case 'ACADEMIA':
      this.timer(1, 'ACADEMIA', this.eventAcademia);
        break;
    }
  },

  eventAcademia : function(self)
  {
    self.TIMER_EXECUTE = false;
    document.body.classList.remove('active-colegio');
    document.body.classList.add('active-academia');
    self.eventVideo('ACADEMIA');
    self.ACTIVE = 'ACADEMIA';
  },

  eventColegio : function(self)
  {
    document.body.classList.remove('active-academia');
    document.body.classList.add('active-colegio');
    self.TIMER_EXECUTE = false;
    self.eventVideo('COLEGIO');
    self.ACTIVE = 'COLEGIO';
  },

  eventVideo : function(type)
  {
    switch (type) {
      case 'COLEGIO':
      this.video.colegio.pause();
      this.video.academia.play();
      break;

      case 'ACADEMIA':
      this.video.academia.pause();
      this.video.colegio.play();
      break;
    }
  },

  eventVideoPauseAll()
  {
    this.video.colegio.pause();
    this.video.academia.pause();
  },

  timer : function(limit, type, method)
  {
      if(this.TIMER_EXECUTE_PAGE !== type){
        this.TIMER_EXECUTE = false,
        this.TIMER_EXECUTE_PAGE = type;
      }else{
        return;
      }

      if(this.TIMER_EXECUTE) return;
      this.TIMER_EXECUTE = true;

      var i = 1;
      var timer = setInterval(function() {
          i++;
          if(i > limit) {
            this.TIMER_EXECUTE_PAGE = type;
            method(this);
            clearInterval(timer);
          }
          console.log('...timer ' + i);
      }.bind(this), 500);
      i=1;
  }



}

home.init();
