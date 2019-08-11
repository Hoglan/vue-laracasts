

Vue.component('message', {

    props: ['title', 'body'],

    template: `
    
    <article class="message" v-show="isVisible">
        <div class="message-header">

            {{ title }}

            <button type="button" @click="hideModal">X</button>

        </div>
        <div class="message-body">
            {{ body }}
        </div>
    </article>`,

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

        

    },

    methods:{

        

    },

    computed:{



    }

});