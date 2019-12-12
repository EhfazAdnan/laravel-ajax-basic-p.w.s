<!-- Modal -->
<div class="modal fade" id="addTodoTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Todo Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ URL::to('todo/save') }}" id="frmAddTask" method="post">
      @csrf
      
        <div class="modal-body">

            <ul id="errors" class="list-unstyle"></ul>

           <div class="form-group">
              <label for="txtName">Enter Todo TasK:</label>
              <input type="text" id="txtName" name="name" class="form-control" placeholder="Enter New Todo Task" required/>
           </div>
        </div>
  
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>

      </form>

      
    </div>
  </div>
</div>