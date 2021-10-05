<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Tarefas</title>
   <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
   <link rel="stylesheet" href="https://codeseven.github.io/toastr/build/toastr.min.css">
   <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
</head>

<body>
   <div class="container">
      <div class="tasks">
         <!-- <form action="{{ url('/tasks') }}" method="post">
            @csrf -->
            <div class="form-group">
               <label>Nova tarefa</label>
               <div>
                  <input id="task" name="description" placeholder="tarefa">
                  <button class="plus">+</button>
               </div>
            </div>
         <!-- </form> -->
         <h2 id="title" class="mb-20">Nenhuma tarefa</h2>
         <ul id="tasks"></ul>
      </div>
   </div>

   <script>
      const baseUrl = "{{url('/')}}";
   </script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
