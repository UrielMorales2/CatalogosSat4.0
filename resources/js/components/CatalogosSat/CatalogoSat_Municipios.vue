<template>
  <div>
    <v-alert   :value="mostrar_error" :timeout="timeout"    type="error"   transition="scale-transition">
      {{errorApi}}
    </v-alert>
    <h1 class="text-center title__gestion">Catálogo de Municipios.</h1>
    <hr />
    <!-- ---------------tabla-------------- -->
    <v-card class="mx-auto mt-100" color="transparent" max-width="1280" elevation="0"> 
      <v-btn type="button" class="mx-2" fab dark  color="#1976D2" @click="abrirModal(false);"><v-icon>mdi-plus</v-icon></v-btn>
      <v-simple-table>
        <template v-slot:default>
          <thead>
            <tr class="table--title">
              <th class="white--text">id Municipio</th>
              <th class="white--text">id Estado</th>
              <th class="white--text">descripcion</th>
              <th class="white--text">Estado</th>
              <th class="white--text">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="catalogoMunicipio in catalogoMunicipios" :key="catalogoMunicipio.id_M">
              <td>{{ catalogoMunicipio.id_municipio }}</td>
              <td>{{ catalogoMunicipio.estado_id }}</td>
              <td>{{ catalogoMunicipio.descripcion }}</td>
              <td><v-switch v-model="catalogoMunicipio.status" @click="cambiarStatus(catalogoMunicipio.id_M)"></v-switch></td>
              <td>
                <v-btn  color="#1976D2" small fab @click=" abrirModal(true, catalogoMunicipio);" ><v-icon>mdi-pencil</v-icon></v-btn>
              </td>
            </tr>
          </tbody>
        </template>
      </v-simple-table>
    </v-card>
      
    <!--ventana nuevo y editar n -->
    <v-dialog v-model="dialog" width="1200" height="1000" max-height="1200" max-width="2000">
      <v-card>
        <v-card-title class="table--title"><h4>{{tituloModal}}</h4> <v-spacer></v-spacer> <v-btn @click="cerrarModal();"  type="button" data-dismiss="modal" color="red" fab small dark> X </v-btn></v-card-title>
        <v-card-text></v-card-text>
        <v-container>
            <v-row>
              <input type="" v-model="catalogoMunicipio.id_M" hidden>
                <v-col cols="12" md="4">
                    <v-text-field  v-model="catalogoMunicipio.id_municipio"  label="id Municipio" required placeholder=""></v-text-field>
                </v-col>
            
                <v-col cols="12" md="4">
                    <v-text-field v-model="catalogoMunicipio.estado_id"  label="id Estado" required  placeholder=""></v-text-field>
                </v-col>
                <v-col cols="12" md="4">
                    <v-text-field v-model="catalogoMunicipio.descripcion"  label="Descripción" required  placeholder=""></v-text-field>
                </v-col>

                <v-col cols="12" md="4" >
                    <v-switch v-if="modificar" v-model="catalogoMunicipio.status"></v-switch>
                </v-col>
            </v-row>
        </v-container>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn @click="cerrarModal();" type="button" data-dismiss="modal" color="error" > Cancelar</v-btn>
          <v-btn  @click="guardar()   ;" type="submit " data-dismiss="modal" color="green darken-1" >Guardar</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>
<script>

  export default {
    name:'catalogo_Municipio',
    data () {
      return {
        // recursos para la alerta
        mostrar_error: false,
        errorApi:'Algo salio mal. Agrega un catalogo de Moneda diferente',
        timeout: 2000,
        // ------------------

        modificar : true,
        dialog : 0,
        tituloModal: '',
        catalogoMunicipios: [],

        catalogoMunicipio:{
          id_municipio:'',
          estado_id:'',
          descripcion:'',
          status:'',        
        },
      }
    },
    methods:{
      async listar() {
        const res = await axios.get('http://127.0.0.1:8000/api/CatalogoSat_Municipio_mostrar');
        this.catalogoMunicipios = res.data;
      },
      async guardar() {
        console.log('guardar'+this.modificar)
        if(this.modificar){
          const res = await axios.post('/api/CatalogoSat_Municipio_editar/'+this.id_M, this.catalogoMunicipio);
          // console.log(this.id);
        }else{
          const res = await axios.post('/api/CatalogoSat_Municipio_agregar', this.catalogoMunicipio)
           .then(function(response) {
            console.log("agregado correctamente");
          })
          .catch(e=>{

            console.log("salio mal");
            console.log(e);
            this.mostrar_error=true;
            this.errorApi;  
          });
        }
        this.cerrarModal();
        this.listar();
      },
      cerrarModal(){
        this.dialog=0;
      },
      abrirModal(status, data={}){
        this.modificar = status;
        console.log ('abrirmodal' + this.modificar);
        this.dialog=1;
        if(this.modificar){
          this.id_M=data.id_M;
          this.tituloModal="Modificar Registro";
          this.catalogoMunicipio.id_municipio=data.id_municipio;
          this.catalogoMunicipio.estado_id=data.estado_id;
          this.catalogoMunicipio.descripcion=data.descripcion;
          this.catalogoMunicipio.status=data.status;
        }else{
          this.mostrar_error= false,
           this.id_M=0;
          this.tituloModal="Crear Nuevo Registro";
          this.catalogoMunicipio.id_municipio='';
          this.catalogoMunicipio.estado_id='';
          this.catalogoMunicipio.descripcion='';
          this.catalogoMunicipio.status=true;

        }
      },
      async cambiarStatus(id_municipio) {
        const res = await axios.post('/api/CatalogoSat_MunicipiocambiarEstatus/' + id_municipio);
        // alert("Registro modificado")
        this.listar();
      }, 
    
    },
    created() {
      this.listar();
    },
  }
</script>

<style  scope>
  .mostrar{
    display: list-item;
    opacity: 1;
    background: rgba(75, 56, 143, 0.705);
  }
   .flm:link {
    text-decoration: none;
  }
  .v-application span {
    color: #ffffff!important;
  }
    .table--title{
        color: #ffffff;
        background: #1976D2;
    }
  .title__gestion{
    margin-top: 120px;
    color: #1976D2;
  }
</style>