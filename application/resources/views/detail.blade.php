<!doctype html>
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

@include('part/topbar')
<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-9">
            @include('part.nav')
        </div>
    </div>
</div>


<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Ms polymer</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Главная</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Ms-polymer</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-3 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="https://lacrysil.ua/wp-content/uploads/MS-Polymer-816x816.jpg"
                             alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 100" src="https://lacrysil.ua/wp-content/uploads/mastyka-816x816.jpg"
                             alt="Image">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold mb-3">MS polymer</h3>

            <div class="d-flex clearfix mb-3">
                <h6>$123.00</h6>
                <h6 class="text-muted ml-2">
                    <del>$123.00</del>
                </h6>

            </div>
            <p class="mb-4">Заменяет 7 видов продуктов:
                Монтажный клей; Силиконовый герметик; Полиуретановый клей; Столярный клей; Герметик для кровли;
                Акриловый герметик; Герметик для окон и стекол.</p>

            <div class=" gap-2 my-1 pt-2">
                <a href="/add" class=" btn btn-success " style="border-radius: 10px"><i
                        class="fas fa-shopping-cart mr-1"></i>add to cart</a>
            </div>
        </div>
    </div>

    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Описание</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Особености</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">

                    <p> Универсальный клей для металла, анодированного алюминия, стекла, зеркала, дерева, окрашенного
                        дерева, бетона, гипса, штукатурки, плитки, пластмассы (ПВХ, полиакрилаты, поликарбонаты),
                        натурального и декоративного камня, изолирующих материалов (пенополистирола, минеральной ваты),
                        при устройстве вентиляции, фасадов, сандвич-панелей, склеивание металлических деталей и
                        герметизация узлов работающих под большой вибронагрузкой и т. д. </p>

                    <p> Универсальный герметик для всех швов, соединений, трещин, неровностей в строительстве и
                        промышленности, а также в помещениях с повышенной влажностью, как уплотнение в стеклопакетах -
                        герметизация оконных и дверных блоков, клеит и герметизирует кровельные материалы (черепицу,
                        шифер, жесть). </p>

                    <p> Герметизация и склеивание в пищевой промышленности, в судостроении, авиастроении,
                        автомобилестроении, дорожные и мостовые строительства – деформационные швы, мебельной
                        промышленности.</p>

                    <p> Клей-герметик в виде легко наносимой геле образной массы прозрачного или белого цвета, имеет
                        высокую вязкость, благодаря которой легко наносится на горизонтальные, наклонные и вертикальные
                        поверхности. Не воспламеняется и не содержит никаких отравляющих веществ - силикона,
                        изоцианатов, растворителей, пластификаторов, поэтому может быть использован без специальных
                        предосторожностей и вреда для здоровья.</p>

                    <p> Имеет хорошее начальное время схватывания и приблизительно через 15 минут после нанесения (при
                        +23°C) готов для приклеивания всех типов покрытий на любое основание пола и стен. Окончательное
                        время высыхания 24-48 часов в зависимости от основания, покрытия, толщины клеевого слоя,
                        окружающей температуры и влажности. После полимеризации становится эластичным, прочным,
                        водостойким, морозоустойчивым покрытием и имеет высокое сцепление с основанием. Эластичность
                        позволяет выдержать деформации до 25 % при расширении и сжатии основания, связанные с колебанием
                        температуры и вибрациями.</p>

                    <p>Клей-герметик обладает водостойкостью, стойкостью к алифатическим растворителям, минеральным
                        маслам, смазочным материалам, разбавленным неорганическим кислотам, солям и щелочам.</p>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    • не дает усадки
                                </li>
                                <li class="list-group-item px-0">
                                    • образует прочный, водостойкий и эластичный шов;
                                </li>
                                <li class="list-group-item px-0">
                                    • устойчив к низким и высоким температурам без потери свойств от минус 40°С до
                                    +100°С;
                                </li>
                                <li class="list-group-item px-0">
                                    • адгезия к влажным поверхностям;
                                </li>
                                <li class="list-group-item px-0">
                                    • обладает всеми преимуществами силикона и полиуретана;
                                </li>
                                <li class="list-group-item px-0">
                                    • применяется для внутренних и наружных работ;
                                </li>
                                <li class="list-group-item px-0">
                                    • поглощает акустические и механические колебания;
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->


<!-- Products Start -->
<section class="splide__slide__container">
    <div class="text-center">
        <h2 class="section-title px-5"><span class="px-2">Похожие товары</span></h2>
    </div>
    <div class="container-fluid py-5 splide" id="product-slider">
        <div class="row px-xl-5">
            <div class="splide__track">
                <div class=" splide__list">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 pb-1 col-9 splide__slide">
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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 pb-1 col-9 splide__slide">
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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 pb-1 col-9 splide__slide">
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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 pb-1 col-9 splide__slide">
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Products End -->

<!-- Footer Start -->
@include('part.footer')
<!-- Footer End -->
<script>

    var i = 1;

    function buttonClickInc() {
        i++;
        document.getElementById('quantity').value = i;
    }

    function buttonClickDec() {
        if (i > 1) {
            i--;
            document.getElementById('quantity').value = i;
        } else {
            i = 1;
        }
    }

</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('resources/js/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('resources/js/main.js')}}"></script>
</body>
</html>
