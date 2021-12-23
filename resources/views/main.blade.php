<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @component('site.layout.head')
    @endcomponent
</head>

<body>
    <header>
        @component('site.components.header.index')
        @endcomponent
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @component('site.components.footer.index')
        @endcomponent
    </footer>

    @component('site.layout.scripts')
    @endcomponent

    <!-- 
    <span class="contact-whatsapp">
        <a href="#">
            <i class="fab fa-whatsapp-square"></i>
        </a>
    </span>
-->

</body>

</html>