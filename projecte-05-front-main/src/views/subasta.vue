<script setup lang="ts">

</script>

<template>
  <div class="subasta-container">
    <h1>Lista de Subastas</h1>
    <table>
      <thead>
      <tr>
        <th>Id Subasta</th>
        <th>Precio Mínimo</th>
        <th>Precio Máximo</th>
        <th>Precio Recomendado</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="subasta in subastas" :key="subasta.IdSubasta">
        <td>{{ subasta.IdSubasta }}</td>
        <td>{{ subasta.PrecioMin }}</td>
        <td>{{ subasta.PrecioMax }}</td>
        <td>{{ subasta.PrecioRecomendado }}</td>
        <td>{{ formatFecha(subasta.FechaInicio) }}</td>
        <td>{{ formatFecha(subasta.FechaFin) }}</td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      subastas: [], // Aquí se almacenarán las subastas cargadas
    };
  },
  methods: {
    // Método para cargar las subastas desde una API simulada
    async fetchSubastas() {
      try {
        // Simulación de datos obtenidos de una API
        const response = await fetch("https://api.tusubasta.com/subastas"); // Cambiar por tu API real
        const data = await response.json();
        this.subastas = data;
      } catch (error) {
        console.error("Error al cargar las subastas:", error);
      }
    },
    // Formatea una fecha a un formato más legible
    formatFecha(fecha) {
      const date = new Date(fecha);
      return date.toLocaleDateString("es-ES");
    },
  },
  mounted() {
    this.fetchSubastas(); // Cargar las subastas al montar el componente
  },
};
</script>

<style scoped>
.subasta-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
}

h1 {
  margin-bottom: 20px;
  color: #333;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table th,
table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

table th {
  background-color: #f4f4f4;
  color: #333;
}

table tr:nth-child(even) {
  background-color: #f9f9f9;
}

table tr:hover {
  background-color: #f1f1f1;
}
</style>

<style scoped>

</style>