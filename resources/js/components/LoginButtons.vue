<template>
  <div>
    <v-row class="text-center" no-gutters>
      <v-col cols="12">
        <v-btn class="my-2" href="/login/twitter" large color="#1DA1F2" width="230" dark>
          <v-icon small>fab fa-twitter</v-icon>
          <span class="text-capitalize ml-2">Twitterでログイン</span>
        </v-btn>
      </v-col>
      <v-col cols="12">
        <v-btn class="my-2" href="/login/facebook" large color="#4267B2" width="230" dark>
          <v-icon small>fab fa-facebook-f</v-icon>
          <span class="text-capitalize ml-2">Facebookでログイン</span>
        </v-btn>
      </v-col>
      <v-col cols="12">
        <v-btn class="my-2" href="/login/google" large color="#dd4b39" width="230" dark>
          <v-icon small>fab fa-google</v-icon>
          <span class="text-capitalize ml-2">Googleでログイン</span>
        </v-btn>
      </v-col>
    </v-row>
    <div class="my-1 text-caption text-center">
      <div>
        <a href="/terms" class="link--text">利用規約</a>に同意の上ログインしてください
      </div>
      <div>ログイン後に許可なくSNSへの投稿は行いません</div>
    </div>
  </div>
</template>