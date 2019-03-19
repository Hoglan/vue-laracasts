<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
    <html lang="en"> 
        <head> 
            <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
            <title>Laracasts lesson 4</title> 
        </head> 
    <body> 

        <div id="root">
        
            <ul>
                <li v-for="name in names">{{ name }}</li>
            </ul>

            <input type="text" id="input" v-model="newName">
            <button @click="addName">Add Name</button>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

        <script>

            // document.querySelector('#input').value = data.message;
            var app = new Vue({

                el: '#root',

                data: {
                    newName: '',
                    names: ['Adam','Graham','Rory']
                },

                methods: {

                    addName: function (){

                        this.names.push(this.newName);

                        this.newName = '';

                    }

                }

                

            });

            
        </script>

    </body> 
</html>