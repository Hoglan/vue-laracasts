

Vue.component('modal', {

    props: ['title', 'body'],

    template: `
    
    <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <slot></slot>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close" @click="$emit('close')"></button>
    </div>`,

    data(){

        return{

            isVisible: true

        }
    },

    methods: {

        hideModal(){

            this.isVisible = false

        }

    }

});

Vue.component('task', {

    template: '<li><slot></slot></li>'

});

var app = new Vue({

    el: '#root',

    data: {

        showModal: false

    },

    methods:{

        

    },

    computed:{



    }

});