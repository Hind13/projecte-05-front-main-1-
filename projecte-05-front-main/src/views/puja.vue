<template>
  <div class="puja-container">
    <h1>Pujas Disponibles</h1>
    <table>
      <thead>
      <tr>
        <th>Id Puja</th>
        <th>Precio</th>
        <th>Estado</th>
      </tr>
      </thead>
      <tbody>
      <!-- Aquí se mostrarán las pujas disponibles cuando estén enlazadas -->
      <tr>
        <td colspan="3">No hay pujas disponibles actualmente.</td>
      </tr>
      </tbody>
    </table>

    <div class="puja-form">
      <h2>Realizar una Puja</h2>
      <form @submit.prevent="confirmarPuja">
        <label for="cantidad">Cantidad a Pujar (€):</label>
        <div class="input-group">
          <input
              type="number"
              id="cantidad"
              v-model="cantidadPuja"
              min="1"
              placeholder="Introduce tu cantidad"
              required
          />
          <span class="currency-symbol">€</span>
        </div>
        <button type="submit">Confirmar Puja</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      cantidadPuja: "", // Almacena la cantidad que el usuario desea pujar
    };
  },
  methods: {
    confirmarPuja() {
      if (this.cantidadPuja > 0) {
        alert(`Has pujado ${this.cantidadPuja} €.`);
        this.cantidadPuja = ""; // Reinicia la casilla después de la puja
      } else {
        alert("Por favor, introduce una cantidad válida para pujar.");
      }
    },
  },
};
</script>

<style scoped>
.puja-container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  font-family: 'Arial', sans-serif;
  text-align: center;
}

h1 {
  margin-bottom: 20px;
  color: #333;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 30px;
}

table th,
table td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: center;
}

table th {
  background-color: #f4f4f4;
  font-weight: bold;
}

table td {
  color: #555;
}

.puja-form {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.puja-form h2 {
  margin-bottom: 15px;
}

.puja-form label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #333;
}

.input-group {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}

.input-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 16px;
  margin-right: 5px;
}

.input-group .currency-symbol {
  font-size: 18px;
  font-weight: bold;
}

button {
  padding: 10px 20px;
  background-color: #007BFF;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #0056b3;
}
</style>
message.txt
3 KB