

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

                                            <a href="index.php?page=category" class="btn btn-warning" style="margin-left: 58%;" >Add New</a>

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

                                        <th>category Name</th>
                                   
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <?php
                              $i=1;
                              $sel="select * from `category`";
                              $qry=mysqli_query($con,$sel);
                             while( $row=mysqli_fetch_assoc($qry)){;


                                ?>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['category_name']?></td>
                                        <td>
                                             <a href="index.php?page=category&id=<?php echo $row['category_id'];?>" class="label label-success">Edit</a>
                                    </tr>
                                  
                                </tbody>
                            <?php $i++;}


                            ?>
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
