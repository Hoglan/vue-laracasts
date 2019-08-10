

Vue.component('task-list', {

    template: '<div><task v-for="task in tasks">{{ task.task }}</task></div>',

    data(){

        return{

            tasks: [
                { task: 'Task 1', complete: true },
                { task: 'Task 2', complete: true },
                { task: 'Task 3', complete: true },
                { task: 'Task 4', complete: true },
            ]
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