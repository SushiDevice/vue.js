<template>
  <div class="container-fluid bg-dark">
  <nav>  
   
    <router-link to="/mistorneos">MisTorneos</router-link>
    |
    <router-link to="/creartorneo">CrearTorneo</router-link>
    |
    <router-link to="/login">LogIn</router-link>
    |
    <router-link to="/mainpage">MainPage</router-link>
    |
    <router-link to="/newteams">Equipos</router-link>
  </nav>
</div>
  <router-view/>
  <footer class="container-xxl-fluid bg-dark">
    <h5 class="text-start text-white">UNTOP</h5>
  </footer>
</template>


<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: black;
}

nav {
  padding: 20px;
}

nav a {
  font-weight: bold;
  color: whitesmoke;
}

nav a.router-link-exact-active {
  color: #42b983;
}


body {

  background: url(./assets/otrof.jpg)  no-repeat;
  backdrop-filter: blur(10px);
  background-size: cover ;
  padding-bottom: 3em;
  min-height: 100vh;

}

footer{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 2.5rem;            /* Footer height */
  padding: 1em 0;
}

</style>

