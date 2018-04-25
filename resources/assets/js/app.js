 /*!
  * App.js v0.1
  * (c) 2018 Fraco Salcedo
  * Released under the Trilce Group.
  */
  import Vue from 'vue'
  import VideoBg from './vue/video-bg'

  Vue.component('video-bg', VideoBg)
  
  var home = new Vue({
    el: '#h-k',
    data: {
      message: ''
    },
    components: {
      VideoBg
    },
    methods: {
      loader: function(){
        const video = document.getElementsByTagName('video')[0];
        video.addEventListener('loadeddata', function() {
          if(video.readyState == 4)
             video.play()
             document.body.className += ' loaded';
             video.removeEventListener('loadeddata', this)
        });
        
      }
    },
    created() {
    },
    beforeMount() {
    },
    mounted() {
      this.loader()
    }
  })
