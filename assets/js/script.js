const {createApp} = Vue;

createApp({
  data(){
    return{
      ApiUrl: "./server.php",
      tasks: [],
      addNewTask: ""
    }
  },

  methods:{

  },

  mounted(){

  }
}).mount("#app")