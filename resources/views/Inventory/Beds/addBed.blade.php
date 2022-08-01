<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shaukat Khanum</title>
</head>
<body>
    <x-sidebar />
    <div class="container w-50" style="margin-top: 100px">
        <h4>Add Bed Seat</h4>
        <form action="/addBeds" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Seat No</label>
                        <input type="text" name="no" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Floor No</label>
                        <select class="form-select" name="floor" aria-label="Default select example">
                            <option selected>1st Floor</option>
                            <option>2nd Floor</option>
                            <option>3rd Floor</option>
                            <option>4th Floor</option>
                          </select>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Rent / day</label>
                            <input type="text" name="rent" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Room</label>
                            <input type="text" name="room" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Status</label>
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option selected>Empty</option>
                                <option value="1">Booked</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Type</label><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="General" checked>
                                <label class="form-check-label" for="inlineRadio1">General</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="Cabin">
                                <label class="form-check-label" for="inlineRadio2">Cabin</label>
                              </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Upload Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="submit" style="background-color: green; width: 250px; font-size: 24px; border-radius: 100px; color: white; padding: 10px; border: none">Add Seat</button>
            </div>
        </form>
    </div>
</body>
</html>
