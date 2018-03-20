<template>
  <div class="header">
    <h3>{{ sectionName }}</h3>
    <div class="menu">
      Seções <i class="small material-icons">arrow_drop_down</i>
    </div>
    <div class="dl">
      Baixar PDF do COE <i class="small material-icons">file_download</i>
    </div>
  </div>
  <div class="menu-exp">
      <ul class="menu">
        <li>Início</li>
        <li>Apresentação</li>
        <li>Início</li>
        <li>Apresentação</li>
        <li>Início</li>
        <li>Apresentação</li>
      </ul>
  </div>
</template>

<script>
export default {
  name: 'Header',
  data () {
    return {
      // msg: 'Header'
    }
  },
  computed: {
    sectionName(){ return this.$route.name}
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
      }
      div.dl {
        text-align:right;
        float: right;
        font-size: 16px;
        font-weight: 500;
        color: #333;
        text-transform: uppercase;
        line-height: 24px;
        padding: 12px;
        i {
          float: right;
          margin-left: 24px;
        }
      }
      div.menu {
        display: block;
        text-align:right;
        float: right;
        font-size: 16px;
        line-height: 24px;
        text-transform: uppercase;
        padding: 12px 0 12px 12px;
        font-weight: 500;
        color: #EB5757;
        border-left:1px solid #CCC;
        i {
          float: right;
          margin-left: 24px;
        }
      }
      margin-bottom: 40px;
      border-bottom: 1px solid #CCC;
    }
</style>
