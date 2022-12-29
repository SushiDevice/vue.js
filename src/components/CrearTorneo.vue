<template>
   <div id="container-xxl" class="creartorneo bg-dark text-white p-5 mt-1">
      
    <h2 class="TxtCrearT text-start">CREA TU PROPIO TORNEO AQUI</h2>
   
    <p class="text-start">Puedes crear tu propio torneo privado con tus amigos, tu carrera o publico para todas las carreras</p>
   <div class="container">
    <div class="row aling-items-stars">
      <div class="col">
         <ul class="list-group list-group-flush mt-5">
            <li class="list-group-item">Crea tu torneo</li>
            <li class="list-group-item">Hazlos publicos o privados</li>
            <li class="list-group-item">Eliges las reglas del torneo</li>
            <li class="list-group-item">Establece un premio</li>
            <li class="list-group-item">Listo!</li>
</ul>
      </div>
      <div class="col">
       <img src="../assets/smash_logo.png" class="CrearIm" alt="">
   </div>
    <a href="http://localhost:8080/torneophase1" id="a" class="btn btn-success mt-5">CREAR TORNEO</a></div>
   </div>
</div>

   
</template>
<script>
export default {
     
}

//<div class="container-xxl bg-dark text-white p-5 mt-5" style="height: 80vh">
</script>
<style>




.creartorneo {
   height: 70vh

}

.TxtCrearT {
   letter-spacing: 0.01em;
    font-weight: 700;
    font-family: "Chakra Petch",-apple-system,BlinkMacSystemFont,
    "Segoe UI","Roboto","Oxygen",
    "Ubuntu","Cantarell","Fira Sans","Droid Sans",
    "Helvetica Neue",sans-serif;
}

.CrearIm {
   border-radius: 25px;
   height: 300px;
   float: right;
   margin-top: 50px;
   margin-right: 50px;
   padding-bottom: 10px;

}

#container-xxl {
   width: 50%;
   border-radius: 25px;
   margin-left: auto;
   margin-right: auto;
}

#a{
   letter-spacing: 0.01em;
    font-weight: 700;
    font-family: "Chakra Petch",-apple-system,BlinkMacSystemFont,
    "Segoe UI","Roboto","Oxygen",
    "Ubuntu","Cantarell","Fira Sans","Droid Sans",
    "Helvetica Neue",sans-serif;
}

</style>