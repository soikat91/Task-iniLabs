<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h4>ToDo List</h4>
                </div>
                <div class="align-items-center col">
                    <button data-bs-toggle="modal" data-bs-target="#create-modal" class="float-end btn m-0 btn-sm bg-gradient-primary">Create</button>
                </div>
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="tableList">
                {{--Table Data--}}
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<script>
           todoList()
        async function todoList(){

            let res=await axios.get('/list-todo')         

            res.data.forEach(function(item,index){
                
                document.getElementById('tableList').innerHTML +=`<tr>
                            <td>${index+1}</td>    
                            <td>${item.title}</td>    
                            <td>${item.description}</td>    
                            <td>${item.status}</td> 
                            <td>
                                <button data-id=${item.id} class=" edit btn btn-sm btn-outline-primary" >Edit</button>
                                <button data-id=${item.id} class="delete btn btn-sm btn-outline-primary">Delete</button>
                            </td>
                        </tr>`

                        $('.edit').on('click', async function (){

                            let id=$(this).data('id')
                           // alert(id)
                            await TodoID(id)
                            $('#update-modal').modal('show')
                            
                           

                        })

                        $('.delete').on('click',function(){

                            let id=$(this).data('id')
                           // alert(id)
                            $('#delete-modal').modal('show')
                            $('#todoId').val(id)
                        })
                                        
            })
            
        }
</script>