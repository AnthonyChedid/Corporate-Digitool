<template>
  <v-progress-linear
      color="lime"
      indeterminate
      height="7"
      v-show="load"
    ></v-progress-linear>
</template>


<script>
  export default {
    props:['load'],
  }

</script>
<style>

</style>