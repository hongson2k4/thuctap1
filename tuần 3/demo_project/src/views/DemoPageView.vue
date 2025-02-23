<!-- <template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
      For a guide and recipes on how to configure / customize this project,<br>
      check out the
      <a href="https://cli.vuejs.org" target="_blank" rel="noopener">vue-cli documentation</a>.
    </p>
    <h3>Installed CLI Plugins</h3>
    <ul>
      <li><a href="https://github.com/vuejs/vue-cli/tree/dev/packages/%40vue/cli-plugin-babel" target="_blank" rel="noopener">babel</a></li>
      <li><a href="https://github.com/vuejs/vue-cli/tree/dev/packages/%40vue/cli-plugin-eslint" target="_blank" rel="noopener">eslint</a></li>
    </ul>
    <h3>Essential Links</h3>
    <ul>
      <li><a href="https://vuejs.org" target="_blank" rel="noopener">Core Docs</a></li>
      <li><a href="https://forum.vuejs.org" target="_blank" rel="noopener">Forum</a></li>
      <li><a href="https://chat.vuejs.org" target="_blank" rel="noopener">Community Chat</a></li>
      <li><a href="https://twitter.com/vuejs" target="_blank" rel="noopener">Twitter</a></li>
      <li><a href="https://news.vuejs.org" target="_blank" rel="noopener">News</a></li>
    </ul>
    <h3>Ecosystem</h3>
    <ul>
      <li><a href="https://router.vuejs.org" target="_blank" rel="noopener">vue-router</a></li>
      <li><a href="https://vuex.vuejs.org" target="_blank" rel="noopener">vuex</a></li>
      <li><a href="https://github.com/vuejs/vue-devtools#vue-devtools" target="_blank" rel="noopener">vue-devtools</a></li>
      <li><a href="https://vue-loader.vuejs.org" target="_blank" rel="noopener">vue-loader</a></li>
      <li><a href="https://github.com/vuejs/awesome-vue" target="_blank" rel="noopener">awesome-vue</a></li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style> -->

<template>
    <h1>Chào mừng đến với Vue.js</h1>
    <input v-model="name" placeholder="Nhập tên của bạn">
    <p>Xin chào, {{ name }}</p>
  
    <!-- <p v-if="isVisible">DDDD</p>
    <button @click="toggleVisible">Hide/Show</button> -->
  
    <div>
      <p>Giá trị a: {{ a }}</p>
      <p>Giá trị a: {{ b }}</p>
      <p>Tổng sử dụng computed : {{ sumComputed }}</p>
      <p>Tổng sử dụng method: {{ sumMethod() }}</p>
      <button @click="a++">a + 1</button>
      <button @click="b++">b + 1</button>
    </div>
  
    <div>
      <p>{{ message }}</p>
      <button @click="updateMessage">Cập nhật</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isVisible: true,
        name: '',
        message: 'Hello Vue.js!',
        a: 1,
        b: 2
      }
    }
    
    ,
    computed: {
      sumComputed() {
        console.log('Computed has been running!');
        return this.a + this.b;
      }
    },
    methods: {
      sumMethod() {
        console.log('Method has been running!');
        return this.a + this.b;
      }
    }
    ,
    created() {
      console.log("thành phần được tạo");
    },
    mounted() {
      console.log("thành phần được gắn kết");
    },
    updated() {
      console.log("thành phần được cập nhật");
    },
    unmounted() {
      console.log("thành phần được hủy");
    }
    // ,
    // methods: {
    //   updateMessage() {
    //     this.message = "Tin nhắn đã được cập nhật!";
    //   }
    // }
  }
  </script>