<template>
<div id="createpost" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div id="create-height" class="modal-content  Theme ">
      <!--Modal Header-->
      <div class="modal-header">
        <h5 class="modal-title heading-color heading-style" id="createCms">Create Post</h5>
        <div class="spinner-border ml-1 text-success" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--body-->
      <div class="modal-body">
        <!--Form-->
            <!--title-->
          <div class="form-group">
            <label  class="text-white" for="title">Post title</label>
            <input v-model="title" type="text" name="title" class="form-control" >
          </div> 
          <!--post image-->      
          <div class="form-group">
            <label  class="text-white" for="image">Post Image</label>
            <input @change="savePostImage()" id="postimage" type="file"   name="image">
          </div>
          <!--footer-->
      <div class="modal-footer">
        <button @click="Save()"  class="btn btn-primary">Create Post</button>
      </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: ['post'],
    data() {
        return {
            title: '',
            image: ''
        }
    },
    methods: {
      /**
       * Save post
      */
     Save(){
      if (Boolean(localStorage.editidmode)==true && localStorage.posteditid!=='null') {
        alert('updating');
        this.editPost();
      }else{
        alert('creating');
        this.Savepost();
      }
     },
      /**
       * Editting Post
      */
      editPost(){
          axios.get('/showpost/' + localStorage.posteditid)
           .then((response)=>{
             var data = null;
              data = response.data;
              if (this.post!==response.data.post) {
                data.post = this.post; 
                alert('post changed');
              }

              if (this.image!==response.data.thumbnail) {
                data.post = this.post; 
                alert('thumbnail changed');
              } 
              
              if(this.title!==response.data.title){
                data.title = this.title; 
                alert('title changed');
              }
              else{
              data = {
              title: this.title,
              image: this.thumbnail,
              post: this.post
          }
              }
          const editmode = Boolean(localStorage.editmode);
          const postEditId = Number(this.$Post.getPostId());
           var link = null;
           if(editmode==true){
               link = '/editpost/' + postEditId;
           }else{
             link = '/createpost';
           }
          axios.post(link,data)
          .then(()=>{
             $('#createpost').modal('hide');
              this.$swal({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              })
              setTimeout(() => {
                $('#edit-view').modal('show');
              }, 1500)
          })
            .catch(()=>{
             this.$swal({
               icon: 'error',
               title: 'Oops...',
               text: 'Something went wrong!',
               footer: 'Fix these errors',
             })

            })
           })

           
      },
      /**
       * v-model not supported on 
       * file type
       * save image by getting field
       * data
      */
      savePostImage(){
           this.image = document.getElementById("postimage").value.replace("C:\\fakepath\\", "");
      },
        Savepost(){
          const data = {
              title: this.title,
              image: this.image,
              posts: this.post
          }

          const editmode = Boolean(localStorage.editmode);
          const postEditId = Number(this.$Post.getPostId());
           var link = null;
           if(editmode==true){
               link = '/editpost/' + postEditId;
           }else{
             link = '/createpost';
           }
          axios.post(link,data)
          .then(()=>{
             $('#createpost').modal('hide');
              this.$swal({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              })
              setTimeout(() => {
                $('#edit-view').modal('show');
              }, 1500)
          })
            .catch(()=>{
             this.$swal({
               icon: 'error',
               title: 'Oops...',
               text: 'Something went wrong!',
               footer: 'Fix these errors',
             })

            })
        }
    },
    mounted() {
        Event.$on('save',(data)=>{
          $('#createsolution').modal('show');
          
        });

      if (Boolean(localStorage.editidmode)==true) {
       axios.get('/showpost/' + localStorage.posteditid)
      .then((response)=>{
        this.title = response.data.title;
      })

      }
       
    },
}
</script>

<style>
    
</style>