<template>
  <section class="container">
    <pre>{{ $auth.loggedIn }}</pre>
    <button @click="logout">Logout</button>
  </section>
</template>

<script>
export default {
  methods: {
    logout() {
      this.$auth.logout();
      this.$router.replace("/login");
    }
  }
};
</script>
