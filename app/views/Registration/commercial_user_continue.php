<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>The Ambula</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="http://localhost/Ambula/public/css/bootstrap.css" rel="stylesheet" media="screen"/>
    <link href="http://localhost/Ambula/public/css/bootstrap-theme.css" rel="stylesheet" media="screen"/>
    <link href="http://localhost/Ambula/public/css/custom.css" rel="stylesheet" media="screen"/>
    <link href="http://localhost/Ambula/public/css/color1.css" rel="stylesheet" media="screen"/>
    <link href="http://localhost/Ambula/public/css/registration.css" rel="stylesheet" media="screen"/>

    <!-- fav icon -->
    <link rel="icon" href="/public/img/fav_ico.png" type="image/gif" sizes="16x16">


    <script type="text/javascript" src="http://localhost/Ambula/public/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/Ambula/public/js/bootstrap.min.js"></script>
    <script src="http://localhost/Ambula/public/js/typeahead.js"></script>


    <!--[if lt IE 9]>
    <script src="css/font-awesome-ie7.min.css"></script>
    <![endif]-->

    <!-- Google Font Link: Choose font you want on google font(http://www.google.com/webfonts) and make sure your replace those fonts in name in custom.css -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Sanchez:400,400italic' rel='stylesheet'
          type='text/css'>

    <!-- ##### Le HTML5 shim, for IE6-8 support of HTML5 elements ##### -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>
        #profile_img {
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;

            border: 1px solid #E0D6CC;
            display: block;
            margin: auto;
            margin-top: 10px;
            /* Rounded Corners */

        }

        h4,h5 {
            text-align: center;
        }

        .btn-file {
            position: relative;
            overflow: hidden;
            margin-top: 7px;

        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;

        }

        table td{
            width: 200px;
        }
    </style>
</head>

<body>

<!--Header START -->
<?php $this->view('_template/navigation_menu', "newRecipe") ?>

<div class="container">
    <form data-toggle="validator" role="form" action='http://localhost/Ambula/registration/update_commercial_user' method="POST"  enctype="multipart/form-data">
    <div class="container mrg50T">
        <h4 class="txt-red">Almost There Just One Step to go !</h4>

        <div class="col-lg-5 hgt600" style="background-color: #ffc266;">
            <h4>Company Logo</h4>
            <img src="http://localhost/Ambula/public/img/no_preview_available.jpg" height="175" width="175"
                 id="profile_img" alt=""/>

            <div class="text-center">
                <span class="btn btn-default btn-file">
                     Browse <input type="file"
                                   onchange="$('#profile_img').attr('src' ,window.URL.createObjectURL(this.files[0]));$('.logo-save').show();" name="company_logo">
                </span>

            </div>
            <br>

            <div class="col-lg-10" style="margin-bottom:15px;margin-top: 20px;">
                <label class="control-label" for="last_name">Website </label>
                <div class="input-group ">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                    <input id="login-username" type="text" class="form-control" name="web_site_url" value=""
                           placeholder="http://theambula.lk/">
                </div>
            </div>

            <div class="col-lg-10" style="margin-bottom:15px;">
                <label class="control-label" for="last_name">Facebook Page URL </label>
                <div class="input-group ">
                    <span class="input-group-addon" style="font-weight: 600;">f</span>
                    <input id="login-username" type="text" class="form-control" name="facebook_url" value=""
                           placeholder="https://www.facebook.com/the.ambula">
                </div>
            </div>




            <div class="col-lg-10">
                <label class="control-label" for="last_name">Youtube channel URL</label>
                <div class="input-group ">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-play"></i></span>
                    <input id="login-username" type="text" class="form-control" name="youtube_url" value=""
                           placeholder="username or email">
                </div>
            </div>

        </div>

        <div class="col-lg-7 hgt600" style="padding-top:15px;background: #e8e8e8;">

            <div class="col-lg-12">
                <h4 style="margin-bottom: 15px;"> Short Description</h4>

                <div class="input-group" style="width: 100%">
                    <div class="col-lg-12 col-xs-12 col-sm-12">
                        <textarea id="editor1" name="description" class="ckeditor col-lg-12 col-sm-12" rows="15"
                                  cols="40"></textarea>

                    </div>
                    <br>
                </div>
            </div>

            <div class="col-lg-12">
                <h5 style="margin-bottom: 15px;margin-top: 25px;"> Categories</h5>

               <table  cellspacing="10" style="color: #222">
                   <tr>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="drinks"> drinks</td>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> flour</td>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> Cheese</td>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> dairy products</td>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> sauces</td>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> spices</td>
                   </tr>
                   <tr>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> jam</td>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> soya products</td>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> pasta,sphagetti,macaroni</td>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> noodles</td>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> processed meat</td>
                       <td style="padding: 5px 5px;"><input type="checkbox"  name="food_category" value="Bike"> flavour enhancers</td>
                   </tr>
                   <tr>
                       <td style="padding: 5px 15px;"><input type="checkbox"  name="food_category" value="Bike"> biscuits/cookies</td>
                       <td style="padding: 5px 15px;"><input type="checkbox"  name="food_category" value="Bike"> honey , kithul trickle</td>
                       <td style="padding: 5px 15px;"><input type="checkbox"  name="food_category" value="Bike"> Canned foods /canned meat</td>
                       <td style="padding: 5px 15px;"><input type="checkbox"  name="food_category" value="Bike"> grain products</td>
                       <td style="padding: 5px 15px;"><input type="checkbox"  name="food_category" value="Bike"> food colourings and flavourings </td>
                       <td style="padding: 5px 15px;"><input type="checkbox"  name="food_category" value="Bike"> frozen products</td>
                   </tr>
               </table>
            </div>


        </div>


    </div>
    <div class="text-center" style="margin-top: 5px;margin-bottom: 20px;">
        <a href="" class="btn btn-default ">Skip >></a>
        <button class="btn btn-success">Save</button>

    </div>
      <input type="hidden" name="user_name" value="<?php echo $_GET['user']; ?>" />
    </form>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.config.height = 400;
        config.extraPlugins = 'onchange';
        CKEDITOR.replace('editor1');

        CKEDITOR.on('change', function (e) {
            alert('');
        });


    </script>

    <script type="text/javascript" src="../public/js/registration/validator.js"></script>
    <script type="text/javascript" src="../public/js/recipes/script.js"></script>
    <script src="//cdn.ckeditor.com/4.5.3/basic/ckeditor.js"></script>
</div>
</body>
</html>