<template>
<div>
  <b-card title="Card Title" no-body>
    <b-card-header header-tag="nav">
      <b-nav card-header tabs>
        <b-nav-item active>Domínios</b-nav-item>
      </b-nav>
    </b-card-header>
    <b-card-body>
      <b-form @submit="onSubmit" @reset="onReset" v-if="show">
        <b-form-group
          id="input-group-1"
          label="Nome:"
          label-for="input-1"
        >
          <b-form-input
            id="input-1"
            v-model="form.name"
            placeholder="Insira o nome"
            type="text"
            required
          ></b-form-input>
        </b-form-group>

        <b-form-group id="input-group-2" label="tld:" label-for="input-2">
          <b-form-input
            id="input-2"
            v-model="form.tld"
            placeholder="Insira o tld"
            required
          ></b-form-input>
        </b-form-group>
        <b-button type="submit" variant="primary">Criar</b-button>
        <b-button href="index/" type="reset" variant="danger">Cancelar</b-button>
      </b-form>
    </b-card-body>
  </b-card>
</div>
</template>

<script>

  export default {
    props: ['csrfToken'],
    data() {
      return {
        token: this.csrfToken,
        form: {
          tld: '',
          name: ''
        },
        show: true
      }
    },
    methods: {
      onSubmit(event) {
        event.preventDefault();

        const axios = require('axios').default;

        axios.post('store', {
          tld: this.form.tld,
          name: this.form.name,
          _token: this.token
        })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        })
        .then(function () {
          // always executed
        }); 
      },
      onReset(event) {
        event.preventDefault()
        this.form.tld = ''
        this.form.name = ''
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      }
    }
  }
</script>
