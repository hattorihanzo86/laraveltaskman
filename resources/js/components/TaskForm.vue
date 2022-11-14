<template>
    <form>
        <div class="form-group">
            <label for="name">Task</label>
            <input type="text" class="form-control" name="name" id="name"  v-model="item.name" />
        </div>


        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="5"  v-model="item.description"></textarea>
        </div>
       

        <button type="submit" class="btn btn-danger" style="margin-top:10px"  @click="addItem()">Add Task</button>
    </form>
</template>

<script>
  export default {
    data: function() {
        return {
            item: {
                name: "",
                description:"",

            }
        };
    },
    methods: {
        addItem() {
            console.log('add item click')
            if (this.item.name == "") {
                return;
            }
            if (this.item.description == "") {
                return;
            }
            axios
                .post("api/taskman/store", {
                    item: this.item
                })
                .then(res => {
                    if (res.status == 201) {
                        this.item.name = "";
                        this.item.description = "";
                        console.log('task added')
                    }
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
};
</script>