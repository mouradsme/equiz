import AppForm from '../app-components/Form/AppForm';

Vue.component('code-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                code:  '' ,
                
            }
        }
    }

});