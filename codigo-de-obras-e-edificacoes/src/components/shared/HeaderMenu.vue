<template>
  <div class="HeaderMenu">
  	<div class="menu" @click="showMenu = !showMenu">
      {{ tituloMenu }}
      <i class="small material-icons" v-if="!showMenu">arrow_drop_down</i>
      <i class="small material-icons" v-else>arrow_drop_up</i>
    </div>

    <div class="menu-exp" v-if="showMenu">
      <ul>
        <!-- <li>a</li>
        <li>a</li>
        <li>a</li>
        <li>a</li>
        <li>a</li> -->
        <li v-for="navitem in navItems">
          <router-link :to='navitem.path'>{{ navitem.name }}</router-link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
	name: 'HeaderMenu',
	data() {
		return {
      showMenu: false,
			tituloMenu: 'Seções'
		}
	}, 
  props:['navItems']
}
</script>

<style lang="scss" scoped>
.HeaderMenu {
  div.menu {
    float: right;
    width: 162px;
    height: 24px;
    margin-top: -48px;
    padding: 12px 0 12px 12px;
    line-height: 24px;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 500;
    color: #EB5757;
    cursor: pointer;
    background-color: #FAFAFA;
    i {
      float: right;
      margin-left: 24px;
    }
  }

  div.menu-exp {
    position: absolute;
    width: 149px;
    left: 785px;
    margin-top: 0px;
    padding: 6px 24px 6px 0;
    text-align: left;
    font-size: 14px;
    text-transform: none;
    color: black;
    line-height: 130%;
    border-left: 1px solid #CCC;
    border-right: 1px solid #CCC;
    border-bottom: 1px solid #CCC;
    border-radius: 2px;
    box-shadow: 0 2px 2px rgba(0,0,0,0.12);
    ul {
      li {
        width: 149px;
        display: block;
        line-height: 12px;
        padding: 12px;
      }
      li:hover {
        background-color: #DDD;
      }
    }
  }

}
</style>