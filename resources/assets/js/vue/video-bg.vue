<!--
<div id="h-k">
  <video-bg class="home-bg" :sources="['static/video/home_a.webm', 'static/video/home_b.mp4']" img="static/images/home/home-mobile.jpg">
    <div class="home-overlay"></div>
  </video-bg>
</div>
</div>
<script src=" mix('/js/app.js') " charset="utf-8"></script>
-->

<template>
  <section class="VideoBg">
    <video loop muted ref="video">
      <source v-if="isRequired" v-for="source in sources" :src="source" :type="getMediaType(source)">
    </video>
    <div class="VideoBg__content">
      <slot></slot>
    </div>
  </section>
</template>


<script>
  export default {
    props: {
      sources: {
        type: Array,
        required: true
      },
      img: {
        type: String
      }
    },

    data () {
      return {
        videoRatio: null,
        isRequired: false
      }
    },
    
    beforeMount () {
      if(this.isMobile()){
        document.body.className += ' loaded';
      }else{
        this.isRequired = true
      }
    },

    mounted () {
      this.setImageUrl()
      this.setContainerHeight()

      if (this.videoCanPlay()) {
        this.$refs.video.oncanplay = () => {
          if (!this.$refs.video) return

          this.videoRatio = this.$refs.video.videoWidth / this.$refs.video.videoHeight
          this.setVideoSize()
          this.$refs.video.style.visibility = 'visible'
        }
      }

      window.addEventListener('resize', this.resize)
    },

    beforeDestroy () {
      window.removeEventListener('resize', this.resize)
    },

    methods: {
      resize () {
        this.setContainerHeight()

        if (this.videoCanPlay()) {
          this.setVideoSize()
        }
      },

      videoCanPlay () {
        return !!this.$refs.video.canPlayType
      },

      setImageUrl () {
        if (this.img) {
          this.$el.style.backgroundImage = `url(${this.img})`
        }
      },

      setContainerHeight () {
        this.$el.style.height = `${window.innerHeight}px`
      },

      setVideoSize () {
        var width, height, containerRatio = this.$el.offsetWidth / this.$el.offsetHeight

        if (containerRatio > this.videoRatio) {
          width = this.$el.offsetWidth
        } else {
          height = this.$el.offsetHeight
        }

        this.$refs.video.style.width = width ? `${width}px` : 'auto'
        this.$refs.video.style.height = height ? `${height}px` : 'auto'
      },

      getMediaType (src) {
        return 'video/' + src.split('.').pop()
      },
      
      isMobile() {
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
  }
</script>

<style>
  .VideoBg {
    position: relative;
    background-size: cover;
    background-position: center;
    overflow: hidden;
  }

  .VideoBg video {
    position: absolute;
    top: 50%;
    left: 50%;
    visibility: hidden;
    transform: translate(-50%, -50%);
  }

  .VideoBg__content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
</style>
