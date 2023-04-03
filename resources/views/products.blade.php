<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title>Ajax Crud</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="cal-md-2"></div>
        <div class="cal-md-8">
            <h2 class="my-5 text-center"> Ajax Crud</h2>
            <a href="" class="btn btn-info my-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Product</a>
            <div class="table-data">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">S.L</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <a href="" class="btn btn-success"><i class="las la-edit"></i></a>
                            <a href="" class="btn btn-danger"><i class="las la-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


  @include('all_product_modal')
  @include('products_js')
</body>
</html>
