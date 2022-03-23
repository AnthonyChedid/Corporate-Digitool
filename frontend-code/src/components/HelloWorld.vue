<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
      {{axios.get("https://localhost:8080/api/1").then(response => this.totalVuePackages = response.data.total)}};
    </p>  
  </div>
</template>