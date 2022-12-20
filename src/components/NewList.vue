<template>
    <div>
        Hola mundo
        <div v-for="Users in Users" :key="Users.id_user">
            <div>   {{Users.id_user}}</div>
            <div>   {{Users.mail}}</div>
            <a name="" id="" class="btn btn-primary" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tiktok.com%2F%40losuponia5&psig=AOvVaw1r1Ju2eXvAfTZxj4g2SKjL&ust=1671314170321000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMilvM2Q__sCFQAAAAAdAAAAABAJ" role="button">PORNOGAYDENEGROSAFRICANOS</a>
            <div>{{Users.first_name}}</div>
            <a name="" id="" class="btn btn-primary" href="#" role="button">PRESIONAMEEEEE</a>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            Users:[]
        }
    },



    created:function(){

        this.consultar_usuarios();


    },
    methods:{
        consultar_usuarios(){
            fetch('http://localhost/Data/conexion.php/')
            .then(respuesta=>respuesta.json())
            .then((datos_respuesta)=>{

                console.log(datos_respuesta)
                this.Users=[]
                if(typeof datos_respuesta[0].success==='undefined')
                {
                    this.Users=datos_respuesta;
                }
            })
            .catch(console.log)
        }

    }
}
</script>