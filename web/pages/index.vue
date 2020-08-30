<template>
  <login-component />
</template>

<script lang="ts">
import Vue from "vue";
import LoginComponent from "@/components/auth/LoginComponent.vue";

export default Vue.extend({
  data() {
    return {};
  },
  components: {
    LoginComponent
  }
});
</script>

<style scoped></style>
