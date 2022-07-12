<template>
  <div>
    <v-alert   :value="mostrar_error" :timeout="timeout"    type="error"   transition="scale-transition">
      {{errorApi}}
    </v-alert>
    <h1 class="text-center title__gestion">Catálogo de Tasa o Cuota.</h1>
    <hr />
    <!-- ---------------tabla-------------- -->
    <v-card class="mx-auto mt-100" color="transparent" max-width="1280" elevation="0"> 
      <v-btn type="button" class="mx-2" fab dark  color="#1976D2" @click="abrirModal(false);"><v-icon>mdi-plus</v-icon></v-btn>
      <v-simple-table>
        <template v-slot:default>
          <thead>
            <tr class="table--title">
              <th class="white--text">Rango o Fijo </th>
              <th class="white--text">Valor mínimo</th>
              <th class="white--text">Valor Maximo</th>
              <th class="white--text">Impuesto</th>
              <th class="white--text">Factor</th>
              <th class="white--text">Traslado</th>
              <th class="white--text">Retención</th>
              <th class="white--text">Estado</th>
              <th class="white--text">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="catalogoTasaOcuota in usos" :key="catalogoTasaOcuota.id">
              <td>{{ catalogoTasaOcuota.rango_o_Fijo }}</td>
              <td>{{ catalogoTasaOcuota.Valor_mínimo }}</td>
              <td>{{ catalogoTasaOcuota.Valor_Maximo }}</td>
              <td>{{ catalogoTasaOcuota.Impuesto }}</td>
              <td>{{ catalogoTasaOcuota.Factor }}</td>
              <td>{{ catalogoTasaOcuota.Traslado }}</td>
              <td>{{ catalogoTasaOcuota.Retención }}</td>
              <td><v-switch  v-model="catalogoTasaOcuota.status" @click="cambiarStatus(catalogoTasaOcuota.id)"></v-switch></td>
              <td>
                <v-btn  color="#1976D2" small fab @click=" abrirModal(true, catalogoTasaOcuota);" ><v-icon>mdi-pencil</v-icon></v-btn>
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
                <input type="" v-model="catalogoTasaOcuota.id" hidden>
                <v-col cols="12" md="4">
                    <v-text-field  v-model="catalogoTasaOcuota.rango_o_Fijo"  label="rango o  Fijo" required placeholder=""></v-text-field>
                </v-col>
                <v-col cols="12" md="4">
                    <v-text-field  v-model="catalogoTasaOcuota.Valor_mínimo"  label="Valor mínimo" required placeholder=""></v-text-field>
                </v-col>
            
                <v-col cols="12" md="4">
                    <v-text-field v-model="catalogoTasaOcuota.Valor_Maximo"  label="Valor Maximo" required  placeholder=""></v-text-field>
                </v-col>
                <v-col cols="12" md="4">
                    <v-text-field v-model="catalogoTasaOcuota.Impuesto"  label="Impuesto" required  placeholder=""></v-text-field>
                </v-col>
                <v-col cols="12" md="4">
                    <v-text-field v-model="catalogoTasaOcuota.Factor"  label="Factor" required  placeholder=""></v-text-field>
                </v-col>
                <v-col cols="12" md="4">
                    <v-text-field v-model="catalogoTasaOcuota.Traslado"  label="Traslado" required  placeholder=""></v-text-field>
                </v-col>
                <v-col cols="12" md="4">
                    <v-text-field v-model="catalogoTasaOcuota.Retención"  label="Retención" required  placeholder=""></v-text-field>
                </v-col>
                

                <v-col cols="12" md="4" >
                    <v-switch v-if="modificar" label="Desactivo/Activo" v-model="catalogoTasaOcuota.status"></v-switch>
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
    name:'catalogo_TasaOcuota',
    data () {
      return {
        // recursos para la alerta
        mostrar_error: false,
        errorApi:'Algo salio mal. Agrega un  id diferente',
        timeout: 2000,
        // ------------------


        modificar : true,
        dialog : 0,
        tituloModal: '',
        usos: [],

        catalogoTasaOcuota:{
            rango_o_Fijo:'',
            Valor_mínimo:'',
            Valor_Maximo:'',
            Impuesto:'',
            Factor:'',
            Traslado:'',
            Retención:'',
        },
      }
    },
    methods:{
      async listar() {
        const res = await axios.get('http://127.0.0.1:8000/api/CatalogoSat_TasaOCuota_mostrar');
        this.usos = res.data;
      },
    
      async guardar() {
        console.log('guardar'+this.modificar)
        if(this.modificar){
          const res = await axios.post('/api/CatalogoSat_TasaOCuota_editar/'+this.id, this.catalogoTasaOcuota);
          // console.log(this.id);
        }else{
          const res = await axios.post('/api/CatalogoSat_TasaOCuota_agregar', this.catalogoTasaOcuota)
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
            this.id=data.id;
            this.tituloModal="Modificar Registro";
            this.catalogoTasaOcuota.rango_o_Fijo=data.rango_o_Fijo;
            this.catalogoTasaOcuota.Valor_mínimo=data.Valor_mínimo;
            this.catalogoTasaOcuota.Valor_Maximo=data.Valor_Maximo;
            this.catalogoTasaOcuota.Impuesto=data.Impuesto;
            this.catalogoTasaOcuota.Factor=data.Factor;
            this.catalogoTasaOcuota.Traslado=data.Traslado;
            this.catalogoTasaOcuota.Retención=data.Retención;
            this.catalogoTasaOcuota.status=data.status;
        }else{
            this.mostrar_error= false,
            this.id=0;
            this.tituloModal="Crear Nuevo Registro";
            this.catalogoTasaOcuota.rango_o_Fijo='';
            this.catalogoTasaOcuota.Valor_mínimo='';
            this.catalogoTasaOcuota.Valor_Maximo='';
            this.catalogoTasaOcuota.Impuesto='';
            this.catalogoTasaOcuota.Factor='';
            this.catalogoTasaOcuota.Traslado='';
            this.catalogoTasaOcuota.Retención='';
            this.catalogoTasaOcuota.status=true;
        }
      },
      async cambiarStatus(id) {
        const res = await axios.post('/api/CatalogoSat_TasaOCuotacambiarEstatus/' + id);
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