 /*!
  * App.js v0.1
  * (c) 2018 Fraco Salcedo
  * Released under the Trilce Group.
  */
  import Vue from 'vue'
  import VideoBg from 'vue-videobg'
 
  Vue.component('video-bg', VideoBg)
 
 var home = new Vue({
    el: '#h-k',
    data: {
      message: 'CHCHC'
    },
    components: {
      VideoBg
    },
    methods: {
      loader: function(){
        const video = document.getElementById("videobackground");
        video.addEventListener('loadeddata', function() {
          if(video.readyState == 4)
             console.log('Ready baby')
             video.play()
             document.body.className += ' loaded';
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
