/*!
 * App.js v0.1
 * (c) 2018 Fraco Salcedo
 * Released under the Trilce Group.
 */
 import Vue from 'vue'
 import VideoBg from 'vue-videobg'
 import VueAgile from 'vue-agile'

 Vue.component('video-bg', VideoBg)
 Vue.use(VueAgile)
 Vue.component('VueAgile', VueAgile)

 // or
var home = new Vue({
   el: '#h-k',
   data: {
     message: 'CHCHC'
   },
   components: {
     VideoBg,
     VueAgile
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


alert(1)