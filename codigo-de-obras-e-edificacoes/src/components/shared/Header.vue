<template>
  <div class="header">
    <h3>{{ sectionName }}</h3>
  </div>
</template>

<script>
export default {
  name: 'Header',
  data () {
    return {
      msg: 'Header'
    }
  },
  computed: {
    sectionName(){ return this.$route.name}
  }
}
</script>

<style type="text/css">
body{
}
</style>

<style lang="scss" scoped>
    .header{
        h3{
          font-size:15px;
        }
    }
</style>
