<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="message"　v-for="status in statuses">
                    <div class="message-header">
                        <p>
                            {{status.user.name}} said
                        </p>
                        <p>
                            A moment ago
                        </p>
                    </div>

                    <div class="message-body" v-text="status.body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                statuses: []
            }
        },
        created() {
            //fire off an ajax 
            axios.get("statuses")
            .then(({data}) => this.statuses = data);
        }
    }
</script>
