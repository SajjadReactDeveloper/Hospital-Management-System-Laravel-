<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shaukat Khanum Hospital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('Css/Doctor.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <x-sidebar />
    <div class="" style="margin-top: 130px">
        <h3 class="text-center">Add Specialist</h3>
        <div class="container mt-5 align-self-center" style="display: flex; justify-content: center">
            <form action="/addSpecialist" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Specialization Name</label><br>
                    <input type="text" name="name" class="" id="exampleFormControlInput1" placeholder="" style="width: 500px; padding: 6px; border-radius: 3px">
                </div>
                <div class="text-center">
                    <button href="" type="submit" class="button1" style="text-decoration: none; width: 200px">Add Specialist</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-5 mb-5">
        <table id="example" class="table table-striped table-bordered mt-5" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $specialist)
                    <tr>
                        <td>{{ $specialist['id'] }}</td>
                        <td>{{ $specialist['name'] }}</td>
                        <td style="text-align: end">
                            <div class="dropup">
                                <i class="fa fa-ellipsis-v" class="dropdown-toggle" aria-hidden="true" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                  <li class="dropdown-item" style="display: flex; align-items: center; justify-content: center"><i class="fa fa-pencil" style="margin-left: 10px" aria-hidden="true"></i><a class="dropdown-item" href={{ "/admin/specialists/edit/".$specialist['id'] }}>Edit</a></li>
                                  <li class="dropdown-item" style="display: flex; align-items: center; justify-content: center"><i class="fa fa-trash" style="margin-left: 10px" aria-hidden="true"></i><a class="dropdown-item" href="{{ "/admin/deleteSpecialist/".$specialist['id'] }}">Delete</a></li>
                                </ul>
                              </div>
                        </td>
                    </tr>
                @endforeach
            </thead>
            <tbody>
        </table>

        {{-- Modal --}}

    </div>

    <script>
        $(document).ready(function () {
        $('#example').DataTable();
});
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>
