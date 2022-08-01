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
        <h3 class="text-center">Edit Specialization</h3>
        <div class="container mt-5 align-self-center" style="display: flex; justify-content: center">
            <form action="/editSpecialist" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="id" value="{{ $data['id'] }}" class="" id="exampleFormControlInput1" placeholder="" style="width: 500px; padding: 6px; border-radius: 3px">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Specialization Name</label><br>
                    <input type="text" name="name" value="{{ $data['name'] }}" class="" id="exampleFormControlInput1" placeholder="" style="width: 500px; padding: 6px; border-radius: 3px">
                </div>
                <div class="text-center">
                    <button href="" type="submit" class="button1" style="text-decoration: none; width: 200px">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>
</html>
