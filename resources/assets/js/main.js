
var Vue = require('vue');

new Vue ({
    el: '#emailFormGroup',
    data: {
    exists: false
},
    methods: {
        checkEmailExists: function (event){
            alert('xivato')
            this.exists=true;
        }
    }
})
