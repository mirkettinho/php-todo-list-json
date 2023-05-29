<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- AXIOS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- FONT-AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- VUE -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>To Do List</title>
</head>

<body id="app">
  
  <section  class="vh-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">
  
          <div class="card mask-custom">
            <div class="card-body p-4 text-white">
  
              <div class="text-center pt-3 pb-2">
                <h2 class="my-4">Task List</h2>

                <input v-model="addNewTask"  @keyup.enter="aggiungi"  class="rounded-8" type="text" placeholder="New Task....">
                <button @click="aggiungi" class="btn btn-primary">Add</button>
              </div>
  
              <table class="table text-white mb-0">
                <thead>
                  <tr>
                    <th scope="col">Task</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr  class="fw-normal" v-for="(task,index) in tasks">
                    <td>
                      <span class="ms-2" >{{task}}</span>
                    </td>
                    <td class="align-middle">
                    </td>
                    <td class="align-middle">
                    </td>
                    <td class="align-middle d-flex justify-content-end">
                      <a href="#!" data-mdb-toggle="tooltip" title="Remove">
                        <i
                          @click=""
                          class="fas fa-trash-alt fa-lg text-warning">
                        </i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
  
  
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>
  

  <script src="assets/js/script.js"></script>
</body>
</html>