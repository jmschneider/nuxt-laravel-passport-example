<template>
  <section class="container">
    <pre>{{ $auth.loggedIn }}</pre>
    <button @click="logout">Logout</button>
  </section>
</template>

<script>
import AppLogo from "~/components/AppLogo.vue";

export default {
  methods: {
    logout() {
      this.$auth.logout();
      this.$router.replace("/login");
    }
  }
};
</script>
