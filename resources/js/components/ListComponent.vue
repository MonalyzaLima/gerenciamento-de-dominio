<template>
  <div>
    <b-table :fields="fields" :items="items">
      <template v-slot:cell(name)="data">
        <a :href="`edit/`+`${data.item.id}`">{{ data.value }}</a>
      </template>
      <template v-slot:cell(delete)="data">
        <b-button variant="danger" v-on:click="deleteLog(data.item.id)">Delete</b-button>
      </template>
    </b-table>
  </div>
</template>

<script>
  export default {
    props: ['domains'],
    data() {
      return {
        items: this.domains,
        fields: [
          {
            key: 'id',
            label: 'ID'
          },
          {
            key: 'name',
            label: 'Name'
          },
          {
            key: 'tld'
          },
          {
            key: 'created_at',
            label: 'Created at'
          },
          {
            key: 'updated_at',
            label: 'Updated at'
          },
          {
            key: 'delete',
            label: 'Delete'
          }
        ],
      }
    },
    methods: {
      deleteLog: function (id) {
        const axios = require('axios').default;

        let items = this.items;

        axios.delete('delete/'+id)
        .then(function (response) {
          if(response.data.state == 'OK'){
            let index = items.map( el => el.id ).indexOf(id);
            items.splice(index);
            console.log(response.data.msg);
          } else {
            console.log(response.data.msg);
          }
          
          console.log(response);
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .then(function () {
          // always executed
        });
      }
    }
  }
</script>