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
      <catalogo_Exportacion v-if="catalogo_Exportacion"></catalogo_Exportacion>
      <catalogo_MetodoPago v-if="catalogo_MetodoPago"></catalogo_MetodoPago>
      <catalogo_Periodicidad v-if="catalogo_Periodicidad"></catalogo_Periodicidad>
      <catalogo_Meses v-if="catalogo_Meses"></catalogo_Meses>
      <catalogo_TipoRelacion v-if="catalogo_TipoRelacion"></catalogo_TipoRelacion>
      <catalogo_RegimenFiscal v-if="catalogo_RegimenFiscal"></catalogo_RegimenFiscal>
    </div>
  </v-container>
</template>

<script>
  import catalogo_Moneda from "./CatalogosSat/CatalogoSat_Moneda.vue"
  import catalogo_FormaPago from "./CatalogosSat/CatalogoSat_FormaPago.vue"
  import catalogo_TipoComprobante from "./CatalogosSat/CatalogoSat_TipoDeComprobante.vue"
  import catalogo_Exportacion from "./CatalogosSat/CatalogoSat_Exportacion.vue"
  import catalogo_MetodoPago from "./CatalogosSat/CatalogoSat_MetodoPago.vue"
  import catalogo_Periodicidad from "./CatalogosSat/CatalogoSat_Periodicidad.vue"
  import catalogo_Meses from "./CatalogosSat/CatalogoSat_Meses.vue"
  import catalogo_TipoRelacion from "./CatalogosSat/CatalogoSat_TipoRelacion.vue"
  import catalogo_RegimenFiscal from "./CatalogosSat/CatalogoSat_RegimenFiscal.vue"
  export default {
    components:{
      catalogo_FormaPago,
      catalogo_Moneda,
      catalogo_TipoComprobante,
      catalogo_Exportacion,
      catalogo_MetodoPago,
      catalogo_Periodicidad,
      catalogo_Meses,
      catalogo_TipoRelacion,
      catalogo_RegimenFiscal,
    },
    data: () => ({
      selectItem:null,
      selecionado: "",
      elegir:false,


      elegirFormaPago:false,
      catalogoMoneda:false,
      catalogo_TipoComprobante:false,
      catalogo_Exportacion: false,
      catalogo_MetodoPago:false,
      catalogo_Periodicidad:false,
      catalogo_Meses:false,
      catalogo_TipoRelacion:false,
      catalogo_RegimenFiscal:false,
      
      items: [
        {text:'Catalogo de Exportacion', value:'catalogo_Exportacion', status:false},
        {text:'Catalogo de Forma de Pago', value:'catalogo_FormaPago' , status:false},
        {text:'Catalogo de Forma de Pago', value:'catalogo_FormaPago' , status:false},
        {text:'Catalogo de Meses', value:'catalogo_Meses' , status:false},
        {text:'Catalogo de Metodo Pago', value:'catalogo_MetodoPago', status:false},
        {text:'Catalogo de Moneda', value:'catalogo_Moneda', status:false},
        {text:'Catalogo de Periodicidad', value:'catalogo_Periodicidad', status:false},
        {text:'Catalogo de Regimen Fiscal', value:'catalogo_RegimenFiscal', status:false},
        {text:'Catalogo de Tipo Comprobante', value:'catalogo_TipoComprobante', status:false},
        {text:'Catalogo de Tipo Relación', value:'catalogo_TipoRelacion', status:false},
      ],
    }),
    methods: {

      ocultar(valor){
        this.elegirFormaPago = valor;
        this.catalogoMoneda = valor;
        this.catalogo_TipoComprobante = valor;
        this.catalogo_Exportacion = valor;
        this.catalogo_MetodoPago = valor;
        this.catalogo_Periodicidad = valor;
        this.catalogo_Meses = valor;
        this.catalogo_TipoRelacion =  valor;
        this.catalogo_RegimenFiscal = valor;
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
          case 'catalogo_Exportacion':
            this.ocultar(false);
            this.catalogo_Exportacion = true;
          break;
          case 'catalogo_MetodoPago':
            this.ocultar(false);
            this.catalogo_MetodoPago = true;
          break;
          case 'catalogo_Periodicidad':
            this.ocultar(false);
            this.catalogo_Periodicidad = true;
          break;
          case 'catalogo_Meses':
            this.ocultar(false);
            this.catalogo_Meses = true;
          break;
          case 'catalogo_TipoRelacion':
            this.ocultar(false);
            this.catalogo_TipoRelacion = true;
          break;
          case 'catalogo_RegimenFiscal':
            this.ocultar(false);
            this.catalogo_RegimenFiscal = true;
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