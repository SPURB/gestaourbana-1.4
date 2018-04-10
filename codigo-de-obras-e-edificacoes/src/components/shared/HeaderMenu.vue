<template>
  <div class="HeaderMenu"@click="showMenu = !showMenu">

  	{{ tituloMenu }}
    <i class="small material-icons" v-if="!showMenu">arrow_drop_down</i>
    <i class="small material-icons" v-else>arrow_drop_up</i>

      <div class="menu-exp" v-if="showMenu">
        <ul>
          <li v-for="navitem in navItems" @click="showMenu = !showMenu">
            <router-link :to='navitem.path' active-class="menuLi"><div>{{ navitem.name }}</div></router-link>
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
      tituloMenu: "Seções",
      showMenu: false,
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

.HeaderMenu {
  font-family: 'Museo', sans-serif;
  font-weight: 300;
  font-size: 16px;
  line-height: 48px;
  display: inline-block;
  width: 25%;
  vertical-align: top;
  padding: 0 0 0 12px;
  color: #EB5757;
  text-transform: uppercase;

  i {
    float: right;
    line-height: 48px;
    color: #333333;
  }

  div.menu-exp {
    margin-top: 0px;
    padding: 6px 0;
    color: black;
    background-color: #FAFAFA;
    border: 1px solid #BDBDBD;
    border-radius: 0 0 2px 2px;
    box-shadow: 0 2px 2px rgba(0,0,0,0.12);
    ul {
      li {
        div {
          font-family: 'Museo';
          font-weight: 300;
          font-size: 14px;
          line-height: 30px;
          text-align: left;
          padding: 0 12px;
        }
        div:hover {
          background-color: #EEE;
        }
      }
    }
  }

}

.HeaderMenu:hover { cursor: pointer; }
</style>