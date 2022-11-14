<template>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>


    
    <tr  v-for="item in items" :key="item.id">
      <th scope="row">{{item.id}}</th>
      <td>{{item.name}}</td>
      <td>{{item.description}}</td>
      <td>{{item.status}}</td>
    </tr>

     
  </tbody>
</table>
</template>

<script>

export default {
    methods: {
        getItems() {
            axios
                .get("api/taskman")
                .then(res => {
                    this.items = res.data;
                    console.log(this.items)
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    created() {
        this.getItems();
    }
    }
</script>

