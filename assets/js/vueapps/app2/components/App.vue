{% verbatim %}
<template>
  <div>
    <p>App 2 Vue.js App</p>
    <p>{{ buttonClicks }}</p>
    <button v-on:click="buttonClicks--">Click me</button>
  </div>
</template>
{% endverbatim %}

<script>
  export default {
    name: "App",

    data() {
      return {
        buttonClicks: 1000
      };
    }

  }
</script>