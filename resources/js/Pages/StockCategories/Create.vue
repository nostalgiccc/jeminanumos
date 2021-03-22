<template>
  <div class="flex flex-wrap w-3/4">

<div>
<h1 class="text-xl block">Description is: {{form.description}}</h1>

</div>

    <div>
      <label for="id">Id</label>
      <input type="text" name="id" id="id"  v-model="form.id" />
    </div>

    <div>
      <label for="description">Description</label>
      <input type="text" name="description" id="description" v-model="form.description" />
    </div>

      <div>
      <button>Save</button>
    </div>

  
  </div>
</template>

<script>
import Layout from "@/Layouts/Layout";
export default {
  layout: Layout,

  data(){
    return{
          form:{
             id:null,
             description:"Lotus Power Grinder",
             type:null,
             stock_account:null,
          }

    }

    

  }
  


};
</script>

<style>
</style>