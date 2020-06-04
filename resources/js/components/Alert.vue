<template>
  <transition>
    <div v-if="show" class="alert">
      <v-alert v-model="show" :type="type" :icon="icon" elevation="6">{{ message }}</v-alert>
    </div>
  </transition>
</template>

<script>
export default {
  props: {
    type: {
      type: String,
      default: ""
    },
    message: {
      type: String,
      default: ""
    }
  },
  data() {
    return {
      show: false
    };
  },
  mounted() {
    setTimeout(this.createMessage, 100);
    setTimeout(this.deleteMessage, 4000);
  },
  methods: {
    createMessage() {
      this.show = true;
    },
    deleteMessage() {
      this.show = false;
    }
  },
  computed: {
    icon: function() {
      if (this.type == "success") {
        return "fa-check-circle";
      } else if (this.type == "info") {
        return "fa-info";
      } else if (this.type == "warning") {
        return "fa-exclamation";
      } else if (this.type == "error") {
        return "fa-times";
      } else {
        return null;
      }
    }
  }
};
</script>

<style lang="scss" scoped>
.v-enter-active,
.v-leave-active {
  transition: all 0.5s;
}

.v-enter,
.v-leave-to {
  top: -100px;
  opacity: 0;
}
</style>