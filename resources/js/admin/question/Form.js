import AppForm from '../app-components/Form/AppForm';

Vue.component('question-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                question:  '' ,
                right_answer:  '' ,
                answer_2:  '' ,
                answer_3:  '' ,
                answer_4:  '' ,
                
            }
        }
    }

});