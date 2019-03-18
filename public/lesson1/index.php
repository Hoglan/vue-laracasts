<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
    <html lang="en"> 
        <head> 
            <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
            <title>Title Goes Here</title> 
        </head> 
    <body> 

        <div id="root">
        
            <input type="text" id="input" v-model="message" />

            <p>The value of the input is: {{ message }}</p>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

        <script>
            
            let data = 

            // document.querySelector('#input').value = data.message;
            new Vue({

                el: '#root',

                data: {
                    message: 'Hello world'
                }

            })
        </script>

    </body> 
</html>