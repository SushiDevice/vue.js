<template>
  <TorneoUn/>
  <div class="container-xxl bg-dark text-white mt-2 p-2">
    <h2 class="TxtCrearT">¡Bienvenido a Untop!</h2>
    <p>Variedad de torneos disponibles para estudiantes de UNAP</p>
  </div>

  <div class="container-xxl bg-dark text-white mt-2">
    <div class="container">
      <h2 class="TxtCrearT text-start pt-3">TORNEOS</h2>
    </div>
    <div class="row align-items-start">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img
              src="../assets/smash_logo.png"
              class="card-img-top"
              alt="..."
            />
            <div id="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Organiza: Ing civil inform</p>
              <router-link to="torneosun/smash" >
                <button>foto 1</button>
              </router-link>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img
              src="../assets/Tetris_logo.jpg"
              class="card-img-top"
              alt="..."
            />
            <div id="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <a href="#" class="btn btn-success">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../assets/cs.png" class="card-img-top" alt="..." />
            <div id="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <a href="#" class="btn btn-success">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../assets/kobol.jpg" class="card-img-top" alt="..." />
            <div id="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <a href="#" class="btn btn-success">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="../assets/LoL.jpg" class="card-img-top" alt="..." />
            <div id="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <a href="#" class="btn btn-success">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="../assets/Tekken.png" class="card-img-top" alt="..." />
            <div id="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <a href="#" class="btn btn-success">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>

import TorneoUn from "@/views/TorneosUn.vue"

export default{
  components:{
    TorneoUn
  },
  data(){
    return{
      Torneos:[1,2,3,4,5,6]
    }
  }
}



</script>
<style>
.card-img-top {
  width: 100%;
  height: 15vw;
  object-fit: cover;
}

#card-body {
  padding-top: 5px;  
  background: #000;
  height: 12vw;
}
</style>
