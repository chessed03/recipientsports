<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta keywords = "estructura básica, estructura general"/>
    <meta description = "Sitio con Estructura General"/>

    <title>Sitio en construcción</title>

    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <style>
        /* GLOBAL STYLES
-------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }
        /* rtl:begin:ignore */
        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }
        /* rtl:end:ignore */


        /* Featurettes
        ------------------------- */

        .featurette-divider {
            margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        /* rtl:begin:remove */
        .featurette-heading {
            letter-spacing: -.05rem;
        }

        /* rtl:end:remove */

        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }
    </style>

</head>

<body>

<header>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #1c3550">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Revista Sport News</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Deportes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post-index') }}">Prueba Posts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<main>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <div class="container">
            <div class="row mt-4">
                <div class="col-4">
                    <img src="https://static.vecteezy.com/system/resources/previews/005/093/329/original/most-popular-sport-illustration-free-vector.jpg" alt="" width="350" height="248" sizes="(max-width: 767px) 100vw, 33vw">
                </div>
                <div class="col-4">
                    <img src="data:image/jpeg;base64,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" alt="" width="350" height="248" sizes="(max-width: 767px) 100vw, 33vw">
                </div>
                <div class="col-4">
                    <img src="https://ogbu.unmsm.edu.pe/wp-content/uploads/2017/09/deportes-1024x432.jpg" alt="" width="350" height="248" sizes="(max-width: 767px) 100vw, 33vw">
                </div>
            </div>
        </div>

    </div><!-- /.container -->

</main>


<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
