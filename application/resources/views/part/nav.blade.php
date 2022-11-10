
<nav class="navbar row navbar-expand-lg bg-light navbar-light py-lg-0">
    <a href="" class="text-decoration-none d-block mt-2" >
        <h1 class=" m-0 display-5 font-weight-semi-bold" ><span
                class="text-primary font-weight-bold mr-1">Lacrysil</span>
        </h1>
    </a>
    <div class="text-decoration-none d-block position-absolute" style="right: 5rem; top: 10px">
    @include('part.cart')
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="/home" class="nav-item nav-link active">Главная</a>
            <a href="/shop" class="nav-item nav-link">Магазин</a>
            <a href="#" class="nav-item nav-link">Новости</a>
            <a href="#" class="nav-item nav-link">База знаний</a>
            <a href="/contact" class="nav-item nav-link">Контакты</a>
        </div>
        <div class="col-lg-3 mt-2">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="">Ru</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Ua</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">En</a>
            </div>
        </div>
    </div>

</nav>
