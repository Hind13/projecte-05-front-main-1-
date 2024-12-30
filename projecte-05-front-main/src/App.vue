<template>
  <div class="app-container">
    <Navbar @navigate="handleNavigation" />
    <main class="content">
      <Body v-if="currentView === 'body'" />
      <registrar v-if="currentView === 'register'" />
      <Iniciarsesion v-if="currentView === 'login'" />
      <subasta v-if="currentView === 'subasta'" />
      <puja v-if="currentView === 'puja'" />
    </main>
  </div>
</template>

<script>
import Navbar from "@/components/general/Navbar.vue";
import Body from "@/components/general/Body.vue";
import registrar from "@/views/registrar.vue";
import Iniciarsesion from "@/views/Iniciarsesion.vue";
import subasta from "@/views/subasta.vue";
import puja from "@/views/puja.vue";

export default {
  name: "App",
  components: {
    Navbar,
    Body,
    registrar,
    Iniciarsesion,
    subasta,
    puja,
  },
  data() {
    return {
      currentView: "body", // Vista inicial
    };
  },
  methods: {
    handleNavigation(view) {
      // Cambia la vista actual en función de la navegación del usuario desde el Navbar
      this.currentView = view;
    },
  },
};
</script>

<style scoped>
/* Importa la fuente "Roboto" desde Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

/* Estructura principal */
.app-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  font-family: 'Roboto', sans-serif;
  background: linear-gradient(135deg, #f5f7fa, #c3cfe2); /* Fondo degradado */
}

/* Contenido principal */
.content {
  flex: 1;
  padding: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Estilos generales */
h1, h2, h3 {
  font-weight: 700;
  color: #333;
}

p {
  color: #555;
  line-height: 1.6;
}

/* Estilización del Navbar */
nav {
  background-color: #3b5998; /* Fondo azul */
  color: white; /* Texto blanco */
  padding: 15px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

nav a {
  color: white; /* Relleno blanco */
  text-decoration: none;
  margin: 0 10px;
  font-weight: bold;
  transition: color 0.3s ease;
}

nav a:hover {
  color: #dfe3ee; /* Azul más claro al pasar el ratón */
}
</style>
