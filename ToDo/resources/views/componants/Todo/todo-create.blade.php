<div class="modal" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Todo</h5>
                </div>
                <div class="modal-body">
                    <form id="insertData">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 p-1">
                                    <label class="form-label">Title*</label>
                                    <input type="text" class="form-control" id="title">
                                </div>
                                <div class="col-12 p-1">
                                    <label class="form-label">Description *</label>
                                    <input type="text" class="form-control" id="description">
                                </div>
                            
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="model-close" class="btn btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="CreateTodo()" type="submit" class="btn btn-sm  btn-success" >Save</button>
                </div>
            </div>
       
    </div>
</div>

<script>
    async function CreateTodo(){

        let title=document.getElementById('title').value
        let description=document.getElementById('description').value
        if(title.length===0){
            errorToast('Title Required')
        }else{
            $('#create-modal').modal('hide')
            let res= await axios.post('/create-todo',{
                title:title,
                description:description
            })

            if(res.status===201){
                successToast("Insert Successfull")                
                document.getElementById('insertData').reset()
                $('#create-modal').trigger("reset")
                   await todoList()
            }else{
                errorToast('Request Failed')
            }

        }
    }
</script>