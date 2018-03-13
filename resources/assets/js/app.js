/*!
 * App.js v0.1
 * (c) 2018 Fraco Salcedo
 * Released under the Trilce Group.
 */
 window.Vue = require('vue');
 import VideoBg from 'vue-videobg'

 Vue.component('video-bg', VideoBg)
 
 // or
var home = new Vue({
   el: '#k',
   data: {
     message: 'CHCHC'
   },
   components: {
     VideoBg
   },
   methods: {
     loader: function(){
       let a = this;
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
