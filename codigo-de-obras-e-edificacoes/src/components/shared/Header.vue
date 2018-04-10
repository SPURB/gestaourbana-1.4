<template>
  <div class="header">
    <div class="titulo-secao">{{ sectionName }}</div>
    <HeaderPDF :navItems="navitems"></HeaderPDF>
    <HeaderMenu :navItems="navitems"></HeaderMenu>
  </div>
</template>

<script>
import HeaderPDF from '@/components/shared/HeaderPDF'
import HeaderMenu from '@/components/shared/HeaderMenu'

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
  display: flex;
  height: 48px;
  margin-bottom: 40px;
  border-bottom: 1px solid #BDBDBD;
  padding: 0;

  div.titulo-secao {
    font-family: 'Museo';
    font-size: 2em;
    font-weight: 300;
    line-height: 48px;
    width: 50%;
    display: inline-block;
  }
}
</style>