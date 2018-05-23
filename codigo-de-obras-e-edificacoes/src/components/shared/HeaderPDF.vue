<template>
  <div class="HeaderPDF">
    {{ dlmsg }} <i class="small material-icons">file_download</i>
  </div>
</template>

<script>
export default {
  name: 'HeaderPDF',
  data() {
    return {
      dlmsg: 'Baixar PDF do COE'
    }
  },
  props:['navItems']
}
</script>

<style lang="scss" scoped>
.HeaderPDF {
  display: inline-block;
  float: right;
  margin-right: 174px;
  height: 24px;
  padding: 12px;
  line-height: 24px;
  text-align: right;
  font-size: 16px;
  font-weight: 500;
  color: #333;
  border-right: 1px solid #BDBDBD;
  text-transform: uppercase;
  i {
    float: right;
    margin-left: 1rem;
  }
}
.HeaderPDF:hover {
  i {
    color: #EB5757;
  }
  cursor: pointer;
}
</style>