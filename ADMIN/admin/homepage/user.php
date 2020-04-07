<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Forms | Slate Admin 2.0</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">

    <link href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">

    <link href="css/slate.css" rel="stylesheet">
    <link href="css/slate-responsive.css" rel="stylesheet">


    <!-- Javascript -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/jquery-ui-1.8.21.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="js/plugins/validate/jquery.validate.js"></script>

    <script src="js/Slate.js"></script>

    <script src="js/demos/demo.validate.js"></script>


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
  <script src="../../../html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>


    


    <div id="content">

        <div class="container">

            <div id="page-title" class="clearfix">

                <ul class="breadcrumb">
                    <li>
                        <a href="default.htm">Home</a> <span class="divider">/</span>
                    </li>
                    <li>
                        <a href="#">Components</a> <span class="divider">/</span>
                    </li>
                    <li class="active">Form Styles</li>
                </ul>

            </div>
            <!-- /.page-title -->

            <div class="row">

                <div class="span12">

                    <div id="horizontal" class="widget widget-form">

                        <div class="widget-header">
                            <h3>
                                <i class="icon-pencil"></i>
                                Horizontal Layout	      					
                            </h3>
                        </div>
                        <!-- /widget-header -->

                        <div class="widget-content">

                            <form class="form-horizontal" method="post" action="index.php?page=user_action">
                                <fieldset>
                                    <input type="text" name="action" value="insert">
                                

                                      <div class="control-group">
                                        <label class="control-label" for="input01">Name</label>
                                        <div class="controls">
                                            <input type="text" name="name" class="input-large" placeholder="Enter Your name..." id="input01">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="input01">Email</label>
                                        <div class="controls">
                                            <input type="text" name="email" class="input-large" placeholder="Enter Your email..." id="input01">
                                        </div>
                                    </div>

                                      <div class="control-group">
                                        <label class="control-label" for="input01">Password</label>
                                        <div class="controls">
                                            <input type="password" name="password" class="input-large" placeholder="Enter Your Password..." id="input01">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">Gender</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="gender" id="optionsRadios1" value="male" checked="">
                                                Male
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="gender" id="optionsRadios2" value="female">
                                               Female
                                            </label>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="input01">Contact</label>
                                        <div class="controls">
                                            <input type="text" name="contact" class="input-large" placeholder="Enter Your Contact..." id="input01">
                                        </div>
                                    </div>
                                    

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary btn-large">Save changes</button>
                                        <button class="btn btn-large">Cancel</button>
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                        <!-- /widget-content -->

                    </div>


                </div>
                <!-- /span8 -->



            </div>
            <!-- /row -->




        </div>
        <!-- /.container -->

    </div>
    <!-- /#content -->



   





</body>
</html>
