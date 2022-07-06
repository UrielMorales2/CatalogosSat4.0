<template>
  <v-container>
    <p>Catálogos SAT</p> 
    <v-col class="d-flex" cols="12" sm="6">
      <!-- <v-select :items="items" @change="mostrar(items)"  label="Selecciona un catálogo" dense outlined></v-select> -->
      <v-select :items="items" @change="(valor) => changeState(valor)" v-model="selectItem" label="Selecciona un catálogo" dense outlined></v-select>
    </v-col>

    <div>
      <catalogo_FormaPago v-if="elegirFormaPago"></catalogo_FormaPago>
      <catalogo_Moneda v-if="catalogoMoneda"></catalogo_Moneda>
      <catalogo_TipoComprobante v-if="catalogo_TipoComprobante"></catalogo_TipoComprobante>
    </div>
  </v-container>
</template>

<script>

  import catalogo_Moneda from "./CatalogosSat/CatalogoSat_Moneda.vue"
  import catalogo_FormaPago from "./CatalogosSat/CatalogoSat_FormaPago.vue"
  import catalogo_TipoComprobante from "./CatalogosSat/CatalogoSat_TipoDeComprobante.vue"
  export default {
    components:{
      catalogo_FormaPago,
      catalogo_Moneda,
      catalogo_TipoComprobante,
    },
    data: () => ({
      selectItem:null,
      selecionado: "",
      elegir:false,

      elegirFormaPago:false,
      catalogoMoneda:false,
      catalogo_TipoComprobante:false,
      
      items: [
        {text:'Catalogo Forma de Pago', value:'catalogo_FormaPago' , status:false},
        {text:'Catalogo de Moneda', value:'catalogo_Moneda', status:false},
        {text:'Catalogo Tipo Comprobante', value:'catalogo_TipoComprobante', status:false},
      ],
    }),
    methods: {

      ocultar(valor){
        this.elegirFormaPago = valor;
        this.catalogoMoneda = valor;
        this.catalogo_TipoComprobante = valor;
      },
      changeState(valor) {
        this.selecionado = this.items[valor];
        console.log(this.selectItem);

        switch (this.selectItem) {
          case 'catalogo_FormaPago':
            this.ocultar(false);
            this.elegirFormaPago = true;
          break;
          case 'catalogo_Moneda':
          this.ocultar(false);
          this.catalogoMoneda = true;//Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
          break;
          case 'catalogo_TipoComprobante':
          this.ocultar(false);
          this.catalogo_TipoComprobante = true;
          break;
        }
      },
    },
  }
</script>

<style  scope>
  /* .ocultar{
    display: none;
  } */
</style>