<template>
  <div class="fichaMedicaComponent">
    <h5 class="fichaMedicaComponentTitle" v-if="title !== '' && !contraction">
      <i :class="icon"></i> {{ title }}
    </h5>
    <div
      v-if="contraction"
      class="contraerBox cursor-pointer p-2 mb-2"
      @click="handlerContractionBox"
    >
      <h5 class="fichaMedicaComponentTitle p-0 m-0" v-if="title !== ''">
        <i :class="icon"></i> {{ title }}
      </h5>
      <div v-if="showBox" class="text-muted">
        Contraer <i class="fa-solid fa-arrow-up-short-wide"></i>
      </div>
      <div v-if="!showBox" class="text-primary">
        Desplegar <i class="fa-solid fa-arrow-down-short-wide"></i>
      </div>
    </div>
    <div v-if="showBox">
      <slot></slot>
    </div>
  </div>
</template>

<style scoped>
.contraerBox {
  background-color: #f7f8fd;
  border-radius: 7px;
  height: 35px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.contraerBox:hover {
  background-color: #ededed;
}
</style>

<script>
export default {
  components: {},
  props: ['title', 'icon', 'contraction'],
  data() {
    return {
      showBox: true
    }
  },
  computed: {},
  mounted() {},
  methods: {
    handlerContractionBox() {
      this.showBox = !this.showBox
    }
  }
}
</script>
