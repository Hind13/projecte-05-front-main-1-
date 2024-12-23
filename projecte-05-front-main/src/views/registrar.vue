

<template>

  <div class="register">
    <h2>Formulario de Registro: </h2>

    <form @submit.prevent="handleSubmit">
      <div>
        <label for="username">Nombre de Usuario:</label>
        <input
            type="text"
            id="username"
            v-model="form.username"
            required
        />
        <span v-if="errors.username">{{ errors.username }}</span>
      </div>

      <div>
        <label for="email">Correo Electrónico:</label>
        <input
            type="email"
            id="email"
            v-model="form.email"
            required
        />
        <span v-if="errors.email">{{ errors.email }}</span>
      </div>

      <div>
        <label for="password">Contraseña:</label>
        <input
            type="password"
            id="password"
            v-model="form.password"
            required
        />
        <span v-if="errors.password">{{ errors.password }}</span>
      </div>

      <div>
        <label for="confirmPassword">Confirmar Contraseña:</label>
        <input
            type="password"
            id="confirmPassword"
            v-model="form.confirmPassword"
            required
        />
        <span v-if="errors.confirmPassword">{{ errors.confirmPassword }}</span>
      </div>

      <button type="submit">Registrarse</button>
    </form>
  </div>

</template>

<script>
import Navbar from "@/components/general/Navbar.vue";
import Footer from "@/components/general/Footer.vue";
export default {
  components: {Navbar},
  data() {
    return {
      form: {
        username: '',
        email: '',
        password: '',
        confirmPassword: ''
      },
      errors: {}
    };
  },
  methods: {
    validateForm() {
      this.errors = {}; // Reset errors

      // Validación del nombre de usuario
      if (!this.form.username) {
        this.errors.username = 'El nombre de usuario es requerido';
      }

      // Validación del correo electrónico
      const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      if (!this.form.email || !emailPattern.test(this.form.email)) {
        this.errors.email = 'Por favor ingresa un correo electrónico válido';
      }

      // Validación de la contraseña
      if (!this.form.password || this.form.password.length < 6) {
        this.errors.password = 'La contraseña debe tener al menos 6 caracteres';
      }

      // Validación de la confirmación de la contraseña
      if (this.form.password !== this.form.confirmPassword) {
        this.errors.confirmPassword = 'Las contraseñas no coinciden';
      }

      // Si hay errores, retornar false, de lo contrario true
      return Object.keys(this.errors).length === 0;
    },
    handleSubmit() {
      if (this.validateForm()) {
        // Aquí podrías enviar los datos a un servidor
        alert('Formulario enviado correctamente');
        console.log(this.form);
      }
    }
  }
};
</script>

<style scoped>
.register {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
}

form div {
  margin-bottom: 15px;
}

input {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
}

button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
  background-color: #45a049;
}

span {
  color: red;
  font-size: 12px;
}
</style>
