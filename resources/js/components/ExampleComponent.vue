<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
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
