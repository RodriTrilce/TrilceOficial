/*!
 * App.js v0.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

function home(){
  this.videoContainer = document.getElementById('videoContainer');
  this.videoTag       = document.getElementById('videoTag');
  this.all            = document.getElementById("all")
  this.img            = 'static/images/home-mobile.jpg'
  
  this.videoUrls      = [
                          {"url" : "static/video/home_a.webm"},
                          {"url" : "static/video/home_b.mp4"}
                        ];

  this.init = () => {
    this.setContainerHeight();
    
    // Return false is no mobile
    if(!this.isMobile()){
      this.setVideoUrls();
      
      if (this.videoCanPlay()) {
        this.videoTag.oncanplay = () => {
          if (!this.videoTag) return

          this.videoRatio = this.videoTag.videoWidth / this.videoTag.videoHeight
          this.setVideoSize()
          this.videoTag.style.visibility = 'visible'
        }
      }

      window.addEventListener('resize', this.resize);
      
      this.check();
    }else{
      this.setImg();
      this.checkMobile();
    }
  }
  
  this.setImg = () => {
      if (this.img) {
        this.videoContainer.style.backgroundImage = `url(${this.img})`
      }
  }
  
  this.checkMobile = () => {
    
    document.body.className += ' loaded';
  }
  
  this.check = () => {
    const video = document.getElementsByTagName('video')[0];
    video.addEventListener('loadeddata', function() {
      if(video.readyState == 4)
         video.play()
         document.body.className += ' loaded';
         video.removeEventListener('loadeddata', this)
    });
  }
  
  this.setVideoUrls = () => {
    this.videoUrls.forEach((elem,i) => {
      let source = document.createElement('source');
      source.setAttribute('src', elem.url);
      source.setAttribute('type', this.getMediaType(elem.url));
      this.videoTag.appendChild(source);
      this.videoTag.play()
    });
    
  }
  
  this.resize = () => {
    this.setContainerHeight()
    if (this.videoCanPlay()) {
      this.setVideoSize()
    }
  }

  this.videoCanPlay = () => {
      return !!this.videoTag.canPlayType
  }
  
  this.setContainerHeight = () => {
    this.videoContainer.style.height = `${window.innerHeight}px`
  }
  
  this.setVideoSize = () => {
    var width, height, containerRatio = this.videoContainer.offsetWidth / this.videoContainer.offsetHeight
    
    if (containerRatio > this.videoRatio) {
      width = this.videoContainer.offsetWidth
    } else {
      height = this.videoContainer.offsetHeight
    }

    this.videoTag.style.width = width ? `${width}px` : 'auto'
    this.videoTag.style.height = height ? `${height}px` : 'auto'
  }
  
  this.getMediaType = (src) => {
    return 'video/' + src.split('.').pop()
  }
  
  this.isMobile = () => {
    var useragent = navigator.userAgent;

    if (useragent.match(/Android/i)) {
        return 'android';
    } else if (useragent.match(/webOS/i)) {
        return 'webos';
    } else if (useragent.match(/iPhone/i)) {
        return 'iphone';
    } else if (useragent.match(/iPod/i)) {
        return 'ipod';
    } else if (useragent.match(/iPad/i)) {
        return 'ipad';
    } else if (useragent.match(/Windows Phone/i)) {
        return 'windows phone';
    } else if (useragent.match(/SymbianOS/i)) {
        return 'symbian';
    } else if (useragent.match(/RIM/i) || useragent.match(/BB/i)) {
        return 'blackberry';
    } else {
        return false;
    }
  }
}

let page_home = new home();
page_home.init(); // run!