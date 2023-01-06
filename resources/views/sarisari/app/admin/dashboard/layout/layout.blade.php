<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> {{ Auth::user()->name }} | {{ config('app.name') }}</title>
        @include('sarisari.app.admin.dashboard.component.css')
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        @include('sarisari.app.admin.dashboard.component.top-navbar')
        
        <div id="layoutSidenav">
            
            @include('sarisari.app.admin.dashboard.component.left-sidebar')
            
            <div id="layoutSidenav_content">
                <main>
                    @yield('main-content')
                </main>
                
                @include('sarisari.app.admin.dashboard.component.footer')

            </div>
        </div>

        @include('sarisari.app.admin.dashboard.component.scripts')
    
    </body>
</html>
