<!doctype html>
<html lang="en">

<!-- Head -->
@include('partials.head')
<!-- End Of Head -->

<body>
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End Of Navbar -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Menu -->
            @include('partials.sidebar')
            <!-- End Of Sidebar Menu -->

            <!-- Main Content  -->
            @if(isset($slot))
            {{$slot}}
            @else

            @yield('content')
            
            @endif
            <!-- End Of Main Content -->
        </div>
    </div>
    @livewireScripts
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/datatable.js') }}"></script>
    @yield('script')
</body>

</html>
