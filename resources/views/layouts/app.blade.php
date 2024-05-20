<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content here -->
</head>
<body>
    @include('header') <!-- Include the header -->
    
    <div class="container">
        @yield('content') <!-- Include the content of the other page -->
    </div>
    
    <!-- Footer and other common elements here -->
</body>
</html>