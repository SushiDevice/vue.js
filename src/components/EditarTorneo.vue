<template>
  <div
    id="container-xxl"
    class="creartorneo bg-dark utils "
    style="height: 700px"
  >

  <h1 class="TxtCrearT text-start text-white">INFORMACION TORNEO</h1>

  <div class="row aling-items-stars mt-5 TxtCrearT text-start text-white">
      <div class="col" style="margin-top:40px">
        <h4 class="TxtCrearT text-start text-white">NOMBRE DEL TORNEO:</h4>
        <h4>{{ Tournament.name_tourn }}</h4>
        &nbsp;
        <h4 class="text-start">ORGANIZA:</h4>
        <h5 class="TxtCrearT text-start text-white">Ingenieria{{ Tournament.carreer_tourn }}</h5>
        <h4 class="TxtCrearT text-start text-white">EQUIPOS:</h4>
        <h5>{{ Tournament.teams_tourn }}</h5>
        &nbsp;
        <h4 class="TxtCrearT text-start text-white">REGLAS:</h4>
        <h5>{{ Tournament.rules_t }}</h5>
        &nbsp;
        <h4 class="TxtCrearT text-start text-white">PREMIO:</h4>
        <h5>{{ Tournament.prize_tourn }}</h5>
        
      </div>
      <div class="col">
       <img src="../assets/smash_logo.png" class="CrearIm1" alt="">
   </div>
   <div class="container">
   <div class="col">

    
    
    
   </div>

   </div>
</div>



  </div>

</template>

<script>
export default {
  data() {
    return {
      Tournament: {},
    };
  },

  created: function () {
    this.obtenerInformacionID();
  },

  methods: {
    obtenerInformacionID() {
      fetch(
        "http://localhost/data/conexion.php/?consultars="+this.$route.params.id)
        .then(respuesta => respuesta.json())
        .then(datosRespuesta => {
          console.log(datosRespuesta);
          this.Tournament = datosRespuesta[0];
        })
        .catch(console.log);
    },
  },
};
</script>

<style>

.CrearIm1 {
   border-radius: 25px;
   height: 300px;
   float: right;
   margin-top: 40px;
  margin-right: 40px ;
  
   padding-bottom: 10px;
}


</style>