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
@font-face {
  font-family: 'Museo';
  src: url('../../../src/assets/fonts/Museo300-Regular.otf');
  font-weight: 300;
  text-rendering : optimizeLegibility;
}

.HeaderPDF {
  font-family: 'Museo';
  font-weight: 300;
  font-size: 16px;
  line-height: 24px;
  text-align: right;
  text-transform: uppercase;
  display: inline-block;
  float: right;
  height: 24px;
  margin-top: -48px;
  margin-right: 174px;
  padding: 12px;
  color: #333;
  border-right: 1px solid #BDBDBD;
  i {
    float: right;
    margin-left: 1em;
  }
}

.HeaderPDF:hover {
	i {
		color: #EB5757;
	}
  cursor: pointer;
}
</style>