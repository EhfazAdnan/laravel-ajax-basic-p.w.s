<!-- Modal -->
<div class="modal fade" id="editTodoTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Todo Record - {{ $task->id }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ URL::to('todo/update') }}" id="frmEditTask" method="post">
      @csrf
      
        <div class="modal-body">
           <div class="form-group">
              <label for="txtName">Update Todo TasK:</label>
              <input type="hidden" name="id" value="{{$task->id}}" />
              <input type="text" id="txtName" name="name" class="form-control" value="{{ $task->name }}" required/>
           </div>
        </div>
  
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" aria-label="Close" data-task="{{ $task->id }}" id="btnDelete" class="btn btn-danger">Delete</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>

      </form>

      
    </div>
  </div>
</div>