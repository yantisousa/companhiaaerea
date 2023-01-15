@extends('layout.menu')
@section('content')
    <style>
        .capa-home {
            position: absolute;
            bottom: 500px;
            left: 40%;
            width: 450px
        }

        .full-campo-passagem {
            border-radius: 20px;
            height: 200px;
            width: 1000px;
            margin-left: 24%;
            margin-top: 300px;
            background-color: #2f328d;
            color: white;
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
            margin-left:160px;
        }
    </style>
    <div>
        <img src="{{ url('assets/img/capa-home.png') }}" alt="" class="capa-home">
        <div class="full-campo-passagem">
            <h3>Passagens Aéreas</h3>
            <div class="form-check form-check-inline check">
                <input class="form-check-input radio-soida" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                <label class="form-check-label" for="inlineRadio1">Só ida</label>
            </div>
            <div class="form-check form-check-inline check">
                <input class="form-check-input radio-idavolta" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
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
                    <input type="date" class="form-control destino-date" placeholder="Destino" aria-label="Last name">
                </div>
            </div>
            <div class="col-2 btn-modal">
                <label for="">Passageiros</label>
                <input type="button" class="form-control passageiros-input" value="1" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
            </div>
            <button type="button" class="btn btn-info btn-busca">Buscar</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 tittle-passageiros"  id="exampleModalLabel">Passageiros</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                    <button class="icon-add-criancas botao-soma"><i class="large material-icons ">add</i></button>
                            </div>
                            <div class="bebes">
                                <h6>Bêbes</h6>
                                <span>Entre 0 e 2 anos</span><br>
                                <button class="icon-remove-bebes botao-subtracao" disabled><i
                                        class="large material-icons ">remove</i></button>
                                <span id="contador-bebes">0</span>
                                <button class="icon-add-bebes botao-soma"><i class="large material-icons ">add</i></button>
                            </div>

                            <button type="button" data-bs-dismiss="modal" class="btn btn-primary aplicar">APLICAR</button><br>
                            <span class="max-people">Máximo: 10 pessoas</span>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/home/index.js"></script>
@endsection
