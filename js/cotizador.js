(function(){ //JS
    //"use strict"; //Para que se ejecute Estrictamente.

    var regalo = document.getElementById('regalo');//Creamos la variable Global, porque la utilizaremos en varias funciones.
    
    document.addEventListener('DOMContentLoaded', function(){
     if(document.getElementById('mapa')) { 
        //MAPA.
        var map = L.map('mapa').setView([14.157185, -87.04295], 18);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([14.157185, -87.04295]).addTo(map)
            .bindPopup('GDLWebCamp 2020 <br> Boletos Ya Disponibles')
            .openPopup();

    };

        // Campos Datos Usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        // Campos Pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        // Botonos y Divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');
        var viernes = document.getElementById('viernes');
        var sabado = document.getElementById('sabado');
        var domingo = document.getElementById('domingo');

        // Extras
        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');
        
        //Deshabilitar boton PAGAR hasta que se le de Calcular.
        if(document.getElementById('btnRegistro')){
            botonRegistro.disabled = true;
        }

     //--------------------------inicio-------------------------------------------------------------------------------------   
        if(document.getElementById('calcular')) {

        calcular.addEventListener('click', calcularMontos);//Cuando se de Click en el boton calcular, funcionara.
        
        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        //**EDITAR LOS REGISTROS MANUALMENTE -- SI HAY BOLETOS(ALGO EN EL VALUE) SE MOSTRARAN LOS DIAS Y CONFERENCIAS */
        var formulario_editar = document.getElementsByClassName('editar-registrado');
        if(formulario_editar.length > 0){
            if(pase_dia.value || pase_dosdias.value || pase_completo.value){
                mostrarDias();
            } 
        }

        //VALIDAR CAMPOS
        nombre.addEventListener('blur', validadCampos);
        apellido.addEventListener('blur', validadCampos);
        email.addEventListener('blur', validadCampos);
        email.addEventListener('blur', validadMail);

        //Funcion para VALIDAR CAMPOS.
        function validadCampos(){
            if(this.value == ''){
                errorDiv.style.display = 'block';//Para MOSTRAR el Error.
                errorDiv.innerHTML = " * Este campo es obligatorio"
                errorDiv.style.color = 'red';
                this.style.border = '2px solid red';
                error.style.border = '2px solid red';
            } else {
                errorDiv.style.display = 'none';//Para OCULTAR el Error.
                this.style.border = '1px solid #cccccc'; 
            }
        }

        function validadMail(){
            if(this.value.indexOf("@") >-1){//INDEXOF, buscara en una Cadena, el caracter que le pasemos, en este caso "@".
                errorDiv.style.display = 'none';//Para OCULTAR el Error.
                this.style.border = '1px solid #cccccc';   
            } else {
                errorDiv.style.display = 'block';//Para MOSTRAR el Error.
                errorDiv.innerHTML = " * Debe tener al menos una @"
                errorDiv.style.color = 'red';
                this.style.border = '2px solid red';
                error.style.border = '2px solid red';
            }
        }


     //FUNCION CALCULAR MONTOS.
        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === '') {//Es una función, que nos permite, como su nombre lo indica, prevenir eventos que se tienen de forma predeterminada.
                                    //El más claro ejemplo que puedes tener de su función, es cuando creas un evento para un input de tipo submit, si no agregas el preventDefault(); a tu función, verás que cuando presionas el input se recarga automáticamente tu página(como si enviaras algo), este evento lo previene está función en cuestión
                alert("Debes elegir un regalo");
                regalo.focus();
            } else {
            // parseInt:: va a convertir el valor del <input> a numero (debido a que es un input que el usuario escribe, será string) o cadena, es decir, si ponen 20, no viene como 20, sino '20', parseInt lo convierte a un número que javascript pueda leer.
            //la segunda, es la parte del ,10, ese 10 es la base, es decir, conviertelo a base 10, que son los números del 0 al 9.
            //la 3ra parte es la de:  || 0, en caso de que un usuario escriba HOLA AMA!! nuestro código va a revisar, encontrar que estos no son números y cambiar el texto HOLA AMA! por un 0.
            //de esta forma, si el usuario escribe algo no deseado, evitamos errores, como querer hacer la operación con letras en lugar de números
                var boletosDia = parseInt(pase_dia.value, 10)|| 0,
                    boletos2Dias = parseInt(pase_dosdias.value, 10)|| 0,
                    boletoCompleto = parseInt(pase_completo.value, 10)|| 0,
                    cantCamisas = parseInt(camisas.value, 10)|| 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10)|| 0;


                var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10)* .93) + (cantEtiquetas * 2);
                var listadoProductos = [];//Con corchetes indicamos que es un Array.

                //Que no calcule el numero de Boletos, Camisas y Etiquetas, si esta en 0.
                if(boletosDia >=1){
                    listadoProductos.push(boletosDia + ' Pase por dia')//Push va agregando al Array.
                }
                if(boletos2Dias >=1){
                    listadoProductos.push(boletos2Dias + ' Pase por 2 dias')//Push va agregando al Array.
                }
                if(boletoCompleto >=1){
                    listadoProductos.push(boletoCompleto + ' Pases Completos')//Push va agregando al Array.
                }
                if(cantCamisas >=1){
                    listadoProductos.push(cantCamisas + ' Camisas')//Push va agregando al Array.
                }
                if(cantEtiquetas >=1){
                    listadoProductos.push(cantEtiquetas + ' Etiquetas')//Push va agregando al Array.
                }
                
                //Insertamos el Resumen de lo que va a Adquirir.
                lista_productos.style.display = 'block';//Para que muestre el cuadro gris de fondo, solo cuando tenga informacion.
                lista_productos.innerHTML = '';//innerHTML sirve para insertar Texto en una Pagina Web.
                for(var i=0; i<listadoProductos.length; i++){
                    lista_productos.innerHTML += listadoProductos[i] + '<br/>';//Con 'innerHTML' Imprimimos todo lo que esta en el FOR.
                                                                               //El elemento HTML line break <br> produce un salto de línea en el texto (retorno de carro).
                }
                suma.innerHTML = "$ " + totalPagar.toFixed(2);//toFixed para que solo nos regrese 2 Decimales.

                 
                //Quitar el Deshabilitado, anteriormente puesto, al momento de haber Calculado.
                if(document.getElementById('btnRegistro')){
                    botonRegistro.disabled = false;
                }
                document.getElementById('total_pedido').value = totalPagar;
            }
        }//Fin Funcion calcularMontos 


      //Ocultar y Mostrar Seccion: Elegir Talleres.
        function mostrarDias(){
            var boletosDia = parseInt(pase_dia.value, 10) || 0,
                boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                boletoCompleto = parseInt(pase_completo.value, 10) || 0;

               var diasElegidos = [];
               if (boletosDia > 0) {
                diasElegidos.push('viernes');
              } else{
                viernes.style.display = 'none';
              }
       
              if (boletos2Dias > 0) {
                diasElegidos.push('viernes', 'sabado');
              } else{
                viernes.style.display = 'none';
                sabado.style.display = 'none';
              }
       
              if (boletoCompleto > 0) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
              } else{
                  viernes.style.display = 'none';
                  sabado.style.display = 'none';
                  domingo.style.display = 'none';
              }
       
               for(var i=0; i<diasElegidos.length; i++){
                   document.getElementById(diasElegidos[i]).style.display = 'block';
               }
        }

    }//--------------------------fin-------------------------------------------------------------------------------------

    }); // DOM CONTENT LOADED
})();  
