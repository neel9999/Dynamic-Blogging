

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

                                            <a href="index.php?page=subcat" class="btn btn-warning" style="margin-left: 58%;" >Add New</a>

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
                                        <th>Subcategory Name</th>

                                   
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <?php
                              $i=1;
                              $sel="select * from `sub_category`";
                              $qry=mysqli_query($con,$sel);
                             while( $row=mysqli_fetch_assoc($qry)){;


                                ?>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i;?></td>

                                        <?php 
                             

                             $selCat="select * from `category` where category_id='".$row['category_id']."'";
                             $qryCat=mysqli_query($con,$selCat);
                             $rowCat=mysqli_fetch_assoc($qryCat);



                                        ?>
                                        <td><?php echo $rowCat['category_name']?></td>

                                        <td><?php echo $row['name']?></td>
                                        <td>
                                             <a href="index.php?page=subcat&id=<?php echo $row['sub_category_id'];?>" class="label label-success">Edit</a>
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
