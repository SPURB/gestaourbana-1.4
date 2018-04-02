<template>
  <div class="header">
    <div class="titulo-secao">{{ sectionName }}</div>
    <HeaderMenu :navItems="navitems"></HeaderMenu>
    <HeaderPDF :navItems="navitems"></HeaderPDF>
  </div>
</template>

<script>
import HeaderMenu from '@/components/shared/HeaderMenu'
import HeaderPDF from '@/components/shared/HeaderPDF'

export default {
  name: 'header',
  data () {
    return {
      showMenu: false,
      navitems: []
    }
  },
  computed: {
    sectionName() { return this.$route.name }
  },
  created(){
    this.createNavitems();
  },
  methods:{
    createNavitems(){
      const app = this;
      const routes = this.$router.options.routes;
      routes.filter(function(index) {
        if('name' in index){
          app.navitems.push(index)
        }
      })
    }
  },
  components: { HeaderPDF, HeaderMenu }
}
</script>

<style lang="scss" scoped>
@font-face {
  font-family: 'Museo';
  src: url('../../../src/assets/fonts/Museo300-Regular.otf');
  font-weight: 300;
  text-rendering : optimizeLegibility;
}

.header {
  div.titulo-secao {
    font-family: 'Museo';
    font-size: 2em;
    font-weight: 300;
    display: inline-block;
    line-height: 24px;
    padding: 12px 0;
    max-width: 480px;
  }
  margin-bottom: 40px;
  border-bottom: 1px solid #BDBDBD;
}
</style>