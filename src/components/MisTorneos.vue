<template>
  <div id="container-xxl" class="creartorneo bg-dark text-white utils">
    <div class="row aling-items-stars">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
         
                  <th>NOMBRE</th>
                  <th>VIDEOJUEGO</th>
                  <th>CARRERA</th>
                  <th>EQUIPOS</th>
                  <th>ESTADO</th>
                  <th>PREMIO</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="Tournament in Tournaments" :key="Tournament.id_tourn">
               
                  <td>{{ Tournament.name_tourn }}</td>
                  <td>{{ Tournament.game_tourn }}</td>
                  <td>{{ Tournament.carreer_tourn }}</td>
                  <td>{{ Tournament.teams_tourn }}</td>
                  <td>{{ Tournament.private_tourn }}</td>
                  <td>{{ Tournament.prize_tourn }}</td>
                  <td>    


                    <div class="btn-group" role="group" aria-label="">    
  <router-link :to="{name:'EditarTorneo',params:{id:Tournament.id_tourn}}" class="btn btn-info">Editar</router-link>
                      <button class="btn btn-danger" v-on:click="borrarTorneo(Tournament.id_tourn)">Borrar</button>
                    </div>    


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      Tournaments: [],
    };
  },

  created: function () {
    this.consultarTorneos();
  },
  methods: {
    consultarTorneos() {
      fetch("http://localhost/data/conexion.php/?consultar")
        .then((respuesta) => respuesta.json())
        .then((datosRespuesta) => {
          console.log(datosRespuesta);
          this.Tournaments = [];
          if (typeof datosRespuesta[0].success === "undefined") {
            this.Tournaments = datosRespuesta;
          }
        })
        .catch(console.log);
    },
 //   borrarTorneo(id){
 //     console.log(id)
  //  }
  }
}
</script>

