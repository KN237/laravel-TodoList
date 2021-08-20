<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo @yield('titre')</title>


    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Styles -->

    <style>
    *{
        transition: 0.2s;
    }
        html,
        body {
            background: rgb(51, 177, 235);
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0 auto;
        }

        .container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            margin: 0 auto;
            text-align: center;
            justify-content: center;
        }

        .liste {

            background: white;
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.329);
            width: 400px;
            height: auto;
            position: relative;
        }


        form {

            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 20%  40 10% 30%;
            gap: 0px 0px;
            grid-template-areas:
                "ti"
                "des"
                "pl"
                "btn";
                margin:5%;
        }

        input,textarea{

            border: 1px solid rgba(49, 47, 47, 0.164);
            border-radius:3px;
            outline: none;
            
        }

        input::placeholder,textarea::placeholder{

color: #636b6f6e
}

        input:focus,textarea:focus{

            border: 2px solid rgba(51, 177, 235, 0.603);
}

button{
    background: rgb(51, 177, 235);
    outline: none;
    border:none;
    color: aliceblue;
}

button:active{
    transform: scale(1.05);
}
    </style>
</head>

<body>

    <div class="container">



        @yield('contenu')





    </div>

</body>

</html>
