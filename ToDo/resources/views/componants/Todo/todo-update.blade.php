

<div class="modal" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                </div>
                <div class="modal-body">
                    <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                                <div class="col-12 p-1">
                                    <label class="form-label">Title*</label>
                                    <input type="text" class="form-control" id="updateTitle">
                                    <input type="text" class="form-control" id="TodoId">
                                </div>
                                <div class="col-12 p-1">
                                    <label class="form-label">Description *</label>
                                    <input type="text" class="form-control" id="updateDescription">
                                </div>      

                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="modal-close" class="btn btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="UpdateTodo()"  id="save-btn" class="btn btn-sm  btn-success" >Update</button>
                </div>
            </div>
    </div>
</div>

<script>     

        async function TodoID(id){

            document.getElementById('TodoId').value=id         
         
          let res=await axios.post('/todo-by-id',{id:id})
          document.getElementById('updateTitle').value=res.data['title']
          document.getElementById('updateDescription').value=res.data['description']
        }      
        
        
        async function UpdateTodo(){

           let  updateTitle= document.getElementById('updateTitle').value
           let  updateDescription= document.getElementById('updateDescription').value
           let id= document.getElementById('TodoId').value
           if(updateTitle.length===0){
            errorToast('Title Required')
        }else{
            $('#update-modal').modal('hide')
           let res=await axios.post('/update-todo',{
                title:updateTitle,
                description:updateDescription,
                id:id
           })

           if(res.status===200 && res.data===1){
                successToast("Update Success")
                $('#update-modal').trigger("reset")
                    await todoList()
            }else{
                errorToast("Failed Request")
            }
        }
        }     

</script> 