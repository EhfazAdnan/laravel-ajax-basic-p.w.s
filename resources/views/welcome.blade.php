<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div id="todolist">
       
    </div> 
    <div id="modals"></div>
</div>
       

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function(){

        $.ajaxSetup({
           headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });

          $.get('{{ URL::to("tasks") }}', function(data){
              $('#todolist').empty().append(data);
          });

          $('#todolist').on('click','#btnAddTask', function(){
            $.get('{{ URL::to("todo/create") }}', function(data){
              $('#modals').empty().append(data);
              $('#addTodoTask').modal('show');
            });
          });

          $('#modals').on('submit','#frmAddTask', function(e){
              e.preventDefault();
              var frmData = $(this).serialize();
              $.post('{{ URL::to("todo/save") }}', frmData, function(data, xhrStatus, xhr){
                  $('#todolist').empty().append(data);
              });
          });

          $('#todolist').on('click','.btnManage', function(){
            var id = $(this).data('task');
            $.get('{{ URL::to("todo/edit")}}/'+id, function(data){
              $('#modals').empty().append(data);
              $('#editTodoTask').modal('show');
            });
          });

          $('#modals').on('submit','#frmEditTask', function(e){
              e.preventDefault();
              var frmData = $(this).serialize();
              $.post('{{ URL::to("todo/update") }}', frmData, function(data, xhrStatus, xhr){
                  $('#todolist').empty().append(data);
              });
          });

          //delete request
          $('#modals').on('click','#btnDelete', function(){
            var id = $(this).data('task');
            $.get('{{ URL::to("todo/destroy")}}/'+id, function(data){
              $('#todolist').empty().append(data);
            });
          });
      })
    </script>
</body>
</html>