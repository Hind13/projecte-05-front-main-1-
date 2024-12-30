<template>
  <nav>
    <ul>
      <li><a href="#" @click.prevent="navigate('body')">Inicio</a></li>
      <li><a href="#" @click.prevent="navigate('register')">Registrarse</a></li>
      <li><a href="#" @click.prevent="navigate('login')">Iniciar Sesión</a></li>
      <li><a href="#" @click.prevent="navigate('subasta')">Subastas</a></li>
      <li><a href="#" @click.prevent="navigate('puja')">puja</a></li>
    </ul>
  </nav>
</template>

<script>
export default {
  methods: {
    navigate(view) {
      // Emite el evento 'navigate' al componente padre con la vista seleccionada
      this.$emit('navigate', view);
    },
  },
};
</script>

<style scoped>
nav ul {
  list-style-type: none;
  display: flex;
  gap: 20px;
  padding: 0;
}

nav ul li {
  display: inline;
}

nav ul li a {
  text-decoration: none;
  color: #007BFF;
  cursor: pointer;
}

nav ul li a:hover {
  color: #0056b3;
}
</style>
