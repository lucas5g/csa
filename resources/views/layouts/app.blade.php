<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <style>
            *{
                margin:0;
                padding: 0;
                box-sizing: border-box;
            }
            .container{
                background: red;
                height: 100vh;
                display: grid;
                grid-template-rows: 10vh 1fr 15vh;
                grid-template-areas: 'header'
                                    'main'
                                    'footer';
            }
            header{
                background: blue;
                grid-area: header;
            }
            main{
                background: green;
            }
            footer{
                background: purple;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <header>
                <a href="/">Enturmação</a>
                <ul>
                    <li>
                        Alunos
                    </li>
                    <li>
                        Turmas
                    </li>
                </ul>
            </header>
            <main>
                main
                lorem*60
            </main>
            <footer>
                footer
            </footer>
            {{-- @section('sidebar')
            @show
            
            <div class="container">
                @yield('content')
            </div> --}}
        </body>
    </div>
</html>