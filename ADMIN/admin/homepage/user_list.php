

<body>


    <!-- /#nav -->


    <div id="content">

        <div class="container">

            <div id="page-title" class="clearfix">

                <ul class="breadcrumb">
                    <li>
                        <a href="../../default.htm">Home</a> <span class="divider">/</span>
                    </li>
                    <li>
                        <a href="#">Components</a> <span class="divider">/</span>
                    </li>
                    <li class="active">Table Styles</li>

                                            <a href="index.php?page=user" class="btn btn-warning" style="margin-left: 58%;" >Add New</a>

                </ul>

            </div>
            <!-- /.page-title -->



            <div class="row">

                <div class="span12">

                    <div class="widget widget-table">

                        <div class="widget-header">
                            <h3>
                                <i class="icon-th-list"></i>
                                Data Table Plugin							
                            </h3>
                        </div>
                        <!-- /widget-header -->

                        <div class="widget-content">




                            <table class="table table-striped table-bordered table-highlight" id="example">
                                <thead>
                                    <tr>
                                        <th>Sr.no</th>

                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Contact</th>
                                        <th>gender</th>
                                        <th>Action</th>
                                        

                                    </tr>
                                </thead>
                                <?php
                              $i=1;
                              $sel="select * from `user`";
                              $qry=mysqli_query($con,$sel);
                             while( $row=mysqli_fetch_assoc($qry)){;


                                ?>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['password']?></td>
                                        <td><?php echo $row['contact']?></td>
                                        <td><?php echo $row['gender']?></td>
                                        <td>
                                            <button class="btn btn-info">Edit</button>
                                            |
                                            <button class="btn btn-danger">Delete</button></td>
                                    </tr>
                                  
                                </tbody>
                            <?php $i++;}?>
                            </table>


                        </div>
                        <!-- /widget-content -->

                    </div>
                    <!-- /widget -->

                </div>
                <!-- /span12 -->

            </div>
            <!-- /row -->




        </div>
        <!-- /.container -->

    </div>
    <!-- /#content -->



    





</body>
</html>
