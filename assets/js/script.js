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

    aggiungi(){
      this.tasks.push(this.addNewTask)
    },
    getApi(){
      axios.get(this.ApiUrl)
      .then(response => {
        console.log(response);
        this.tasks = response.data
      })
    }
  },

  mounted(){
    this.getApi()
  }
}).mount("#app")