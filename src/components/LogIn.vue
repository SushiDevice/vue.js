<template>
      <div id="container-xxl" class="creartorneo bg-dark text-white utils">
        <div id="row" class="row aling-items-starts">
          <div id="login" class="col border-right">
            <h1 id="h1">LogIn</h1>
            <input class="controls" type="text" name="" id="" placeholder="Nombre de usuario">

            <input class="controls" type="text" name="" id="" placeholder="Contraseña">
            <a href="" class="btn btn-success">LogIn</a>
          </div>
          
          <div class="col">
            <h1 id="h1">Registrarse</h1>
            
              <input class="controls" type="text" name="" id="" placeholder="Nombre de usuario">
         
            <input class="controls" type="text" name="Nombre" id="" placeholder="Nombre">
         
            <input class="controls" type="text" name="Apellido" id="" placeholder="Apellido">
       
            <input class="controls" type="text" name="Rut" id="" placeholder="Rut">
       
            <input class="controls" type="text" name="Correo" id="" placeholder="Correo">
        
            <input class="controls" type="text" name="" id="" placeholder="Fecha de nacimiento">

            <a href="" class="btn btn-success">Registrarse</a>
        
            
          </div>
          
        </div>
      </div>


</template>
<script>
export default {
     
}

//position-absolute top-50 start-50 translate-middle
 // margin-top: auto;
  //margin-bottom: auto;
</script>

<style>


.border-right {
    border-right: 0.5px solid white;
    
}

#row {
  margin-top: 100px;

}

#login {

  margin-top: 80px;
}

#register{

}



#h1 {
  font-family: 'calibri';
  color: white;
  
}



.controls {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 10px;
  border: 1px solid #1f53c5;
  font-family: 'calibri';
  font-size: 18px;
}


.utils {
  padding: 30px;
}


#container-xxl {
   width: 50%;
   border-radius: 25px;
   position: absolute;
   top:  50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

#container-xxl h2{
text-align: start;
width: 100%;

}


</style>