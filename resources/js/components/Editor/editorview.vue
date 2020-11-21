<template>
<div class="col-lg-12">
  <div id="edit-view" class="modal fade mt-5" data-backdrop="static"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      </div>
        <div class="row justify-content-center">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
           <div class=" ml-3 mr-3 row justify-content-center">
             <a href="/#/editor" type="button" class="shadow p-2 mb-2  rounded col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-warning" data-dismiss=""> <i class="fas fa-edit    "></i> Continue Editting </a>
           </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
           <div class=" ml-3 mr-3 row justify-content-center">
             <button @click="goToRequest(1)" type="button" class="shadow p-2 mb-2  rounded col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-success"> <i class="fa fa-database" aria-hidden="true"></i> View Changes </button>
            </div>
         </div>
          
      </div>
    </div>
  </div>
</div>
</div>
</template>

<script>
export default {
  data () {
    return {
    }
  },
  methods: {
   goToRequest(request){
     //window.location.assign('/posts/' + Number(this.$Post.getPostId()));
     window.location.assign('/#/solutions');
     $('#edit-view').modal('hide');
   }
  },
  mounted(){
    
  }
}
</script>

<style>
  .success-msg{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
  }
</style>