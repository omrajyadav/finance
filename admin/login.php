<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="card" style="width:30rem;margin-top:200px">
                        <div clas="card-body">
                            <form action="login_out.php" id="loginfrom" method="post">
                                <h1 class="text-center">Login</h1>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>

                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="examplecheck1">Remember me?</label>
                                    <a href="" style="margin:0px 0px 0px 185px;">Forgot password</a>
                                </div>
                                <div> what 20 + 5 =</div>
                                <input type="text" id="sumInput">
                                <button type="submit"  name="submit" class="btn btn-info" style="width:450px">Login</button>
                                <hr>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="js/app.js"></script>
    <script>
        document.getElementById("loginfrom").addEventListener("submit", function (event) {
            var sumInput = document.getElementById("sumInput").value;
            if (sumInput !== "25") {
                event.preventDefault();
                alert("please solve the sum correctly:20+5=");
            }
        });
    </script>

</body>

</html>