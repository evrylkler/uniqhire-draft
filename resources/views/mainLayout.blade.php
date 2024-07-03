<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="content-container container-fluid">
        @yield('auth-content')
    </div>
</body>
<style>
    * {
        font-family: "DM Sans", sans-serif;
        font-size: 1.1rem;
    }

    body {
        background-color: rgba(242, 241, 238, 1);
    }

    .auth-labels {
        display: inline-block;
        width: 40rem;
    }

    .btn-color {
        background-color: rgba(4, 176, 0, 1);
        color: rgba(255, 255, 255, 1);
        font-weight: bold;
        height: 3.5rem;
        width: 40rem;
    }
    
    /* login part */

   .content-container {
        padding: 0 20px 0 20px;
    }

    .main-content {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .logo-img {
        height: 10rem;
    }
    
    .side-image {
        background-image: url("../images/side-img1.png");
        background-position: left;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        width: 90rem;
        border-top-right-radius: 2rem;
        border-bottom-right-radius: 2rem;
    }

    .custom-row {
        height: 50rem;
        width: 90rem;
        /* border: 1px solid lightgray; */
        background-color: #ffff;
        border-radius: 2rem;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .left {
        margin: 5rem;
    }
</style>
</html>
