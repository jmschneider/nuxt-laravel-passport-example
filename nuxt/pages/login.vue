<template>
  <section class="container">
    <form @submit.prevent="localLogin">
      <div>
        <label for="username">Username</label>
        <input name="username" v-model="user.username" />
      </div>
      
      <div>
        <label for="password">Password</label>
        <input type="password" name="password" v-model="user.password" />
      </div>
      <button type="submit">Login with Password Grant</button>
    </form>
    <button @click="clientLogin">Login with OAuth Client</button>
  </section>
</template>

<script>
export default {
  auth: false,
  data() {
    return {
      user: {
        username: "",
        password: ""
      }
    };
  },
  methods: {
    async localLogin() {
      await this.$auth.loginWith("local", {
        data: {
          grant_type: "password",
          client_id: process.env.PASSPORT_PASSWORD_GRANT_ID,
          client_secret: process.env.PASSPORT_PASSWORD_GRANT_SECRET,
          response_type: "token",
          scope: "*",
          username: this.user.username,
          password: this.user.password
        }
      });
      this.$router.replace("/");
    },
    clientLogin() {
      this.$auth.loginWith("passport");
    }
  }
};
</script>
