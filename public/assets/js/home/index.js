$(document).ready(function () {
    checked();
    contagemDePassageiros();

})
var tempoInicial = $('#contador-passageiros').text(1);
function checked() {
    $('.radio-soida').on("click", function () {
        if ($('.radio-soida').is(':checked')) {
            $('.destino-date').attr('disabled', true);
        }
    });
    $('.radio-idavolta').on("click", function () {
        if ($('.radio-idavolta').is(':checked')) {
            $('.destino-date').attr('disabled', false);
        }
    });
}

function contagemDePassageiros() {
                        //adultos
    var count = 0;
    $('.icon-add').on('click', function () {
        count++;
        $('#contador-passageiros').text(count);
        if ($('#contador-passageiros').text() == "10") {
            $('.icon-add').attr('disabled', true);
        }
        if ($('#contador-passageiros').text() == "1") {
            $('.icon-remove').attr('disabled', true);
        } else {
            $('.icon-remove').attr('disabled', false);
        }
    })
    $('.icon-remove').on('click', function () {
        count--;
        tempoInicial = $('#contador-passageiros').text(count);
        if ($('#contador-passageiros').text() == "1") {
            $('.icon-remove').attr('disabled', true);
        } else {
            $('.icon-remove').attr('disabled', false);
        }
        if ($('#contador-passageiros').text() != "10") {
            $('.icon-add').attr('disabled', false);
        }
    })

                        //crianças
    var countCriancas = 0;
    $('.icon-add-criancas').on('click', function () {
        countCriancas++;
        $('.passageiros-input').val('3');
        $('#contador-criancas').text(countCriancas);
        if ($('#contador-criancas').text() == "10") {
            $('.icon-add-criancas').attr('disabled', true);
        }
        if ($('#contador-criancas').text() == "0") {
            $('.icon-remove-criancas').attr('disabled', true);
        } else {
            $('.icon-remove-criancas').attr('disabled', false);
        }
    })
    $('.icon-remove-criancas').on('click', function () {
        countCriancas--;
        $('.passageiros-input').val('3');
        $('#contador-criancas').text(countCriancas);
        if ($('#contador-criancas').text() == "0") {
            $('.icon-remove-criancas').attr('disabled', true);
        } else {
            $('.icon-remove-criancas').attr('disabled', false);
        }
        if ($('#contador-criancas').text() != "10") {
            $('.icon-add-criancas').attr('disabled', false);
        }
    })

                        //bebes
    var countBebes = 0;
    $('.icon-add-bebes').on('click', function () {
        countBebes++;
        $('.passageiros-input').val('3');
        $('#contador-bebes').text(countBebes);
        if ($('#contador-bebes').text() == "10") {
            $('.icon-add-bebes').attr('disabled', true);
        }
        if ($('#contador-bebes').text() == "0") {
            $('.icon-remove-bebes').attr('disabled', true);
        } else {
            $('.icon-remove-bebes').attr('disabled', false);
        }
    })
    $('.icon-remove-bebes').on('click', function () {
        countBebes--;
        $('.passageiros-input').val('3');
        $('#contador-bebes').text(countBebes);
        if ($('#contador-bebes').text() == "0") {
            $('.icon-remove-bebes').attr('disabled', true);
        } else {
            $('.icon-remove-bebes').attr('disabled', false);
        }
        if ($('#contador-bebes').text() != "10") {
            $('.icon-add-bebes').attr('disabled', false);
        }

    })
                        //soma
    $('.botao-soma').on('click', function () {
        var somaAdultos = parseInt($('#contador-passageiros').text());

        var somaBebes = parseInt($('#contador-bebes').text());

        var somaCriancas = parseInt($('#contador-criancas').text())

        var soma = somaAdultos + somaBebes + somaCriancas;
        if(soma == 10 ){
            $('.botao-soma').attr('disabled', true);
        }else{
            $('.botao-subtracao').on('click', function(){
                $('.botao-soma').attr('disabled', false);
            })
        }
        console.log($('.passageiros-input').val(soma));
    })

}



