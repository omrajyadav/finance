<?php
include "db_connection.php";
include "header.php";
?>
<div id="page-wrapper">
    <div id=" -inner">
        <div class="row">
            <div class="card">
                
            <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3>
                            <b>contact List</b>
                        </h3>
                        <div class="text-right">
                            
                        </div>

          
                    </div>
                </div>
            </div>
            <div class="card">
            <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <tr>
                                    <th class="table-info">id</th>
                                    <th class="table-info">Name</th>
                                    <th class="table-info">emali</th>
                                    <th class="table-info">phone</th>
                                    <th class="table-info">message</th>
                                    <th class="table-info">Action</th>
                                </tr>
                                <?php
                                $query = "SELECT * FROM contact";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td> <?= $row["id"] ?> </td>
                                        <td> <?= $row["name"] ?> </td>
                                        <td> <?= $row["email"] ?> </td>
                                        <td> <?= $row["phone"] ?> </td>
                                        <td> <?= $row["message"] ?> </td>
                                       

                                     
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>