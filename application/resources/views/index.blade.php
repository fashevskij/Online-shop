<!DOCTYPE html>
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
<!-- navigation Start -->
<section class="container-fluid position-fixed" style="z-index: 100; top: 0">
    @include('part/topbar')
    @include('part.nav')
</section>
<!-- navigation End -->

<!-- banner Start -->
<section class="mb-5" style="margin-top: 100px">
    <div class="row border-top">
        <div class="col-lg-12">
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('storage/img/carousel-1.jpg')}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">10% На первый заказ
                                </h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Монтажных клеев</h3>
                                <a href="" class="btn btn-light py-2 px-3">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('storage/img/carousel-2.jpg')}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">20% Скидка
                                </h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Пены</h3>
                                <a href="" class="btn btn-light py-2 px-3">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
<!-- banner End -->

<!-- category Start -->
<section class="mb-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Продукты</span></h2>
    </div>
    <div class="row  justify-content-center">
        <a class="btn col-lg-2 col-10 col-md-3 m-1 shadow-none d-flex align-items-center justify-content-between bg-primary text-white  text-center"
           href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;border-radius: 10px">
            <h6 class="mx-auto">Монтажные клея</h6>
        </a>
        <a class="btn col-lg-2 col-10 col-md-3 m-1 shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100 text-center"
           href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;border-radius: 10px">
            <h6 class="mx-auto">Герметики</h6>
        </a>
        <a class="btn col-lg-2 col-10 col-md-3 m-1 shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100 text-center"
           href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;border-radius: 10px">
            <h6 class="mx-auto">Монтажные пены</h6>
        </a>
        <a class="btn col-lg-2 col-10 col-md-3 m-1 shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100 text-center"
           href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;border-radius: 10px">
            <h6 class="mx-auto">Материалы спецназначения</h6>
        </a>
    </div>
</section>
<!-- category End -->

<!-- best sales Start
<section class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Топ продаж</span></h2>
    </div>
    <div class="bg-transparent my-4 p-2" style="position: relative">
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
        </div>
    </div>
</section>
best sales End -->

<!-- stock Start -->
<section class="splide__slide__container">
    <div class="text-center">
        <h2 class="section-title px-5"><span class="px-2">Топ продаж</span></h2>
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
<!-- stock End -->
<section class="row col-12 container-fluid justify-content-center mb-5">
    <div class="col-md-6 mt-2 ">
        <div class="text-center">
            <h2 class="section-title px-5"><span class="px-2">О компании</span></h2>
        </div>
        <h6>«Полимер-Лак» — на сегодня единственное предприятие в Украине, которое производит акриловые клеи. Оно зашло
            на рынок лакокрасочных изделий в 1993 году в статусе производственно-коммерческой фирмы. Благодаря активной
            деятельности и штату профессионалов мы выросли до высокотехнологичного производства. В 2007 году наше
            предприятие дало старт проекту под названием «Производство акриловых и силиконовых герметиков, клеев». В
            рамках его выпускается продукция торговой марки LACRYSIL. Удобство использования, высокое качество и
            доступные цены этих товаров покупатели оценили по достоинству, поэтому проект успешно развивается и сегодня.

        </h6>
        <span><a href="#">больше о компании</a></span>
    </div>

    <div class="col-md-6  mt-2">
        <div class="text-center">
            <h2 class="section-title px-5"><span class="px-2">Новости</span></h2>
        </div>
        <h6>45 дней на запуск производства, история маленькой нашей победы!!!

            24.02.2022. …. Шок и Ужас!… ВОЙНА!…. Страх!…. В душе еще есть НАДЕЖДА, что
            все сейчас должно прекратиться. Но… НЕТ… ! Калейдоскоп трагических новостей о
            погибших , о захватах украинских территорий….

            Еще вчера никто не мог и представить масштабы этого безумия. И вот
            очередная убивающая новость – оккупация российскими войсками нашего завода
            Полимер Лак.. Что дальше?… Все потеряно???….

            Но нас не сломать , мы продолжаем бороться: поддерживаем ВСУ, работников
            и их семьи и принимаем важное решение о строительстве нового производства в
            Киеве.

            По началу эта идея кажется нереальной. Запуск нового производства в
            военное время без оборудования, сырья, когда ключевые сотрудники разбросаны
            по стране: технический директор в рядах ВСУ, технологии монтажники … в рядах
            теробороны, финансисты без связи на оккупированной территории… — это
            невыполнимая задача.
        </h6>
        <span><a href="#">больше новостей</a></span>
    </div>
</section>

<!-- news start
<section class="splide__slide__container">
    <div class="text-center">
        <h2 class="section-title px-5"><span class="px-2">Новости</span></h2>
    </div>
    <div class="container-fluid splide" id="news-slider" data-splide='{"type":"loop","perPage":3}'>
        <div class="row px-xl-5">
            <div class="splide__track">
                <div class=" splide__list">
                    <figure class="snip1208  col-md-6 col-sm-6 col-xs-6 pb-1 col-6 splide__slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample66.jpg" alt="sample66"/>
                        <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
                        <i class="ion-checkmark"></i>
                        <figcaption>
                            <h3>The World Ended Yesterday</h3>
                            <p>
                                I don't need to compromise my principles, because they don't have the slightest bearing
                                on what happens to me anyway.
                            </p>
                            <button>Read More</button>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure class="snip1208   col-md-6 col-sm-6 col-xs-6 pb-1 col-6 splide__slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample9.jpg" alt="sample9"/>
                        <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
                        <i class="ion-checkmark"> </i>
                        <figcaption>
                            <h3>An Abstract Post Heading</h3>
                            <p>
                                Sometimes the surest sign that intelligent life exists elsewhere in the universe is that
                                none of it has tried to contact us.
                            </p>
                            <button>Read More</button>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure class="snip1208   col-md-6 col-sm-6 col-xs-6 pb-1 col-6 splide__slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample6.jpg" alt="sample6"/>
                        <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
                        <i class="ion-checkmark"> </i>
                        <figcaption>
                            <h3>Down with this sort of thing</h3>
                            <p>
                                I don't need to compromise my principles, because they don't have the slightest bearing
                                on what happens to me anyway.
                            </p>
                            <button>Read More</button>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>

</section>
 news start -->
<div class="" >
    <div class="row justify-content-md-center">
        <div class="col-md-6 col-12 py-3 bg-secondary">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Каталог</span></h2>
                <p>Каталог нашей продукции</p>
                <button class="btn btn-primary px-4" style="border-radius: 10px">Download</button>
            </div>

        </div>
        <div class="col-md-6 col-12 py-3 text-center">
            <h4 class="card-title">Появились вопросы? можете написать нам и мы с радостью ответим!</h4>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0"
                 id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden container" style="height: max-content">
                    <div class="nav-item dropdown show ropdown-toggle col-12 mt-2 text-truncate">
                        <button data-toggle="dropdown" class="btn btn-primary px-4 m-3" style="border-radius: 10px">Написать нам<i class="fa fa-angle-down float-right pl-5 "></i></button>
                        <div class="dropdown-menu border-0 rounded-0 w-100 m-0 " style="border-radius: 10px !important;" >
                            <div class="contact-form m-3" >
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name"
                                               required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email"
                                               required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Message"
                                      required="required"
                                      data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary py-2 px-4" style="border-radius: 10px !important;" type="submit" id="sendMessageButton">Send
                                            Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- footer start -->
@include('part/footer')
<!-- footer end -->
</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</html>
