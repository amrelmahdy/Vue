window.Event = new class{
    constructor(){
        this.vue = new Vue();
    }

    fire(event, data = null){
        this.vue.$emit(event, data);
    }

    listen(event, callback){
        this.vue.$on(event, callback);
    }
}

var cupon = Vue.component('cupon', {
   template : `<input v-on:blur="onCuponApplied" type="text">`,
    methods : {
       onCuponApplied(){
           Event.fire('applied');
       },

    }
});


let app = new Vue({
    el : '#app',

    created (){
       Event.listen('applied', () => alert('hi'));
    }

});