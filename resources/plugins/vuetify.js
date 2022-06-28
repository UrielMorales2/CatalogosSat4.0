
// You still need to register Vuetify itself
// src/plugins/vuetify.js
import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)

const opts = {

        icons: {
            iconfont: 'mdi'
        },

}

export default new Vuetify(opts)