<template>
  <v-app-bar app>
    <a href="/">ya-laravel-template</a>
    <v-spacer></v-spacer>
    <div v-if="user">
      <v-menu left bottom>
        <template v-slot:activator="{ on }">
          <v-toolbar-title v-on="on" class="pointer">
            <v-avatar size="2em">
              <img :src="user.social_avatar" alt="Avatar" />
            </v-avatar>
          </v-toolbar-title>
        </template>

        <v-list>
          <v-list-item href="/logout">
            <v-list-item-title>ログアウト</v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>
    </div>

    <div v-else>
      <v-btn v-if="path !== 'login'" href="/login">
        <span>ログイン</span>
        <v-icon class="ml-2" small>fas fa-sign-in-alt</v-icon>
      </v-btn>
    </div>
  </v-app-bar>
</template>


<script>
export default {
  props: {
    user: {
      type: Object
    },
    path: {
      type: String,
      required: true
    }
  }
};
</script>