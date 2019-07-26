<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
    <html lang="en"> 
        <head> 
            <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
            <title>Laracasts lesson 6</title> 
        </head> 
        <style>
        .color-red{
            color: red;
        }
        .is-loading{
            color: hotpink;
        }
        </style>
    <body> 

        <div id="root">
        
            <h1>
                {{ reversedMessage }}
            </h1>

            <h2>Tasks completed</h2>

            <ul>
            
            <li v-for="(task, key) in tasks" v-if="task.completed">{{ task.description }}<input type="checkbox" @click="markIncomplete(key)"></li>
            
            </ul>

            <h2>Tasks not completed</h2>

            <ul>
            
            <li v-for="(task, key) in tasks" v-if="!task.completed">{{ task.description }}<input type="checkbox" @click="markComplete(key)"></li>
            
            </ul>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

        <script>

            // document.querySelector('#input').value = data.message;
            var app = new Vue({

                el: '#root',

                data: {
                    
                    message: 'Hello',

                    tasks:[
                        { description: 'Go to work', completed: true },
                        { description: 'Go to shops', completed: false },
                        { description: 'Go to practise', completed: false },
                        { description: 'Go to bed', completed: false },
                    ]

                },

                methods:{

                    markComplete(key){

                        this.tasks[key].completed = true
    
                    },

                    markIncomplete(key){

                        this.tasks[key].completed = false
    
                    }

                },

                computed:{
                    
                    reversedMessage(){

                        return this.message.split('').reverse().join('')

                    },

                    completeTasks(){
                        return this.tasks.filter(task => task.completed);
                    },

                    incompleteTasks(){
                        return this.tasks.filter(task => ! task.completed);
                    }
                }

            });

            
        </script>

    </body> 
</html>