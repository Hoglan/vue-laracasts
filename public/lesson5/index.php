<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
    <html lang="en"> 
        <head> 
            <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
            <title>Laracasts lesson 5</title> 
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
        
            <button :class="{ 'is-loading': isLoading }" @click="toggleClass">Click me</button>

            <button :disabled="isDisabled" @click="toggleDisabled">Click me</button>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

        <script>

            // document.querySelector('#input').value = data.message;
            var app = new Vue({

                el: '#root',

                data: {
                    
                    className: 'color-red',

                    isLoading: false,

                    isDisabled: false

                },

                methods:{

                    toggleClass(){
                        this.isLoading = true;
                    },

                    toggleDisabled(){
                        this.isDisabled = true;
                    }

                }

            });

            
        </script>

    </body> 
</html>