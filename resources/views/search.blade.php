<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search Inventory</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container" style="margin-top: 5%;">
            <div class="col-md-8 col-md-offset-3">

                <!-- Search Form -->
                <h1 class="text-center">Search Inventory</h1>
                <form class="form-inline">
                     <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="text" name="search" placeholder="Search" required/>
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"><span style="margin-left:10px;">Search</span></button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">By</label>
                        <select class="form-control">
                            <option>Name</option>
                            <option>Category</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Order by</label>
                        <select class="form-control">
                            <option>Name</option>
                            <option>Category</option>
                            <option>Price</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">filter by</label>
                        <select class="form-control">
                            <option>Name</option>
                            <option>Category</option>
                            <option>Price</option>
                        </select>
                    </div>
                </form>
                <!-- End of Search Form -->

            </div>
        </div>
    </body>
</html>
