<template>

 
    <div id="container-xxl" class="creartorneo bg-dark text-dark utils" style="height: 700px;">
           <div class="card">
            <div class="card-header">
              Agregar nuevo Empleados
            </div>
            <div class="card-body">
              

                 <form v-on:submit.prevent="actualizar">

                  <div class="form-group">
                    <label for="Nombre">Nombre:</label>
                    <input type="text"
                      class="form-control" required name="Nombre" id="Nombre" v-model="empleado.Nombre"  aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Escribe el nombre del empleado</small>
                  </div>

                  <div class="form-group">
                    <label for="">Correo</label>
                    <input type="email"
                      class="form-control" required name="Correo" id="Correo"  v-model="empleado.Correo"   aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Escribe el correo del empleado</small>
                  </div>
                  
                  <div class="btn-group" role="group" aria-label="">
                    <button type="button" class="btn btn-primary">Editar</button>

                    <router-link :to="{name:'UnaPrueba'}" class="btn btn-warning">Volver</router-link> 
                  </div>

                 </form>
            </div>
           
           </div>
        </div>
    
    </template>
    
    <script>
    export default{
    
    data(){
        return{
            
            empleado:{}
        }
    },
    
    created:function(){
    
      this.obtenerInfID();
    },
    
    methods: {
    
        obtenerInfID() {
            fetch('http://localhost/data/conexion.php/?consultar='+this.$route.params.id)
            .then(respuesta=> respuesta.json())
            .then((datosRespuesta)=>{
    
                console.log(datosRespuesta)
                this.empleado=datosRespuesta[0];
    
            })
            .catch(console.log)
        }
      }
    };
    
    
    </script>