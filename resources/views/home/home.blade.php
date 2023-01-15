@extends('layout.menu')
@section('content')
    <style>
        body {}

        @import url('https://fonts.cdnfonts.com/css/eurostile-extended');

        .capa-home {
            position: absolute;
            top: 430px;
            left: 40%;
            width: 400px
        }

        .full-campo-passagem {
            border-radius: 20px;
            height: 200px;
            width: 1000px;
            margin-left: 22.3%;
            margin-top: 100px;
            background-color: #dce2e3;
            color: black;
        }

        .full-campo-passagem h3 {
            margin-left: 30px;
            position: relative;
            top: 20px;
        }

        .check {
            position: relative;
            float: right;
            bottom: 10px;
            right: 7px;
        }

        .destino,
        .origem {
            position: relative;
            top: 40px;
            left: 20px;
        }

        .destino {
            position: relative;
            right: 30px;
        }

        .row {
            display: inline-flex
        }

        .destino-date,
        .origem-date {
            position: relative;
            right: 100px;
        }

        .btn-modal {
            float: right;
            position: relative;
            right: 160px;
            bottom: 22px;
        }

        .btn-busca {
            float: right;
            width: 70px;
            position: relative;
            left: 100px;
            top: 2px;
            background-color: #578f2f;
            border: none;
        }

        .icon-add {
            border: none;
            background-color: white;
        }

        .icon-remove {
            border: none;
            background-color: white;
        }

        .icon-add-criancas {
            border: none;
            background-color: white;
        }

        .icon-remove-criancas {
            border: none;
            background-color: white;
        }

        .icon-add-bebes {
            border: none;
            background-color: white;
        }

        .icon-remove-bebes {
            border: none;
            background-color: white;
        }

        .modal-body {
            color: black;
            height: 340px;
        }

        .modal-body h4 {
            text-align: center;
        }

        .modal-body h6 {
            color: #538b30;
            margin-left: 35px;

        }

        .criancas {
            position: relative;
            left: 180px;
            bottom: 50px;
        }

        .adultos {
            position: relative;
            top: 32px;
        }

        .bebes {
            position: relative;
            left: 350px;
            bottom: 130px;
        }

        .tittle-passageiros {
            color: black;
        }

        .aplicar {
            background-color: #538b30;
            border: none;
            width: 300px;
            margin-left: 80px;
        }

        .max-people {
            margin-left: 160px;
        }

        .carousel {
            position: relative;
            left: 320px;
            top: 70px;
            width: 300px;
            color: white;
        }

        .carousel-inner img {
            border-radius: 20px;
            height: 400px;
        }

        .body-ny {
            width: 1200px;
            margin-left: 17%;
            height: 400px;
            border-radius: 0 0 20px 20px;
        }

        .top-cidades {
            position: relative;
            left: 320px;
            top: 70px;
            width: 400px;
        }

        .card-people {
            position: relative;
            left: 800px;
            bottom: 330px;
            height: 400px;
        }

        .btn-ofertas {
            position: relative;
            left: 500px;
            bottom: 50px;
        }
        .top-ofertas {
            width: 400px;
            position: relative;
            left: 805px;
            top: 10px
        }
    </style>
    <div>
        <div>
            <img src="{{ url('assets/img/foto.jpg') }}" class="body-ny" alt="">
            {{-- <img src="{{ url('assets/img/capa-home.png') }}" alt="" class="capa-home"> --}}
            <div class="full-campo-passagem">
                <h3>Passagens Aéreas</h3>
                <div class="form-check form-check-inline check">
                    <input class="form-check-input radio-soida" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Só ida</label>
                </div>
                <div class="form-check form-check-inline check">
                    <input class="form-check-input radio-idavolta" type="radio" name="inlineRadioOptions"
                        id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Ida e Volta</label>
                </div>
                <div class="row">
                    <div class="col-4 origem">
                        <label for="">Origem</label>
                        <input type="text" class="form-control" placeholder="Origem" aria-label="First name">
                    </div>
                    <div class="col-4 destino">
                        <label for="">Destino</label>
                        <input type="text" class="form-control" placeholder="Destino" aria-label="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 origem">
                        <label for="">Ida</label>
                        <input type="date" class="form-control origem-date" placeholder="Origem" aria-label="First name">
                    </div>
                    <div class="col-5 destino">
                        <label for="">Volta</label>
                        <input type="date" class="form-control destino-date" placeholder="Destino"
                            aria-label="Last name">
                    </div>
                </div>
                <div class="col-2 btn-modal">
                    <label for="">Passageiros</label>
                    <input type="button" class="form-control passageiros-input" value="1" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                </div>
                <button type="button" class="btn btn-info btn-busca">Buscar</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 tittle-passageiros" id="exampleModalLabel">Passageiros</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="adultos">
                                    <h6>Adultos</h6>
                                    <span>Acima de 12 anos</span><br>
                                    <button class="icon-remove botao-subtracao" disabled><i
                                            class="large material-icons ">remove</i></button>
                                    <span id="contador-passageiros"></span>
                                    <button class="icon-add botao-soma"><i class="large material-icons ">add</i></button>
                                </div>
                                <div class="criancas">
                                    <h6>Crianças</h6>
                                    <span>Entre 2 e 11 anos</span><br>
                                    <button class="icon-remove-criancas botao-subtracao" disabled><i
                                            class="large material-icons ">remove</i></button>
                                    <span id="contador-criancas">0</span>
                                    <button class="icon-add-criancas botao-soma"><i
                                            class="large material-icons ">add</i></button>
                                </div>
                                <div class="bebes">
                                    <h6>Bêbes</h6>
                                    <span>Entre 0 e 2 anos</span><br>
                                    <button class="icon-remove-bebes botao-subtracao" disabled><i
                                            class="large material-icons ">remove</i></button>
                                    <span id="contador-bebes">0</span>
                                    <button class="icon-add-bebes botao-soma"><i
                                            class="large material-icons ">add</i></button>
                                </div>

                                <button type="button" data-bs-dismiss="modal"
                                    class="btn btn-primary aplicar">APLICAR</button><br>
                                <span class="max-people">Máximo: 10 pessoas</span>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>


        <h4 class="top-cidades"><b>Top destinos mais buscados hoje no Brasil</b> </h4>
        <h4 class="top-ofertas"><b>Ofertas que não podem esperar
        </b> </h4>
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ url('assets/img/fortaleza.jpg') }}" class="d-block w-100 imagem-class" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fortaleza</h5>

                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ url('assets/img/rio.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Rio de Janeiro</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/sp.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>São Paulo</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card card-people" style="width: 700px;" style="height: 420px;">
            <img src="{{ url('assets/img/people.jpg') }}" style="height: 310px;" class="card-img-top" alt="...">
            <div class="card-body card-ofertas";">
                <p class="card-text">Se você ainda não definiu o seu destino, talvez te <br> interesse ver a nossa seção de
                    ofertas.</p>
                <button class="btn btn-info btn-ofertas">Ver ofertas

                </button>
            </div>
        </div>
    </section>
    <link href="https://fonts.cdnfonts.com/css/eurostile-extended" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/home/index.js"></script>
@endsection
