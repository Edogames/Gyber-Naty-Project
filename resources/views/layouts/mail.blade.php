<!DOCTYPE html>

<html lang="en">
    <head>
        <style>
            *{
                background: black;
                padding: 20px 0;
            }
            /* Width */
            ::-webkit-scrollbar {
                width: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background: black;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: purple;
                border-radius: 10px;

                transition: all 1s ease-in-out;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(to bottom, purple, rgb(212, 0, 212), purple);

                transition: all 1s ease-in-out;
            }
            html{
                display: flex;
                justify-content: center;
                width: 100%;
                height: 100%;
                background: black;
            }
            body{
                display: block;
                border-radius: 20px;
                margin: auto;
                background: purple;
                padding: 10px;
                width: 80%;
                height: min-content;
            }
            h1{
                width: 100%;
                display: block;
                margin: auto;
                margin-top: 100px;
                margin-bottom: 50px;
                text-align: center;
                font-family: 'Times New Roman';
                color: purple;
                outline: 2px solid white;
                background: gray;
                padding: 10px;
                border-radius: 20px;
                width: fit-content;
            }
            h3{
                width: 100%;
                margin: 200px 0;
                font-size: xx-large;
                text-align: center;
                color: green;
            }
            p{
                width: 100%;
                font-size: larger;
                text-align: center;
                color: gray;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Hi @yield('name')!</h1>
            <br>
            <h3>
                @yield('amount')
            </h3>
            <br>
            <p>
                @yield('email')
            </p>
        </div>
    </body>
</html>
