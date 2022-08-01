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
    <div class="doctorsPage">
        <h4 class="heading">Stocks</h4>
        <div class="buttons">
            <a href="/admin/inventory/stock/add" class="button1" style="text-decoration: none; color: white"><i class="fa fa-plus" aria-hidden="true"></i>Add Stock</a>
        </div>
    </div>

    <div class="mt-5 mb-5">
        <table id="example" class="table table-striped table-bordered mt-5" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $stock)
                    <tr>
                        <td>{{ $stock['ID'] }}</td>
                        <td>{{ $stock['name'] }}</td>
                        <td>{{ $stock['quantity'] }}</td>
                        <td>{{ $stock['price'] }}</td>
                        <td>{{ $stock['type'] }}</td>
                        <td style="text-align: end">
                            <div class="dropup">
                                <i class="fa fa-ellipsis-v" class="dropdown-toggle" aria-hidden="true" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                  <li class="dropdown-item" style="display: flex; align-items: center; justify-content: center"><i class="fa fa-pencil" style="margin-left: 10px" aria-hidden="true"></i><a class="dropdown-item" href={{ "/admin/inventory/stock/edit/".$stock['ID'] }}>Edit</a></li>
                                  <li class="dropdown-item" style="display: flex; align-items: center; justify-content: center"><i class="fa fa-trash" style="margin-left: 10px" aria-hidden="true"></i><a class="dropdown-item" href="{{ "/admin/deleteStock/".$stock['ID'] }}">Delete</a></li>
                                </ul>
                              </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
