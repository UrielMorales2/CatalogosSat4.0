<template>
  <div>
    <v-alert   :value="mostrar_error" :timeout="timeout"    type="error"   transition="scale-transition">
      {{errorApi}}
    </v-alert>
    <h1 class="text-center title__gestion">Catálogo de Moneda.</h1>
    <hr />
    <!-- ---------------tabla-------------- -->
    <v-card class="mx-auto mt-100" color="transparent" max-width="1280" elevation="0"> 
      <v-btn type="button" class="mx-2" fab dark  color="#1976D2" @click="abrirModal(false);"><v-icon>mdi-plus</v-icon></v-btn>
      <v-simple-table>
        <template v-slot:default>
          <thead>
            <tr class="table--title">
              <th class="white--text">Catalogo FormaPago</th>
              <th class="white--text">Descrpción</th>
              <th class="white--text">Decimales</th>
              <th class="white--text">Estado</th>
              <th class="white--text">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="catalogoMoneda in catalogoMonedas" :key="catalogoMoneda.id_Catalogo_Moneda">
              <td>{{ catalogoMoneda.id_Catalogo_Moneda }}</td>
              <td>{{ catalogoMoneda.descripcion }}</td>
              <td>{{ catalogoMoneda.decimales }}</td>
              <td><v-switch v-if="modificar" v-model="catalogoMoneda.status" @click="cambiarStatus(catalogoMoneda.id_Catalogo_Moneda)"></v-switch></td>
              <td>
                <v-btn  color="#1976D2" small fab @click=" abrirModal(true, catalogoMoneda);" ><v-icon>mdi-pencil</v-icon></v-btn>
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
                <v-col cols="12" md="4">
                    <v-text-field  v-model="catalogoMoneda.id_Catalogo_Moneda"  label="catalogo Moneda" required placeholder=""></v-text-field>
                </v-col>
            
                <v-col cols="12" md="4">
                    <v-text-field v-model="catalogoMoneda.descripcion"  label="Descripcion" required  placeholder=""></v-text-field>
                </v-col>
                <v-col cols="12" md="4">
                    <v-text-field v-model="catalogoMoneda.decimales"  label="Decimales" required  placeholder=""></v-text-field>
                </v-col>

                <v-col cols="12" md="4" >
                    <v-switch v-if="modificar" v-model="catalogoMoneda.status"></v-switch>
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
    name:'catalogo_Moneda',
    data () {
      return {
        // recursos para la alerta
        mostrar_error: false,
        errorApi:'Algo salio mal. Agrega un catalogo de Moneda diferente',
        timeout: 2000,
        // ------------------

        select: this.catalogo_FormaPago,
        items: [
          { value: '0', text: 'Ocultar' },,
          { value: '1', text: 'Mostrar' },,
        ],

        modificar : true,
        dialog : 0,
        tituloModal: '',
        catalogoMonedas: [],

        catalogoMoneda:{
          id_Catalogo_Moneda:'',
          descripcion:'',
          decimales:'',
          status:'',        
        },
      }
    },
    methods:{
      async listar() {
        const res = await axios.get('http://127.0.0.1:8000/api/CatalogoSat_Moneda_mostrar');
        this.catalogoMonedas = res.data;
      },
      async eliminar(id_Catalogo_Moneda) {
        const res = await axios.delete('/api/MonedaEliminar/' + this.catalogoMoneda);
        // alert("Registro Eliminado")
        this.listar();
      }, 


      async guardar() {
        console.log('guardar'+this.modificar)
        if(this.modificar){
          const res = await axios.post('/api/CatalogoSat_Moneda_editar/'+this.id_Catalogo_Moneda, this.catalogoMoneda);
          // console.log(this.id);
        }else{
          const res = await axios.post('/api/CatalogoSat_Moneda_agregar', this.catalogoMoneda)
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
          this.tituloModal="Modificar Item";
          this.catalogoMoneda.id_Catalogo_Moneda=data.id_Catalogo_Moneda;
          this.catalogoMoneda.descripcion=data.descripcion;
          this.catalogoMoneda.decimales=data.decimales;
          this.catalogoMoneda.status=data.status;
        }else{
          this.mostrar_error= false,
          this.tituloModal="Crear Item";
          this.catalogoMoneda.id_Catalogo_Moneda='';
          this.catalogoMoneda.descripcion='';
          this.catalogoMoneda.decimales='';
          this.catalogoMoneda.status=true;

        }
      },
      async cambiarStatus(id_Catalogo_Moneda) {
        const res = await axios.post('/api/CatalogoSat_MonedacambiarEstatus/' + id_Catalogo_Moneda);
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