<template>
  <div>
    <v-card class="mx-auto mt-100" color="transparent" max-width="1280" elevation="0"> 
      <v-btn type="button" class="mx-2" fab dark  color="#1976D2" @click="abrirModal(false);"><v-icon>mdi-plus</v-icon></v-btn>
      <v-simple-table>
        <template v-slot:default>
          <thead>
            <tr class="table--title">
              <th class="white--text">Catalogo FormaPago</th>
              <th class="white--text">Descrpción</th>
              <th class="white--text">Estado</th>
              <th class="white--text">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="formaPago in formaPagos" :key="formaPago.catalogo_FormaPago">
              <td>{{ formaPago.catalogo_FormaPago }}</td>
              <td>{{ formaPago.descripcion }}</td>
              <td><v-switch v-if="modificar" v-model="formaPago.status" @click="cambiarStatus(formaPago.catalogo_FormaPago)"></v-switch></td>
              <td>
                <v-btn  color="#1976D2" small fab @click=" abrirModal(true, formaPago);" ><v-icon>mdi-pencil</v-icon></v-btn>
                <!-- <v-btn color="#bf914c" small fab @click="eliminar(formaPago.id_formaPago)" ><v-icon>mdi-delete</v-icon></v-btn>  -->
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
                <v-text-field  v-model="formaPago.catalogo_FormaPago"  label="catalogo FormaPago" required placeholder="mdi-ejemplo"></v-text-field>
              </v-col>
              
              <v-col cols="12" md="4">
                <v-text-field v-model="formaPago.descripcion"  label="Descripcion" required  placeholder="ejeplo"></v-text-field>
              </v-col>
              <v-col cols="12" md="4" >
                <v-switch v-if="modificar" v-model="formaPago.status"></v-switch>
                <!-- <v-select  v-if="!modificar" v-model="formaPago.status" :items="items" label="status " clearable></v-select> -->
                <!-- <v-text-field v-model="formaPago.status"  :rules="nameRules" label="Ruta" required  placeholder="status"></v-text-field> -->
              </v-col>
              
            </v-row>
          </v-container>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn @click="cerrarModal();" type="button" data-dismiss="modal" color="error" > Cancelar</v-btn>
            <v-btn  @click="guardar();"  type="submit " data-dismiss="modal" color="green darken-1" >Guardar</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
  </div>
</template>
<script>

  export default {
    name:'catalogo_FormaPago',
    data () {
      return {
        select: this.catalogo_FormaPago,
        items: [
          { value: '0', text: 'Ocultar' },,
          { value: '1', text: 'Mostrar' },,
        ],

        modificar : true,
        dialog : 0,
        tituloModal: '',
        formaPagos: [],

        formaPago:{
          catalogo_FormaPago:'',
          descripcion:'',
          status:'',        
        },
      }
    },
    methods:{
      async listar() {
        const res = await axios.get('http://127.0.0.1:8000/api/FormaPago_mostrar');
        this.formaPagos = res.data;
      },
      async eliminar(catalogo_FormaPago) {
        const res = await axios.delete('/api/FormaPagoEliminar/' + catalogo_FormaPago);
        // alert("Registro Eliminado")
        this.listar();
      }, 
      async guardar() {
        console.log('guardar'+this.modificar)
        if(this.modificar){
          const res = await axios.post('/api/FormaPago_editar/'+this.catalogo_FormaPago, this.formaPago);
          // console.log(this.id);
        }else{
          const res = await axios.post('/api/FormaPago_agregar', this.formaPago);
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
          this.formaPago.catalogo_FormaPago=data.catalogo_FormaPago;
          this.formaPago.descripcion=data.descripcion;
          this.formaPago.status=data.status;
        }else{
          this.tituloModal="Crear Item";
          this.formaPago.catalogo_FormaPago='';
          this.formaPago.descripcion='';
          this.formaPago.status=true;

        }
      },
      async cambiarStatus(catalogo_FormaPago) {
        const res = await axios.post('/api/FormaPago_cambiarEstatus/' + catalogo_FormaPago);
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
           