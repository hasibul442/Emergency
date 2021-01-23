@include('include._link')

<div id="app">
    <!--- Sidebar Start---->
    @include('include._sidebar')
    <!--- Sidebar End---->
    <div id="main">
        <!---  Nav bar Start---->
        @include('include._nav')
        <!---  Nav bar End---->

        @yield('content')

        @include('include._footer')
    </div>
</div>
@include('include._script')
