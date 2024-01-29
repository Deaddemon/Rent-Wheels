<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>


    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="card ">
            <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center text-black">
                    <a class="nav-link active btn btn-light rounded-0 shadow-none" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link btn-light rounded-0 shadow-none" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="form px-4 pt-5">
                        <input type="text" name="username" class="form-control mb-2" placeholder="Username">
                        <input type="text" name="password" class="form-control mb-4" placeholder="Password">
                        <button class="btn btn-dark btn-block mb-2 shadow-none">Login</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="form px-4">
                        <input type="text" name="name" class="form-control mb-2" placeholder="Name">
                        <input type="text" name="email" class="form-control mb-2" placeholder="Email">
                        <input type="text" name="phone" class="form-control mb-2" placeholder="Phone">
                        <input type="text" name="password" class="form-control mb-4" placeholder="Password">
                        <button class="btn btn-dark btn-block mb-2 shadow-none ">Signup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>