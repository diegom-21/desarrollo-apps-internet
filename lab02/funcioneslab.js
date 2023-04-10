//---------------------------FUNCION 1---------------------------
function mostrar(){
    // LLAMO A LOS DATOS DE LOS INPUTS Y LOS ALMACENO EN VARIABLES
    var usu = document.getElementById("usuario").value;
    var mail = document.getElementById("mail").value;

    //LLAMO A LOS INPUTS VACIOS Y LAS DECLARO EN VARIABLES
    var mostrarusua= document.getElementById("datosusuar");
    var mostrarmail= document.getElementById("datosmail");

    //ESTAS VARIABLES INSERTAMOS LAS VARIABLES DE LOS DATOS ALMACENADOS DE ARRIBA
    mostrarusua.textContent=usu;
    mostrarmail.textContent=mail;

}
//---------------------------FUNCION 2---------------------------
function sumaproducto(){
    // LLAMO A LOS DATOS QUE ISERTE EN LOS INPUTS Y LO ALMACENO EN VARIABLES
    var nr1= parseFloat(document.getElementById("numero1").value);
    var nr2= parseFloat(document.getElementById("numero2").value);
    var nr3= parseFloat(document.getElementById("numero3").value);
    var nr4= parseFloat(document.getElementById("numero4").value);

    //HAGO LA OPERACION Y LAS RESPUESTAS LAS PONGO EN VARIABLES
    suma=nr1+nr2;
    producto=nr3*nr4;

    //LLAMO A LOS INPUTS VACIOS Y LAS DECLARO EN VARIABLES
    var ressuma = document.getElementById("respuestasuma");
    var resproducto = document.getElementById("respuestaproducto");

    //INGRESO LAS RESPUESTAS EN LAS VARIABLES DE LOS INPUTS VACIOS
    ressuma.textContent=suma;
    resproducto.textContent=producto;
}

//---------------------------FUNCION 3---------------------------
function mayormenor(){
    var nro1=parseFloat(document.getElementById("primernumero").value);
    var nro2=parseFloat(document.getElementById("segundonumero").value);

    //LLAMO AL INPUT VACIO Y LO DECLARO EN UN VARIABLE
    var res=document.getElementById("respuesta");

    if (nro1 > nro2) {
        // CALCULAMOS SUMA Y RESTA
        const sum = nro1 + nro2;
        const dif = nro1 - nro2;
        
        // MOSTRAMOS LOS RESULTADOS 
        res.textContent=("El primer número es mayor que el segundo. La suma es "+ sum + " y la diferencia es "+dif);
      } else {
        // CALCULAMOS PRODUCTO Y DIVISION
        const prod = nro1 * nro2;
        const divi = nro1 / nro2;
        // MOSTRAMOS LOS RESULTADOS
        res.textContent=("El segundo número es mayor que el primero. El producto es "+prod+" y la división es "+divi)
        
        
      }
}

//---------------------------FUNCION 4---------------------------
function notas(){
    var nota1=parseFloat(document.getElementById("nota1").value);
    var nota2=parseFloat(document.getElementById("nota2").value);
    var nota3=parseFloat(document.getElementById("nota3").value);


    //LLAMO AL INPUT VACIO Y LO DECLARO EN UN VARIABLE
    var mensaje=document.getElementById("mensaje");
    //CALCULAMOS EL PROMEDIO
    promedio = (nota1+nota2+nota3)/3;

    if (promedio >= 4) {
        // SI EL PROMEDIO ES MAYOR O IGUAL A 4 ESTA REGULAR 
        mensaje.textContent=("Regular");
      } else {
        // SI EL PROMEDIO ES MENOR A 4 ESTA REPROBADO
        mensaje.textContent=("Reprobado");
      }
}


//---------------------------FUNCION 5---------------------------
function mayor(){
    var nro1=parseFloat(document.getElementById("nmro1").value);
    var nro2=parseFloat(document.getElementById("nmro2").value);
    var nro3=parseFloat(document.getElementById("nmro3").value);


    //LLAMO AL INPUT VACIO Y LO DECLARO EN UN VARIABLE
    var nmayor=document.getElementById("mayor");


    if (nro1 > nro2 && nro1 > nro3) {
        // Si el primer número es el mayor, lo mostramos en la consola
        nmayor.textContent=("El número mayor es "+nro1);
      } else if (nro2 > nro1 && nro2 > nro3) {
        // Si el segundo número es el mayor, lo mostramos en la consola
        nmayor.textContent=("El número mayor es "+nro2);
      } else {
        // Si el tercer número es el mayor, lo mostramos en la consola
        nmayor.textContent=("El número mayor es "+nro3);
      }
}