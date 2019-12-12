<div class="card card-primary">
   <div class="card card-default">

      <div class="card-header">
        <h3 class="card-title">All Todo Tasks List
        <span class="float-right"><button type="button" class="btn btn-success btn-sm">+</button></span> 
        </h3>
      </div>

      <div class="card-body">
          <ul class="list-group">
            @if($tasks)
              <li class="list-group-item">Dummy task 1 <span class="float-right"><button type="button" class="btn btn-primary btn-sm">Edit</button></span></li>
              <li class="list-group-item">Dummy task 2 <span class="float-right"><button type="button" class="btn btn-primary btn-sm">Edit</button></span></li>
              <li class="list-group-item">Dummy task 3 <span class="float-right"><button type="button" class="btn btn-primary btn-sm">Edit</button></span></li>
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