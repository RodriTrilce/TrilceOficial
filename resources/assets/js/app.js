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
       setTimeout(function(){
         document.body.className += ' loaded'
       }, 1000)
     }
   },
   created() {
     this.loader()
   },
   beforeMount() {
     console.log("end mount")
   }
 })
