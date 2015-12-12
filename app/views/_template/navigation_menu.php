<!--Header START -->
<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top" style="width: 100%">
    <div class="container">
        <!-- Needed this button code to show menu in mobile and table -->
        <div class="navbar-header">
            <button data-target="#navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Logo Here -->
            <a class="navbar-brand" href="/Ambula/"><img src="http://localhost/Ambula/public/img/ambula-logo.png"  alt="The Ambula"/></a>

        </div>

        <!-- search box -->
        <div class="col-sm-3 col-md-3 pull-left">
            <form class="navbar-form navbar-left" method="get" role="search" action="/home/search/" id="main-search">
                <div class="input-group">
                    <input type="text" name="query" class="form-control typeahead" autocomplete="off"
                           data-provide="typeahead" placeholder="Search Recipes" name="q">

                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Top Navigation Here -->
        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul id="navbar_documenter" class="nav navbar-nav ">
                <?php if (isset($data))
                    $d = $data;
                else
                    $d = "" ?>

                <li><a <?php if($d == "home") echo "class='current'" ?> href="/Ambula/">Home</a></li>
                <li><a <?php if($d and $data == "categories") echo "class='current'" ?> href="/Ambula/home/categories">Categories</a></li>
                <li><a <?php if($d and $data == "promotions") echo "class='current'" ?> href="/Ambula/home/promotions">Promotions</a></li>
                <li><a <?php if($d and $data == "contact") echo "class='current'" ?> href="/Ambula/home/contact">Contact</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['user_logged_in'])) {


                    ?>
                    <li class="dropdown" style="font-weight: 500;font-size: medium;">
                        <?php if (Session::get('user_provider_type') == 'FACEBOOK') { ?>
                            <img src="https://graph.facebook.com/<?= Session::get('fbid') ?>/picture" width="35"
                                 style="margin-top:7px;" height="35">
                        <?php } else if (Session::get('user_provider_type') == 'DEFAULT' && Session::get('user_avatar') == 1) { ?>
                            <img src="<?= Session::get('user_avatar_url') ?>" width="35" style="margin-top:7px;"
                                 height="35">
                        <?php } else if (Session::get('user_provider_type') == 'DEFAULT' && Session::get('user_avatar') == 0) { ?>
                            <img src="/Ambula/public/img/profile_avatar.jpg" width="35" style="margin-top:7px;" height="35">

                        <?php } ?>

                        <a class="dropdown-toggle pull-right " id="modal_user" data-toggle="dropdown"
                           href="#"><?= Session::get('name') ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://localhost/Ambula/home/profile?id=<?= Session::get('uid') ?>">View
                                    Profile</a></li>
                            <li><a href="http://localhost/Ambula/recipes/newrecipe">New Recipe</a></li>
                            <?php if (isset($_SESSION['user_account_type'])) {
                                if (Session::get('user_account_type') == 2) {
                                    ?>
                                    <li><a href="/Ambula/Foodproducts/addnewproduct">Add New Products</a></li>
                                <?php
                                }
                            } ?>
                            <li class="divider"></li>
                            <li><a href="/Ambula/login/logout">Logout</a></li>
                        </ul>
                    </li>
                <?php
                } else {
                    echo '<li style="font-weight: 500;font-size: medium;"> <a  class="pull-right"   style="" href="/Ambula/login"><i class="glyphicon glyphicon-user"></i> Sign In</a></li>';
                }

                ?>
            </ul>

        </div>

    </div>
    <script type="text/javascript">

        $(function () {

            //removes facebook location hash
            //window.location.hash = ""

            //fetch search results
            $('.typeahead').typeahead
            ({

                items: 5,
                source: function (query, process) {
                    $.ajax({
                        url: '/recipes/getname',
                        type: 'POST',
                        dataType: 'JSON',
                        data: 'query=' + query,
                        success: function (data) {
                            var myarr = [];

                            $.each(data, function (i, item) {
                                myarr.push(item.title);
                            });
                            process(myarr);
                        }
                    });
                }
            });

        })
    </script>
    <!-- pop up box code END -->
</nav>
