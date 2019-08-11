<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
    <html lang="en"> 
        <head> 
            <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
            <title>Laracasts lesson 10</title> 
        </head>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" />

        <style>

        body{

            padding-top: 1em;

        }

        </style>

    <body> 

        <div id="root" class="container">

            <modal v-show="showModal" @close="showModal = false">
            
            <p>inserted text</p>
            
            </modal>

            <button @click="showModal = true">Show Modal</button>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <script src="main.js"></script>


    </body> 
</html>