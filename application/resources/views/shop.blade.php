<html lang="en">

<head>
    <meta charset="utf-8">
    <title>title</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('resources/css/app.css')}}">
    <link href="{{asset('resources/css/slider.css')}}">
    <script src="{{asset('resources/js/slider.js')}}"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/slider.js')
    @vite('resources/css/slider.css')
</head>

<body>
<!-- Topbar Start -->

<!-- Topbar End -->

@include('part/topbar')
<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-9">
            @include('part.nav')
        </div>
    </div>
</div>
<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Магазин</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="/home">Главная</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Магазин</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Shop Start -->
<div class="container-fluid pt-3">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-lg-block mb-3">
            @include('part/category')
        </div>

        <!-- Shop Sidebar End -->

        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-12">
            <div class="row pb-3">
                <div class="container-fluid bg-trasparent  p-2" style="position: relative">
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                        <div class="col hp mt-2">
                            <div class="card h-100 shadow-sm">
                                <span>
                                    <img src="https://lacrysil.ua/wp-content/uploads/MS-Polymer-816x816.jpg"
                                         class="card-img-top" alt="product.title"/>
                                </span>

                                <div class="label-top shadow-sm">
                                    <h2 class="text-black">MS polymer</h2>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center clearfix mb-3">
                                        <h6>$123.00</h6>
                                        <h6 class="text-muted ml-2">
                                            <del>$123.00</del>
                                        </h6>
                                    </div>
                                    <h5 class="card-title">
                                        <a href="/ms-polymer">Заменяет 7 видов продуктов:
                                            Монтажный клей; Силиконовый герметик; Полиуретановый клей; Столярный клей;
                                            Герметик для кровли; Акриловый герметик; Герметик для окон и стекол.</a>
                                    </h5>
                                    <span class="position-absolute" style="top: 22.5rem;">...</span>
                                    <div class=" gap-2 my-2 pt-2">
                                        <a href="/add" class=" btn btn-success " style="border-radius: 10px"><i
                                                class="fas fa-shopping-cart mr-1"></i>add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col hp mt-2">
                            <div class="card h-100 shadow-sm">
                                <span>
                                    <img src="https://lacrysil.ua/wp-content/uploads/MS-Polymer-816x816.jpg"
                                         class="card-img-top" alt="product.title"/>
                                </span>

                                <div class="label-top shadow-sm">
                                    <h2 class="text-black">MS polymer</h2>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center clearfix mb-3">
                                        <h6>$123.00</h6>
                                        <h6 class="text-muted ml-2">
                                            <del>$123.00</del>
                                        </h6>
                                    </div>
                                    <h5 class="card-title">
                                        <a href="/ms-polymer">Заменяет 7 видов продуктов:
                                            Монтажный клей; Силиконовый герметик; Полиуретановый клей; Столярный клей;
                                            Герметик для кровли; Акриловый герметик; Герметик для окон и стекол.</a>
                                    </h5>
                                    <span class="position-absolute" style="top: 22.5rem;">...</span>
                                    <div class=" gap-2 my-2 pt-2">
                                        <a href="/add" class=" btn btn-success " style="border-radius: 10px"><i
                                                class="fas fa-shopping-cart mr-1"></i>add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col hp mt-2">
                            <div class="card h-100 shadow-sm">
                                <span>
                                    <img src="https://lacrysil.ua/wp-content/uploads/MS-Polymer-816x816.jpg"
                                         class="card-img-top" alt="product.title"/>
                                </span>

                                <div class="label-top shadow-sm">
                                    <h2 class="text-black">MS polymer</h2>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center clearfix mb-3">
                                        <h6>$123.00</h6>
                                        <h6 class="text-muted ml-2">
                                            <del>$123.00</del>
                                        </h6>
                                    </div>
                                    <h5 class="card-title">
                                        <a href="/ms-polymer">Заменяет 7 видов продуктов:
                                            Монтажный клей; Силиконовый герметик; Полиуретановый клей; Столярный клей;
                                            Герметик для кровли; Акриловый герметик; Герметик для окон и стекол.</a>
                                    </h5>
                                    <span class="position-absolute" style="top: 22.5rem;">...</span>
                                    <div class=" gap-2 my-2 pt-2">
                                        <a href="/add" class=" btn btn-success " style="border-radius: 10px"><i
                                                class="fas fa-shopping-cart mr-1"></i>add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col hp mt-2">
                            <div class="card h-100 shadow-sm">
                                <span>
                                    <img src="https://lacrysil.ua/wp-content/uploads/MS-Polymer-816x816.jpg"
                                         class="card-img-top" alt="product.title"/>
                                </span>

                                <div class="label-top shadow-sm">
                                    <h2 class="text-black">MS polymer</h2>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center clearfix mb-3">
                                        <h6>$123.00</h6>
                                        <h6 class="text-muted ml-2">
                                            <del>$123.00</del>
                                        </h6>
                                    </div>
                                    <h5 class="card-title">
                                        <a href="/ms-polymer">Заменяет 7 видов продуктов:
                                            Монтажный клей; Силиконовый герметик; Полиуретановый клей; Столярный клей;
                                            Герметик для кровли; Акриловый герметик; Герметик для окон и стекол.</a>
                                    </h5>
                                    <span class="position-absolute" style="top: 22.5rem;">...</span>
                                    <div class=" gap-2 my-2 pt-2">
                                        <a href="/add" class=" btn btn-success " style="border-radius: 10px"><i
                                                class="fas fa-shopping-cart mr-1"></i>add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col hp mt-2">
                            <div class="card h-100 shadow-sm">
                                <span>
                                    <img src="https://lacrysil.ua/wp-content/uploads/MS-Polymer-816x816.jpg"
                                         class="card-img-top" alt="product.title"/>
                                </span>

                                <div class="label-top shadow-sm">
                                    <h2 class="text-black">MS polymer</h2>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center clearfix mb-3">
                                        <h6>$123.00</h6>
                                        <h6 class="text-muted ml-2">
                                            <del>$123.00</del>
                                        </h6>
                                    </div>

                                    <h5 class="card-title">

                                        <a href="/ms-polymer">Заменяет 7 видов продуктов:
                                            Монтажный клей; Силиконовый герметик; Полиуретановый клей; Столярный клей;
                                            Герметик для кровли; Акриловый герметик; Герметик для окон и стекол.</a>
                                    </h5>

                                    <div class=" gap-2 my-2">
                                        <a href="/add" class=" btn btn-success " style="border-radius: 10px"><i
                                                class="fas fa-shopping-cart mr-1"></i>add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 pb-1">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->

@include('part.footer')

</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
