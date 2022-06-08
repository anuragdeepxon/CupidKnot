<!DOCTYPE html>
<html>

<head>
    <x-master />
</head>

<body>
    <img id="bg" src="{{ URL::asset('images/bg.jpg') }}" class="absolute bg-cover bg-fixed bg-no-repeat bg-center" />
    @yield('content')

</body>

</html>
