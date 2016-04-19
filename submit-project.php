<?php 

    require "init.php ";

    session_start();

    if(empty($_SESSION['name']))
    {
        header("Location: index.php");
    }

    $sql = "SELECT * FROM daftar_lab";
    $result = $con->query($sql);

    // if ($result->num_rows > 0) {
    //      // output data of each row
         // while($row = $result->fetch_assoc()) {
    //          // echo "<br> id: ". $row["id"]. " - Name: ". $row["nama_lab"]. " <br>";
    //         $nama_lab = $row['nama_lab'];
    //         $judul_karya = $row['judul_karya'];
    //         $gambar = $row['gambar'];
    //         $kategori = $row['kategori'];
    //         $deskripsi = $row['deskripsi'];
    //         $downloadlink = $row['downloadlink'];
    //      }
    // } else {
    //      echo "0 results";
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Website Karya LBE 2015 | Submit karya</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Institut Teknologi Sepuluh Nopember</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <?php if(!empty($_SESSION['name']))
                    { ?>
                    <li class="page-scroll">
                        <a href="">Welcome <?php echo 'Admin!'; ?></a>
                    </li>
                    <li class="page-scroll">
                        <a href="submit-project.php">Submit Work</a>
                    </li>
                    <?php } ?>
                    <li class="page-scroll">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container" style="margin-top:3em;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Submit Work</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form method="post" enctype="multipart/form-data" name="insertkarya" id="insertkarya" action="insertkarya.php">
                        <!-- <div class="row control-group" style="border-bottom: 1px solid rgb(238, 238, 238);padding: 1em;">
                            <label style="font-size: 1.5em;color: rgb(172, 182, 192);font-weight: none;">Name of Laboratory</label>
                                <input type="text" class="form-control" placeholder="Lab's Name" id="name" name="name" required data-validation-required-message="Please enter your lab's name.">
                                <p class="help-block text-danger"></p>
                        </div> -->
                        <div class="row control-group" style="border-bottom: 1px solid rgb(238, 238, 238);padding: 1em;">
                            <label style="font-size: 1.5em;color: rgb(172, 182, 192);font-weight: none;">Name of Laboratory</label>
                            <select name="name" id="name" style="width:100%;border-radius: 2px;border: 2px solid rgb(204, 204, 204);padding: 0.7em;">
                                    <?php foreach ($result as $r => $rows){ ?>
                                           <option value="<?php echo $rows['nama_lab']; ?>"><?php echo $rows['nama_lab']; ?></option>
                                    <?php } 
                                        
                                    ?>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="row control-group" style="border-bottom: 1px solid rgb(238, 238, 238);padding: 1em;">
                            <label style="font-size: 1.5em;color: rgb(172, 182, 192);font-weight: none;">Project Title</label>
                            <input type="text" class="form-control" placeholder="Project Title" id="title" name="title" required data-validation-required-message="Please enter your project title.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="row control-group" style="border-bottom: 1px solid rgb(238, 238, 238);padding: 1em;">
                            <label style="font-size: 1.5em;color: rgb(172, 182, 192);font-weight: none;">Target Class</label>
                            <input type="number" class="form-control" placeholder="Target Class" id="title" name="class" required data-validation-required-message="Please enter your Target Class.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="row control-group" style="border-bottom: 1px solid rgb(238, 238, 238);padding: 1em;">
                            <label style="font-size: 1.5em;color: rgb(172, 182, 192);font-weight: none;">Project's Picture</label>
                            <input type="file" name="picture" id="fileToUpload">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="row control-group" style="border-bottom: 1px solid rgb(238, 238, 238);padding: 1em;">
                            <label style="font-size: 1.5em;color: rgb(172, 182, 192);font-weight: none;">Category</label>
                            <select name="category" id="category" style="width:100%;border-radius: 2px;border: 2px solid rgb(204, 204, 204);padding: 0.7em;">
                                    <option value="Game">Game</option>
                                    <option value="Mobile">Mobile App.</option>
                                    <option value="Web">Web App.</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="row control-group" style="border-bottom: 1px solid rgb(238, 238, 238);padding: 1em;">
                            <label style="font-size: 1.5em;color: rgb(172, 182, 192);font-weight: none;">Description</label>
                            <textarea style="width:100%;border-radius: 2px;border: 2px solid #CCCCCC;padding: 0.7em;" id="description" name="description"></textarea>
                        </div>
                        <div class="row control-group" style="border-bottom: 1px solid rgb(238, 238, 238);padding: 1em;">
                            <label style="font-size: 1.5em;color: rgb(172, 182, 192);font-weight: none;">Download Link</label>
                            <input type="text" class="form-control" placeholder="Donwload Link" id="downloadlink" name="downloadlink" required data-validation-required-message="Please enter download link.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Sukolilo - Surabaya<br>East Java, Indonesia</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Find us here</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
