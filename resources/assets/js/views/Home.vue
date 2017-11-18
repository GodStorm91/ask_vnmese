<template>
  <div>
    <trumbowyg v-model="content" :config="config" class="editor"></trumbowyg>
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
            // axios.get("statuses")
            // .then(({data}) => this.statuses = data);
        }
    }
</script>
