<div class="card card-primary">
   <div class="card card-default">

      <div class="card-header">
        <h3 class="card-title">All Todo Tasks List
        <span class="float-right"><button type="button" class="btn btn-success btn-sm" id="btnAddTask">+</button></span> 
        </h3>
      </div>

      <div class="card-body">
          <ul class="list-group">
            @if($tasks->all())
               @foreach($tasks as $task)
                  <li class="list-group-item">{{ $task->id }} - {{ $task->name }} <span class="float-right"><button type="button" class="btn btn-primary btn-sm btnManage">Edit</button></span></li>
               @endforeach
            @else
              <li class="list-group-item">No Record Found...</li>
            @endif
          </ul>
      </div>

      <div class="card-footer">
        Panel Footer
      </div>
   </div>
</div>