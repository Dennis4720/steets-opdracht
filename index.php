<?php

require './core/bootstrap.php';

require CORE . '/includes/header.php';
require CORE . '/includes/navbar.php';
?>

<div class="container">
    <div class="row">

        <div class="col-md-8 offset-md-2">

            <div class="card">

                <div class="card-header">
                    lorem ipsum
                </div>
                <div class="card-body">
                    <form id="form" action="/process" method="post">
                        <input type="text" name="jaar" class="form-control" value="2018" placeholder="Fill in an year, e.g. 2018" />
                        <br />
                        <button type="submit" class="btn btn-block btn-success">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
            <br />
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Christmas Day</th>
                        <th>Century</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>

    </div>
</div>

<?php

require CORE . '/includes/footer.php';

?>