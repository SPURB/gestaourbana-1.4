<template>
  <div class="HeaderMenu">
    <div class="menu" @click="showMenu = !showMenu">
      {{ tituloMenu }}
      <i class="small material-icons" v-if="!showMenu">arrow_drop_down</i>
      <i class="small material-icons" v-else>arrow_drop_up</i>
    </div>

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
    width: 173px;
    left: 785px;
    margin-top: 0px;
    padding: 0 0 6px 0;
    text-align: left;
    font-size: 14px;
    text-transform: none;
    color: black;
    background-color: #FAFAFA;
    line-height: 130%;
    border: 1px solid #BDBDBD;
    border-radius: 0 0 2px 2px;
    box-shadow: 0 2px 2px rgba(0,0,0,0.12);
    ul {
      li {
        div {
          line-height: 32px;
          padding: 0 12px;
        }
        div:hover {
          background-color: #EEE;
        }
      }
    }
  }
}
</style>