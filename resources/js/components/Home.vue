<template>
  <v-container>
    <p>Catálogos SAT</p> 
    <v-col class="d-flex" cols="12" sm="6">
      <v-select :items="items" label="Outlined style" dense outlined></v-select>
    </v-col>

    <div>
      <catalogo_FormaPago></catalogo_FormaPago>
    </div>
  </v-container>
</template>

<script>
import catalogo_FormaPago from "./CatalogosSat/CatalogoSat_FormaPago.vue"
  export default {
    components:{
      catalogo_FormaPago
    },
    data: () => ({
      items: ['Catalogo de Moneda', 'Catalogo Forma de Pago', 'Catalogo Modo de pago'],
    }),
  }
</script>