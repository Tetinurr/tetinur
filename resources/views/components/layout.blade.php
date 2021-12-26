<html>

<head>
    <title>{{ $title ?? 'Default' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="./css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,700;0,900;1,200;1,400&display=swap"
        rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    
    </style>


    <!-- Custom styles for this template -->
    <link href="footers.css" rel="stylesheet">
    </style>
</head>

<body>

    <main>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #cfa57b;">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <b>Ruang Matematika</b></b>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="localhost.8000/">About</a>
                            <a class="nav-link" href="https://ditsmp.kemdikbud.go.id/matematika/"
                                target="_blank">Moduls</a>
                            <a class="nav-link" href="https://wa.me/62895344738664" target="_blank">Contact</a>
                            <div class="snavbar-nav"> <a class="btn btn-outline-Light"
                                    href="https://ditsmp.kemdikbud.go.id/matematika/" target="_blank"><b>Join
                                        Now</b></a>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </header>
        {{ $slot }}
    </main>

</body>

</html>