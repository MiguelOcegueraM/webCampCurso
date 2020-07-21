//IIEFI
(function() {
    'use strict';

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function() {

        // campos datos de usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');
        //campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //botones y divs
        if (document.getElementById('calcular')) {
            var calcular = document.getElementById('calcular');
            var errorDiv = document.getElementById('error');
            var botonRegistro = document.getElementById('btnRegistro');
            var lista_productos = document.getElementById('lista-productos');
            var suma = document.getElementById('suma-total');

            //Extras
            var etiquetas = document.getElementById('etiquetas');
            var camisas = document.getElementById('camisa_evento');

            // eventos que llaman a funciones
            calcular.addEventListener('click', calcularMontos);
            pase_dia.addEventListener('blur', mostrarDias);
            pase_dosdias.addEventListener('blur', mostrarDias);
            pase_completo.addEventListener('blur', mostrarDias);

            nombre.addEventListener('blur', validarCampos);
            apellido.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarMail);

        }

        //Calcular montos de venta
        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value === '') {
                alert("Debes elegir un regalo.")
                regalo.focus();
            } else {
                var boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                    boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                    cantCamisas = parseInt(camisas.value, 10) || 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                //Calcula el total
                var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);
                //Arreglo para mostrar resumen de productos comprados con un for
                var listadoProductos = new Array();

                if (boletosDia >= 1) {
                    listadoProductos.push(boletosDia + ' Pases por dia ');
                }

                if (boletos2Dias >= 1) {
                    listadoProductos.push(boletos2Dias + ' Pases por 2 dias ');
                }

                if (boletoCompleto >= 1) {
                    listadoProductos.push(boletoCompleto + ' Pases completos ');
                }

                if (cantCamisas >= 1) {
                    listadoProductos.push(cantCamisas + ' Camisas ');
                }

                if (cantEtiquetas >= 1) {
                    listadoProductos.push(cantEtiquetas + ' Stickers ');
                }

                lista_productos.style.display = "block";
                lista_productos.style.fontWeight = "bold";
                lista_productos.innerHTML = '';
                for (var i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + '</br>';
                }

                //Imprimir un total
                suma.innerHTML = `$ ${totalPagar.toFixed(2)} mxn.`;
            }
        }
        //ELEGIR LOS TALLERES POR DIA
        function mostrarDias() {
            var boletosDia = parseInt(pase_dia.value, 10) || 0,
                boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                boletoCompleto = parseInt(pase_completo.value, 10) || 0;

            var diasElegidos = new Array();

            if (boletosDia > 0) {
                diasElegidos.push('viernes');
            }
            if (boletos2Dias > 0) {
                diasElegidos.push('viernes', 'sabado');
            }
            if (boletoCompleto > 0) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            for (var i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }

        //Validar botones calcular y pago y campos de datos
        function validarCampos() {
            if (this.value == '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Este campo es obligatorio."
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            } else {
                errorDiv.style.display = '';
                errorDiv.innerHTML = " ";
                this.style.border = '1px solid #00bb2d';
                errorDiv.style.border = '';
            }
        }

        function validarMail() {
            if (this.value.indexOf("@") > -1) {
                errorDiv.style.display = '';
                this.style.border = '1px solid #00bb2d';
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "El correo proporcionado es incorrecto."
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }
        }

        // mapa
        cargarMapa();

        function cargarMapa() {

            var map = L.map('mapa').setView([19.258899, -463.69037], 16);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([19.258899, -463.69037]).addTo(map)
                .bindPopup('GDLWebCamp 2020 </br> Boletos Ya Disponibles')
                .openPopup()
                .bindTooltip('Centro de Convenciones Allegra')
                .openTooltip();
        }


    }); //DOM CONTENT LOADED
})();


// Programa de conferencias con JQuery
$(function() {

    //Lettering
    $('.nombre-sitio').lettering();

    //MENU FIJO

    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({ 'margin-top': barraAltura + 'px' });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });
        }
    });

    //menu responsive
    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });

    //conferencias
    $('div.ocultar').hide()
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('div.ocultar').hide()
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    // funcion para contador animaciones
    $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 1500);
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1500);

    //funcion contador dias con countdown js
    $('.cuenta-regresiva').countdown('2020/12/10 09:00:00', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });



});