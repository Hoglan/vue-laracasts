<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
    <html lang="en"> 
        <head> 
            <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
            <title>Title Goes Here</title> 
        </head> 
    <body> 

        <div id="root">

            <input type="text" id="inputES6" />

            <br/><br/>

            <input type="text" id="input" v-model="message" />

            <p>The value of the input is: {{ message }}</p>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

        <script>

            

            //New spangled vue method
            new Vue({

                el: '#root',

                data: {
                    message: 'Hello world'
                }

            })

            //Es6 method - needs to be below vue to work alongside vue, if above vue, this doesn't work
            let dataes6 = {
                messagees6: 'Hello World'
            };

            document.querySelector('#inputES6').value = dataes6.messagees6;
        </script>

    </body> 
</html>