<template>
  <section class="container">
    <div>
      <form>
        <div>
          <label for="username">Username</label>
          <input name="username" v-model="user.username" />
        </div>
        
        <div>
          <label for="password">Password</label>
          <input type="password" name="password" v-model="user.password" />
        </div>
        
        <div>
          <button type="submit" @click.prevent="passwordGrantLogin">Login with Password Grant</button>
        </div>

        <div>
          <button type="submit" @click.prevent="customPasswordGrantLogin">Login with Custom Passport Password Scheme</button>
        </div>

      </form>
    </div>
    <hr />
    <div><button @click="clientLogin">Login with OAuth Client</button></div>
    <div><button @click="passportClientCustomLogin">Login with Custom Passport Client Scheme</button></div>
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
    async passwordGrantLogin() {
      await this.$auth.loginWith("password_grant", {
        data: {
          grant_type: "password",
          client_id: process.env.PASSPORT_PASSWORD_GRANT_ID,
          client_secret: process.env.PASSPORT_PASSWORD_GRANT_SECRET,
          scope: "*",
          username: this.user.username,
          password: this.user.password
        }
      });
      this.$router.replace("/");
    },
    async customPasswordGrantLogin() {
      await this.$auth.loginWith("password_grant_custom", {
        data: this.user
      });
      this.$router.replace("/");
    },
    clientLogin() {
      this.$auth.loginWith("passport");
    },
    passportClientCustomLogin() {
      this.$auth.loginWith("passport_client_custom");
    }
  }
};
</script>

<style scoped>
div {
  margin: 10px 0;
}
</style>
