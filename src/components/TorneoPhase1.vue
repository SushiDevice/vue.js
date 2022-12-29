<template>
    
    <div id="container-xxl" class="creartorneo bg-dark text-white utils" style="height: 700px;">
       <div class="card mt-4">
        
        <div class="card-body text-dark text-start">
            <form v-on:submit.prevent="agregarRegistro">
                <div class="form-group">
                  <label for="name_tourn">Nombre del Torneo</label>
                  <input type="text"
                    class="form-control" name="name_tourn" id="name_tourn" aria-describedby="helpId"  v-model="Tournament.name_tourn" placeholder="">
                  
                </div>

                <div class="form-group">
                  <label for="game_tourn">Videojuego</label>
                  <select class="form-control" name="game_tourn" id="game_tourn" v-model="Tournament.game_tourn">
                    <option value="Valorant">Valorant</option>
                    <option value="Tekken 7">Tekken 7</option>
                    <option value="League Of Legends">League Of Legends</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="carrer_tourn">Carrera</label>
                  <select class="form-control" name="carrer_tourn" id="carrer_tourn" v-model="Tournament.carreer_tourn">
                    <option value="Ambiental">Ambiental</option>
                    <option value="Informatica">Informatica</option>
                    <option value="Industrial">Industrial</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="teams_tourn">Equipos</label>
                  <select class="form-control" name="teams_tourn" id="teams_tourn" v-model="Tournament.teams_tourn">
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="8">8</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="private_tourn">Privacidad</label>
                  <select class="form-control" name="private_tourn" id="private_tourn" v-model="Tournament.private_tourn">
                    <option value="Publico">Publico</option>
                    <option value="Privado">Privado</option>
                  </select>
                </div>

              
              
                <div class="form-group">
                  <label for="prize_tourn">Premio</label>
                  <input type="text"
                    class="form-control" name="prize_tourn" id="prize_tourn" aria-describedby="helpId"  v-model="Tournament.prize_tourn" placeholder="">
                </div>

                <div class="form-group">
                  <label for="rules_t">Reglas</label>
                  <textarea class="form-control" name="rules_t" id="rules_t" rows="3"   v-model="Tournament.rules_t" placeholder="Introduzca aquí las reglas del torneo..."></textarea>
                </div>
                
                
                <button type="submit" class="btn btn-success mt-3">CREAR</button>
                <router-link :to="{name:'CrearTorneo'}" class="btn btn-warning mt-3">CANCELAR</router-link>
            </form>
           
        </div>
       
       </div>
    </div>

</template>

<script>
export default{

data(){
    return{
        
        Tournament:{}
    }
},

methods:{
    
    agregarRegistro(){

        console.log(this.Tournament);

        var datosEnviar={ name_tourn:this.Tournament.name_tourn,
                           game_tourn:this.Tournament.game_tourn,
                            carreer_tourn:this.Tournament.carreer_tourn,
                            teams_tourn:this.Tournament.teams_tourn,
                            private_tourn:this.Tournament.private_tourn,
                            rules_t:this.Tournament.rules_t,
                            prize_tourn:this.Tournament.prize_tourn
                        }

                    fetch('http://localhost/Data/conexion.php/?insertar=1',{
                        method: "POST",
                        body: JSON.stringify(datosEnviar)
                    }) 
                    .then(respuesta=>respuesta.json())
                    .then((datosRespuesta=>{
                        console.log(datosRespuesta);
                    }))
    }
}
}









/*export default{
  data(){ 
    return{
    prueba: "",
    nombre: "",
    apellido: "",
    //name: "",
   // email: ""
  }},
  methods: {
    allRecords: function(){
     axios.post('http://localhost/Data/ajaxfile.php', {
       request: 1
     })
     .then(function (response) {
       this.prueba = response.data;
     })
     .catch(function (error) {
       console.log(error);
     });
 
   },
   addRecord: function(){

     if(this.nombre != '' && this.apellido != ''){
       axios.post('http://localhost/Data/ajaxfile.php ', {
         request: 2,
         nombre: this.nombre,
         apellido: this.apellido,
         //email: this.email
       })
       .then(function (response) {

         // Fetch records
         this.allRecords();

         // Empty values
         this.nombre = '';
         this.apellido = '';
         //this.email = '';
 
         alert(response.data);
       })
       .catch(function (error) {
         console.log(error);
       });
     }else{
       alert('Fill all fields.');
     }
   },
  },
  created: function(){
    this.allRecords();
  }}

*/

/*export default {
  data() {
    return {
      lista: [],
      name_tourn:'',
      game_tourn:'',
      private_tourn:'',
      carreer_tourn:'',
      teams_tourn:'',
      rules_tour:'',
      prize:''                
    }
    },
    methods:{
        addProducto:function(e) {
           let name_tourn = this.name_tourn;
           let game_tourn = this.game_tourn;  
           let private_tourn = this.private_tourn;  
           let carreer_tourn = this.carreer_tourn;  
           let teams_tourn = this.teams_tourn;  
           let rules_tour = this.rules_tour;  
           let prize = this.prize;  
           const obj = {name_tourn,game_tourn,private_tourn,carreer_tourn,teams_tourn,rules_tour,prize};
           console.log(obj)
           axios.post("http://localhost/Data/conexion.php" ,obj)
            .then(respuesta => {  console.log(respuesta.data)
             this.getProducto() })
            .catch(error => { console.log(error)
      })
         e.preventDefault();
        
  } //fin de la funcion addProducto
       
    }
   
}*/


</script>

<style>


#input {
    margin-bottom: 10px;
}

</style>

