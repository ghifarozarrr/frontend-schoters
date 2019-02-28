<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <title>{{config('app.name')}}</title>

        @yield('style')

        <style type="text/css">
            body {
                font-family: "Open Sans" !important;
            }

            header, .nav-link, .navbar-brand {
                color: #fff !important;
                font-family: Helvetica !important;
            }

            .navbar-brand {
                margin-right: 38px;
                font-family: Helvetica !important;
                font-size: 32pt;
            }

            .burger-toggle {
                padding-top: 4px;
                margin-left: 48px;
                margin-right: 26px;
            }

            .burger-toggle div {
              width: 26px;
              height: 3px;
              background-color: white;      
              margin-bottom: 4px;      

            }

            .bg-schoter {
                background-color: #38c4ca;
            }

            nav {
                height: 80px !important;
                min-width: 1500px;
            }

            .search-bar {
                width: 800px !important;
                font-family: Helvetica !important;
                font-size: 20pt !important;
                border: 2px solid #979797;
                border-radius: 1px;
                background-color: #fff;
                margin-right: 156px !important;
            }

            ::placeholder {
                color: #9b9b9b !important;
            }

            .navbar-nav.right .login{
                font-family: Helvetica !important;
                font-size: 20pt;
                color: #9b9b9b;
                width: 68px;
            }

            .fa {
                color: black;
            }

            .fa-bell {
                text-align: center;
                vertical-align: middle;
                padding: 10px;
            }

            .circle-icon {
                background: white;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                text-align: center;
                vertical-align: middle;
                margin-right: 4px;
                padding: 10px;
            }

            .circle-comment {
                background: #178fdd;
                color: white !important;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                text-align: center;
                vertical-align: middle;
                padding: 20px;
                margin-right: 4px;
                border: 1px solid #0B5789;
            }

            div.bottom-chat {
                position: fixed;
                bottom: 0;
                right: 0;
                padding-right: 65px;
                padding-bottom: 40px;
            }

            .breadcrumb-item{
                font-size: 20pt;
                color: #b2b0b0;
            }

            .breadcrumb-item a{
                font-size: 20pt;
                color: #b2b0b0;
            }

            .category {
                height: 50x;
                vertical-align: middle !important;
                font-size: 20pt;
                background-color: #fbfbfb;
                color: #545454;
                border: 1px solid #545454;
                border-radius: 25px;
                padding-right:15px;
                padding-left:15px;
                margin-bottom: 14px;
                margin-right: 18px;
                transition: all .2s ease-in-out;
            }

            .category:hover {
                cursor: pointer;
                transform: scale(1.05);
            }

            body {
                margin: 0;
                padding: 0;
            }
        </style>

    </head>
    <body>
        <header>
            @include('inc.navbar')    
        </header>
    	
        @yield('content')

        <div class="bottom-chat">
            <button type="button" class="btn"><i class="fa fa-comment fa-lg circle-comment"></i></button>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        @yield('script')
    </body>
</html>
