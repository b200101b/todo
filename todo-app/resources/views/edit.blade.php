<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
  rel="stylesheet"
/><!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>

</head>
<body class="bg-info">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
           <div class="card-body">
            <h3> Edit To-do List</h3>
            <form action="{{ route('update') }}" method="POST" autocomplete="off">

              @csrf
              @foreach($rlist as $list)

              <div class="form-group">

                <input type="hidden" name="id" value="{{ $list->id }}">
                <input type="text"   class="form-control" id="contentDetail" name="contentDetail"  value="{{ $list->content }}" required>

                <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas fa-edit"></i> Update </button>
              </div>

              @endforeach
            </form>

        </div>
    </div>
    

</body>
</html>