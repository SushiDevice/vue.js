<template>
  <div class="container-fluid bg-dark">
  <nav>  
    <router-link to="/">Home</router-link>
    |
    <router-link to="/about">About</router-link>
    |
    <router-link to="/creartorneo">CrearTorneo</router-link>
    |
    <router-link to="/newlist">FQ/A</router-link>
    |
    <router-link to="/login">LogIn</router-link>
    |
    <router-link to="/mainpage">MainPage</router-link>
  </nav>
</div>
<div background = ""></div>
  <router-view/>
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
}
</style>

