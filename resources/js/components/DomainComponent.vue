<template>
<div>
  <b-card title="Card Title" no-body>
    <b-card-header header-tag="nav">
      <b-nav card-header tabs>
        <b-nav-item active>Domínios</b-nav-item>
      </b-nav>
    </b-card-header>
    <b-card-body class="text-center">
      <b-button variant="primary">Adicionar Domínio</b-button>
    </b-card-body>
    <list-component :domains='items'></list-component>
  </b-card>
</div>
</template>

<script>
import { BSidebar } from 'bootstrap-vue'
Vue.component('b-sidebar', BSidebar)
import { SidebarPlugin } from 'bootstrap-vue'

import ListComponent from "./ListComponent"

Vue.use(SidebarPlugin)
    export default {
        components: {
          ListComponent
        },
        props: ['domains'],
        data() {
          return {
            items: this.domains
          }
        },
        mounted() {
          console.log('Component mounted.')
        }
    }
</script>