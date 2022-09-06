<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Berita - Tugas Pertemuan 2</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=base_url('css/styles.css')?>" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Portal Berita Gabungan</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/"><b>Home</b></a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/xml-1">XML 1</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/xml-2">XML 2</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/xml-3">XML 3</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/json">JSON</a>
                </div>
            </div>
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <!--<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>-->
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid">
                    <?=$this->renderSection('content')?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="<?=base_url('js/jquery-3.6.1.min.js')?>"></script>
	    <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('js/scripts.js')?>"></script>
        <!-- Core theme JS-->
    </body>
</html>