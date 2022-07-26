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
      <catalogo_Pais v-if="catalogo_Pais"></catalogo_Pais>
      <catalogo_UsoCFDI v-if="catalogo_UsoCFDI"></catalogo_UsoCFDI>
      <catalogo_prodServ v-if="catalogo_prodServ"></catalogo_prodServ>
      <catalogo_claveUnidad v-if="catalogo_claveUnidad"></catalogo_claveUnidad>
      <catalogo_ObjetoImp v-if="catalogo_ObjetoImp"></catalogo_ObjetoImp>
      <catalogo_Impuesto v-if="catalogo_Impuesto"></catalogo_Impuesto>
      <catalogo_TipoFactor v-if="catalogo_TipoFactor"></catalogo_TipoFactor>
      <catalogo_TasaOcuota v-if="catalogo_TasaOcuota"></catalogo_TasaOcuota>
      <catalogo_PatenteAduanal v-if="catalogo_PatenteAduanal"></catalogo_PatenteAduanal>
      <catalogo_Aduanas v-if="catalogo_Aduanas"></catalogo_Aduanas>
      <catalogo_NumPEdimentoAduana v-if="catalogo_NumPEdimentoAduana"></catalogo_NumPEdimentoAduana>
      <catalogo_Estado v-if="catalogo_Estado"></catalogo_Estado>
      <catalogo_Localidad v-if="catalogo_Localidad"></catalogo_Localidad>
      <catalogo_Municipio v-if="catalogo_Municipio"></catalogo_Municipio>
      <catalogo_cp v-if="catalogo_cp"></catalogo_cp>
      <catalogo_colonia v-if="catalogo_colonia"></catalogo_colonia>
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
  import catalogo_Pais from "./CatalogosSat/CatalogoSat_Paises.vue"
  import catalogo_UsoCFDI from "./CatalogosSat/CatalogoSat_UsoCFDI.vue"
  import catalogo_prodServ from "./CatalogosSat/CatalogoSat_ClaveProductoServicio.vue"
  import catalogo_claveUnidad from "./CatalogosSat/CatalogoSat_ClaveUnidadesdeMedida.vue"
  import catalogo_ObjetoImp from "./CatalogosSat/CatalogoSat_ObjetoImpuestos.vue"
  import catalogo_Impuesto from "./CatalogosSat/CatalogoSat_Impuestos.vue"
  import catalogo_TipoFactor from "./CatalogosSat/CatalogoSat_TipoFactor.vue"
  import catalogo_TasaOcuota from "./CatalogosSat/CatalogoSat_Tasa_O_Cuota.vue"
  import catalogo_PatenteAduanal from "./CatalogosSat/CatalogoSat_PatenteAduanal.vue"
  import catalogo_Aduanas from "./CatalogosSat/CatalogoSat_Aduanas.vue"
  import catalogo_NumPEdimentoAduana from "./CatalogosSat/CatalogoSat_NumPedimentoAduena.vue"
  import catalogo_Estado from "./CatalogosSat/CatalogoSat_Estados.vue"
  import catalogo_Localidad from "./CatalogosSat/CatalogoSat_Localidad.vue"
  import catalogo_Municipio from "./CatalogosSat/CatalogoSat_Municipios.vue"
  import catalogo_cp from "./CatalogosSat/CatalogoSat_CodigosPostales.vue"
  import catalogo_colonia from "./CatalogosSat/CatalogoSat_Colonias.vue"
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
      catalogo_Pais,
      catalogo_UsoCFDI,
      catalogo_prodServ,
      catalogo_claveUnidad,
      catalogo_ObjetoImp,
      catalogo_Impuesto,
      catalogo_TipoFactor,
      catalogo_TasaOcuota,
      catalogo_PatenteAduanal,
      catalogo_Aduanas,
      catalogo_NumPEdimentoAduana,
      catalogo_Estado,
      catalogo_Localidad,
      catalogo_Municipio,
      catalogo_cp,
      catalogo_colonia,
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
      catalogo_Pais:false,
      catalogo_Pais:false,
      catalogo_UsoCFDI: false,
      catalogo_prodServ: false,
      catalogo_claveUnidad: false,
      catalogo_ObjetoImp: false,
      catalogo_Impuesto: false,
      catalogo_TipoFactor: false,
      catalogo_TasaOcuota: false,
      catalogo_PatenteAduanal: false,
      catalogo_Aduanas: false,
      catalogo_NumPEdimentoAduana: false,
      catalogo_Estado: false,
      catalogo_Localidad: false,
      catalogo_Municipio: false,
      catalogo_cp: false,
      catalogo_colonia: false,

      
      items: [
        {text:'Catalogo de Aduanas', value:'catalogo_Aduanas', status:false},
        {text:'Catalogo de Clave Producto Servicio', value:'catalogo_prodServ', status:false},
        {text:'Catalogo de Clave unidades de medida para los conceptos en el CFDI.', value:'catalogo_claveUnidad', status:false},
        {text:'Catalogo de Códigos Postales.', value:'catalogo_cp', status:false},
        {text:'Catalogo de Colonias.', value:'catalogo_colonia', status:false},
        {text:'Catalogo de Estados.', value:'catalogo_Estado', status:false},
        {text:'Catalogo de Exportacion', value:'catalogo_Exportacion', status:false},
        {text:'Catalogo de Forma de Pago', value:'catalogo_FormaPago' , status:false},
        {text:'Catalogo de Impuesto', value:'catalogo_Impuesto' , status:false},
        {text:'Catalogo de Localidad', value:'catalogo_Localidad' , status:false},
        {text:'Catalogo de Meses', value:'catalogo_Meses' , status:false},
        {text:'Catalogo de Metodo Pago', value:'catalogo_MetodoPago', status:false},
        {text:'Catalogo de Moneda', value:'catalogo_Moneda', status:false},
        {text:'Catalogo de Municipios', value:'catalogo_Municipio', status:false},
        {text:'Catálogo de números de pedimento operados por aduana y ejercicio.', value:'catalogo_NumPEdimentoAduana', status:false},
        {text:'Catalogo de Objeto Impuesto', value:'catalogo_ObjetoImp', status:false},
        {text:'Catalogo de Paises', value:'catalogo_Pais', status:false},
        {text:'Catalogo de Patente Aduanal', value:'catalogo_PatenteAduanal', status:false},
        {text:'Catalogo de Periodicidad', value:'catalogo_Periodicidad', status:false},
        {text:'Catalogo de Regimen Fiscal', value:'catalogo_RegimenFiscal', status:false},
        {text:'Catalogo de Taza o cuota', value:'catalogo_TasaOcuota', status:false},
        {text:'Catalogo de Tipo Comprobante', value:'catalogo_TipoComprobante', status:false},
        {text:'Catalogo de Tipo Comprobante', value:'catalogo_TipoComprobante', status:false},
        {text:'Catalogo de Tipo Tipo de Factor', value:'catalogo_TipoFactor', status:false},
        {text:'Catalogo de Uso CFDI', value:'catalogo_UsoCFDI', status:false},
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
        this.catalogo_Pais = valor;
        this.catalogo_UsoCFDI = valor;
        this.catalogo_prodServ = valor;
        this.catalogo_claveUnidad = valor;
        this.catalogo_ObjetoImp = valor;
        this.catalogo_Impuesto = valor;
        this.catalogo_TipoFactor = valor;
        this.catalogo_TasaOcuota = valor;
        this.catalogo_PatenteAduanal = valor;
        this.catalogo_Aduanas = valor;
        this.catalogo_NumPEdimentoAduana = valor;
        this.catalogo_Estado = valor;
        this.catalogo_Localidad = valor;
        this.catalogo_Municipio = valor;
        this.catalogo_cp = valor;
        this.catalogo_colonia = valor;
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
          case 'catalogo_Pais':
            this.ocultar(false);
            this.catalogo_Pais = true;
          break;
          case 'catalogo_UsoCFDI':
            this.ocultar(false);
            this.catalogo_UsoCFDI = true;
          break;
          case 'catalogo_prodServ':
            this.ocultar(false);
            this.catalogo_prodServ = true;
          break;
          case 'catalogo_claveUnidad':
            this.ocultar(false);
            this.catalogo_claveUnidad = true;
          break;
          case 'catalogo_ObjetoImp':
            this.ocultar(false);
            this.catalogo_ObjetoImp = true;
          break;
          case 'catalogo_Impuesto':
            this.ocultar(false);
            this.catalogo_Impuesto = true;
          break;
          case 'catalogo_TipoFactor':
            this.ocultar(false);
            this.catalogo_TipoFactor = true;
          break;
          case 'catalogo_TasaOcuota':
            this.ocultar(false);
            this.catalogo_TasaOcuota = true;
          break;
          case 'catalogo_PatenteAduanal':
            this.ocultar(false);
            this.catalogo_PatenteAduanal = true;
          break;
          case 'catalogo_Aduanas':
            this.ocultar(false);
            this.catalogo_Aduanas = true;
          break;
          case 'catalogo_NumPEdimentoAduana':
            this.ocultar(false);
            this.catalogo_NumPEdimentoAduana = true;
          break;
          case 'catalogo_Estado':
            this.ocultar(false);
            this.catalogo_Estado = true;
          break;
          case 'catalogo_Localidad':
            this.ocultar(false);
            this.catalogo_Localidad = true;
          break;
          case 'catalogo_Municipio':
            this.ocultar(false);
            this.catalogo_Municipio = true;
          break;
          case 'catalogo_cp':
            this.ocultar(false);
            this.catalogo_cp = true;
          break;
          case 'catalogo_colonia':
            this.ocultar(false);
            this.catalogo_colonia = true;
          break;
        }
      },
    },
  }
</script>
