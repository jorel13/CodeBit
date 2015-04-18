<!DOCTYPE html>
<html>
    <head>
        <?PHP echo asset('jquery-1.9.0.min.js'); ?>
        <?PHP echo asset('profile.js'); ?>
        <?PHP echo asset('profile.css'); ?>
    </head>

    <body>



        <div id = "profile-header">
            <div id="one">
                <img src="http://i161.photobucket.com/albums/t239/rosy_nic/stock/animals/icons/95.png">
            </div>
            <div id = "two">
                <div id="prof-username">Brooke Mills
                </div>
            </div>
            <div id = "three">
                <div class = "button-container">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="Search codebits...">
                        <input type="submit" class="searchButton">
                    </div>
                </div>
            </div>
            <div id="four" class="btn btn-positive">
                <a href="<?= home_url('code/new'); ?>">New Codebit</a>
            </div>
        </div>

        <div id="tabs">
            <ul id="tabs-nav">
                <li class="active"><a href="#tab1">Popular</a></li>
                <li><a href="#tab2">Public</a></li>
                <li><a href="#tab3">Versioned</a></li>
                <li><a href="#tab4">Loved</a></li>
            </ul> <!-- tabs-nav -->

            <div id="tabs-content">
                <div id="tab1" class="content">
                    <div id = "bit-container">
                        <div class = "bit-row">
                            <div class="codebit c1"></div>
                            <div class="codebit c2"></div>
                            <div class="codebit c3"></div>
                        </div>
                        <div class="bit-row">
                            <div class="codebit c4"></div>
                            <div class="codebit c5"></div>
                            <div class="codebit c6"></div>
                        </div>
                    </div>
                </div>

                <div id="tab2" class="content">
                    <div id = "bit-container">
                        <div class = "bit-row">
                            <div class="codebit c6"></div>
                            <div class="codebit c5"></div>
                            <div class="codebit c4"></div>
                        </div>
                        <div class="bit-row">
                            <div class="codebit c3"></div>
                            <div class="codebit c2"></div>
                            <div class="codebit c1"></div>
                        </div>
                    </div>
                </div>

                <div id="tab3" class="content">
                    <div id = "bit-container">
                        <div class = "bit-row">
                            <div class="codebit"></div>
                            <div class="codebit"></div>
                            <div class="codebit"></div>
                        </div>
                        <div class="bit-row">
                            <div class="codebit"></div>
                            <div class="codebit"></div>
                            <div class="codebit"></div>
                        </div>
                    </div>
                </div>

                <div id="tab4" class="content">
                    <div id = "bit-container">
                        <div class = "bit-row">
                            <div class="codebit"></div>
                            <div class="codebit"></div>
                            <div class="codebit"></div>
                        </div>
                        <div class="bit-row">
                            <div class="codebit"></div>
                            <div class="codebit"></div>
                            <div class="codebit"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- tabs-content -->
        </div> <!-- Tabs -->

        <div class = "nav-spacing">
            <nav id="current-page-nav" >
                <a href="#" class="button pagination-button ">
                    <span class="nav-button-styling">< </span>
                </a>
                <a href="#" class="button pagination-button ">
                    <span class="nav-button-styling">></span>
                </a>
            </nav>
        </div>




    </body>
</html>