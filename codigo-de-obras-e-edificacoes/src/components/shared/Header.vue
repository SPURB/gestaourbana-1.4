<template>
  <div class="header">
    <h3>{{ sectionName }}</h3>

    <HeaderPDF></HeaderPDF>

    <HeaderMenu></HeaderMenu>

  </div>
</template>

<script>
import HeaderMenu from '@/components/shared/HeaderMenu'
import HeaderPDF from '@/components/shared/HeaderPDF'

export default {
  name: 'header',
  data () {
    return {
      showMenu: false
    }
  },
  computed: {
    sectionName() { return this.$route.name }
  },
  components: {
    HeaderPDF, HeaderMenu
  }
}
</script>

<style lang="scss" scoped>
  .header {
    h3 {
      font-size: 31px;
      display: inline-block;
      line-height: 24px;
      padding: 12px 0;
      max-width: 480px;
    }
    margin-bottom: 40px;
    border-bottom: 1px solid #CCC;
  }
</style>