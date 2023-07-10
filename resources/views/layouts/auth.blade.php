<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        @include('includes.frontsite.meta')

        <title>@yield('title') | Car Rental</title>

        @stack('before-style')
            @include('includes.frontsite.style')
        @stack('after-style')

    </head>
    <body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

        {{-- @include('components.auth.header') --}}
            
        @yield('content')
        


        @stack('before-script')
            @include('includes.frontsite.script')
        @stack('after-script')

    </body>
</html>
