<template>
  <div>
    <v-alert   :value="mostrar_error" :timeout="timeout"    type="error"   transition="scale-transition">
      {{errorApi}}
    </v-alert>
    <h1 class="text-center title__gestion">Catálogo de Localidad.</h1>
    <hr />
    <!-- ---------------tabla-------------- -->
    <v-card class="mx-auto mt-100" color="transparent" max-width="1280" elevation="0"> 
      <v-btn type="button" class="mx-2" fab dark  color="#1976D2" @click="abrirModal(false);"><v-icon>mdi-plus</v-icon></v-btn>
      <v-simple-table>
        <template v-slot:default>
          <thead>
            <tr class="table--title">
              <th class="white--text">id Localidad</th>
              <th class="white--text">id de Estado</th>
              <th class="white--text">Descripcion</th>
              <th class="white--text">Estatus</th>
              <th class="white--text">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="Localidad in factor" :key="Localidad.id_L">
              <td>{{ Localidad.id_Localidad }}</td>
              <td>{{ Localidad.estado_id }}</td>
              <td>{{ Localidad.descripcion }}</td>
              <td><v-switch v-model="Localidad.status" @click="cambiarStatus(Localidad.id_L)"></v-switch></td>
              <td>
                <v-btn  color="#1976D2" small fab @click=" abrirModal(true, Localidad);" ><v-icon>mdi-pencil</v-icon></v-btn>
               
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
             <input type="" v-model="Localidad.id_L" hidden>
            <v-col cols="12" md="4">
              <v-text-field  v-model="Localidad.id_Localidad"   label="id Localidad"></v-text-field>
            </v-col>
            <v-col cols="12" md="4">
                <v-combobox  v-model="Localidad.estado_id" :items="items" label="id Estado" dense></v-combobox>
              <!-- <v-text-field  v-model="Localidad.estado_id"   label="id Estado"></v-text-field> -->
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field  v-model="Localidad.descripcion"   label="Descripcion"></v-text-field>
            </v-col>
        
            <v-col cols="12" md="4" >
              <v-switch v-if="modificar" v-model="Localidad.status"></v-switch>
             </v-col>
            
          </v-row>
        </v-container>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn @click="cerrarModal();" type="button" data-dismiss="modal" color="error" > Cancelar</v-btn>
          <!-- <v-btn  @click="mostrar_error = !mostrar_error   ;" type="submit " data-dismiss="modal" color="green darken-1" >Guardar</v-btn> -->
          <v-btn  @click="guardar()   ;" type="submit " data-dismiss="modal" color="green darken-1" >Guardar</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>
<script>

 export default {
    name:'catalogo_Localidad',
    data () {
      return {
        // recursos para la alerta
        mostrar_error: false,
        errorApi:'Algo salio mal. Agrega un id diferente',
        timeout: 2000,
        // ------------------
        items: [
            'AGU',
            'BCN',
            'BCS',
            'CAM',
            'CHP',
            'CHH',
            'COA',
            'COL',
            'CMX',
            'DUR',
            'GUA',
            'GRO',
            'HID',
            'JAL',
            'MEX',
            'MIC',
            'MOR',
            'NAY',
            'NLE',
            'OAX',
            'PUE',
            'QUE',
            'ROO',
            'SLP',
            'SIN',
            'SON',
            'TAB',
            'TAM',
            'TLA',
            'VER',
            'YUC',
            'ZAC',

        ],

        modificar : true,
        dialog : 0,
        tituloModal: '',
        factor: [],

        Localidad:{
            id_Localidad:'',
            estado_id:'',
            descripcion:'',
            status:'',        
        },
      }
    },
    methods:{
      async listar() {
        const res = await axios.get('http://127.0.0.1:8000/api/CatalogoSat_Localidad_mostrar');
        this.factor = res.data;
      },
     
      async guardar() {
        console.log('guardar'+this.modificar)
        if(this.modificar){
          const res = await axios.post('/api/CatalogoSat_Localidad_editar/'+this.id_L, this.Localidad);
          // console.log(this.id);
        }else{
          const res = await axios.post('/api/CatalogoSat_Localidad_agregar', this.Localidad)
           .then(function(response) {
            console.log("agregado correctamente");
            // console.log(response);
            // this.cerrarModal();
            // this.listar();
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
           this.id_L=data.id_L;
            this.tituloModal="Modificar ";
            this.Localidad.id_Localidad=data.id_Localidad;
            this.Localidad.estado_id=data.estado_id;
            this.Localidad.descripcion=data.descripcion;
            this.Localidad.status=data.status;
        }else{
            this.mostrar_error= false,
            this.id_L=0;
            this.tituloModal="Crear Nuevo ";
            this.Localidad.id_Localidad='';
            this.Localidad.estado_id='';
            this.Localidad.descripcion='';
            this.Localidad.status=true;
        }
      },
      async cambiarStatus(id_L) {
        const res = await axios.post('/api/CatalogoSat_LocalidadcambiarEstatus/' + id_L);
        // alert("Registro modificado")
        this.listar();
      }, 
      
      // async MostrarEstados() {
      //   const res = await axios.get('http://127.0.0.1:8000/api/CatalogoSat_Estado_mostrar');
      //   this.estados = res.data;
      // }, 
    
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