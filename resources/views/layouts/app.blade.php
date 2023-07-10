<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        @include('includes.backsite.meta')

        <title>@yield('title') | MYTUTORIA</title>

        @stack('before-style')
            @include('includes.backsite.style')
        @stack('after-style')

    </head>
    <body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

        @include('components.backsite.header')
        @include('components.backsite.menu')
            
        @yield('content')

        @stack('before-script')
            @include('includes.backsite.script')
        @stack('after-script')
        
    </body>
</html>
