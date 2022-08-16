<template>
  <div>
    <b-table :fields="fields" :items="items">
      <template #cell(name)="data">
        <a :href="`edit/`+`${data.value.replace(/[^a-z]+/i,'-').toLowerCase()}`">{{ data.value }}</a>
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
          }
        ],
      }
    },
    methods: {

    }
  }
</script>