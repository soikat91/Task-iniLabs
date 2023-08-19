
<div class="modal" id="delete-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width: 450px;">

            <div class="modal-body text-center">
                <h3 class=" mt-3 text-warning">Delete !</h3>
                <p class="mb-3">Once delete, you can't get it back.</p>
                <input type="text" id="todoId">
                
            </div>

            <!-- Modal footer -->
            <div class="modal-footer justify-content-end">
                <div>
                    <button type="button" id="model-close" class="btn shadow-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button onclick="deleteData()" type="button" id="confirmDelete" class="btn shadow-sm btn-danger" >Delete</button>
                </div>
            </div>

        </div>
    </div>
</div>
<script>

        async function deleteData(){

            let todoId=document.getElementById('todoId').value

            let res=await axios.post('/delete-todo',{id:todoId})
            if(res.data===1){
                successToast("Delete Success")
                await todoList()
            }else{
                errorToast("Failed")
            }
        }

</script>