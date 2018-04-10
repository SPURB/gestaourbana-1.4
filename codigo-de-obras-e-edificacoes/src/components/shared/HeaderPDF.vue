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
  font-family: 'Museo', sans-serif;
  font-weight: 300;
  font-size: 16px;
  line-height: 48px;
  display: inline-block;
  width: 25%;
  text-align: right;
  vertical-align: top;
  padding: 0 12px;
  border-right: 1px solid #BDBDBD;
  color: #EB5757;
  text-transform: uppercase;
  i {
    float: right;
    line-height: 48px;
    color: #333333;
    margin-left: 12px;
  }
}

.HeaderPDF:hover {
	i {
		color: #EB5757;
	}
  cursor: pointer;
}
</style>