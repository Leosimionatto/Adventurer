<html>
    <head>
        <meta charset="UTF-8">
        <title>Adventurer</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Application CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Font Awesome Javascript -->
        <script defer src="{{ asset('fontawesome/svg-with-js/js/fontawesome-all.js') }}"></script>

        <!-- FullCalendar CSS -->
        <link rel='stylesheet' href='{{ asset('fullcalendar/fullcalendar.css') }}' />

        <!-- Google Fonts -->
        <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Roboto%3A300%2C400%7CRaleway%3A400%2C500%2C900&#038;ver=3.1' type='text/css' media='all'/>
    </head>
    <body>
        <div class="application">
            <!-- Application Menu -->
            <div class="application-menu">
                <ul>
                    <li>
                        <a href="{{ route('web.index') }}">
                            <b style="font-size:21px;margin-left:20px;">Adventurer</b>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Eventos Disponíveis <i class="fa fa-calendar-check"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Sugestão de Temas <i class="fa fa-book"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Sobre nós <i class="fa fa-users"></i>
                        </a>
                    </li>
                    <li class="right" style="margin-top:4px;">
                        <a href="">
                            Login/Cadastro <i class="fa fa-user-secret"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Application Body -->
            <div class="application-body">
                @yield('content')
            </div>

            <!-- Application Body -->
            <div class="application-footer">
                <div class="icons">
                    <i class="fab fa-facebook-square facebook-blue"></i>
                </div>
            </div>
        </div>
    </body>

    <!-- Laravel Script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- FullCalendar Scripts -->
    <script src='{{ asset('fullcalendar/lib/moment.min.js') }}'></script>
    <script src='{{ asset('fullcalendar/fullcalendar.js') }}'></script>
    <script src='{{ asset('fullcalendar/locale/pt-br.js') }}'></script>

    @section('scripts')
    @show
</html>