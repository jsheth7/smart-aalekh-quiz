<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

@include('layouts.navtop')

    <!-- Page Content -->

        <div class="container-fluid">

            <div class="row">

                @include('layouts.navside')

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    @yield('content')
                </main>

            </div>

        </div>

@include('layouts.footer')

</body>

</html>
