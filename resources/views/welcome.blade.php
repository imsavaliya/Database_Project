<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DB Project</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>

    <body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"></a>
        <form class="form-inline md-form mr-auto mb-4">
            <input class="form-control mr-sm-2" type="text" placeholder="Search Ip" aria-label="Search">
            <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
        </form>
        <form class="form-inline md-form mr-auto mb-4">
            <input class="form-control mr-sm-2" type="text" placeholder="Search Port" aria-label="Search">
            <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
        </form>
        <form class="form-inline md-form mr-auto mb-4">
            <input class="form-control mr-sm-2" type="text" placeholder="Search Country" aria-label="Search">
            <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
        </form>
        <form class="form-inline md-form mr-auto mb-4">
            <lable>Updated_at</lable><input type="date" id="updated_at" name="updated_at">
            <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
        </form>
        <form class="form-inline md-form mr-auto mb-4">
            <lable>Created_At</lable><input type="date" id="created_at" name="created_at">
            <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
        </form>

    </nav>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"></a>

        <div  style="width:300px; float:right">
            <a href="http://localhost/DB_Project/public/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Update</a>
        </div>

        <div style="width:500px; float:right">
            <a href="http://localhost/DB_Project/public/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delete</a>
        </div>
    </nav>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table id="tablePreview" class="table table-bordered table-striped mb-0">
                <thead>
                <tr>
                    <th class="th-sm">#</th>
                    <th class="th-sm">Ip Address</th>
                    <th class="th-sm">Port</th>
                    <th class="th-sm">Updated_At</th>
                    <th class="th-sm">Created_At</th>
                    <th class="th-sm">Country</th>
                    <th class="th-sm">Proxy Type</th>
                    <th class="th-sm">Last Checked</th>
                    <th class="th-sm">Proxy Level</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $datum)
                    <tr>
                        <th scope="row">{{$datum->id}}</th>
                        <td>{{$datum->ip_address}}</td>
                        <td>{{$datum->port}}</td>
                        <td>{{$datum->updated_at}}</td>
                        <td>{{$datum->created_at}}</td>
                        <td>{{$datum->country}}</td>
                        <td>{{$datum->type}}</td>
                        <td>{{$datum->last_checked}}</td>
                        <td>{{$datum->proxy_level}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
