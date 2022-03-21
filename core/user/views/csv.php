<h1>csv</h1>


<div class="row">
    <div class="col-lg-12">
        <h2>Load file</h2>
        <form  method="post" class="form-horizontal" enctype="multipart/form-data">
            <label for="file">Load csv file</label>
            <input id="file" type="file" name="csv">
            <button class="btn btn-default">Load file</button>
        </form>
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Csv file table</h2>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <th>AccountID</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>MobilePhone</th>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($params as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $value['AccountID']; ?></td>
                                        <td><?php echo $value['FirstName']; ?></td>
                                        <td><?php echo $value['LastName']; ?></td>
                                        <td><?php echo $value['Email']; ?></td>
                                        <td><?php echo $value['MobilePhone']; ?></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







