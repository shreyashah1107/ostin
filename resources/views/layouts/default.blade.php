<!DOCTYPE html>
<html class="html" lang="{{ app()->getLocale() }}">
    @include('includes.head')
    <body>
        <div class="wrapper">
            <div id="content">
                {{-- Navigation --}}
                    @include('includes.navigation')
                {{-- End of navigation --}}

                <!-- body start -->
                <main>
                    @yield('content')
                </main>
                <!-- body end -->

                @include('includes.footer')
            </div>
        </div>
        @yield('modal')
        @yield('page-scripts')
    </body>
</html>
