<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Starting template</title>
</head>

<body>
    <div class="container my-4">
        <form action="api/createUser.php" method="POST">
            <div class="mb-3 row">
                <label for="userName" class="col-sm-2 col-form-label">User name</label>
                <div class="col-sm-10">
                    <input type="text" required maxlength="254" id="userName" name="userName" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="firstName" class="col-sm-2 col-form-label">First name</label>
                <div class="col-sm-10">
                    <input id="firstName" required maxlength="254" type="text" name="firstName" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lastName" class="col-sm-2 col-form-label">Last name</label>
                <div class="col-sm-10">
                    <input id="lastName" required maxlength="254" type="text" name="lastName" class="form-control">
                </div>
            </div>

            <input type="submit" class="btn btn-outline-success" name="submit" value="Submit">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>