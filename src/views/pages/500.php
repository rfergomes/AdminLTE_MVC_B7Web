<?php $render('head'); ?>       
<?php $render('navbar'); ?>
<?php $render('menu_principal'); ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Erro 500</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Erro 500</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="error-page">
                        <h2 class="headline text-danger">500</h2>

                        <div class="error-content">
                            <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Algo deu errado.</h3>

                            <p>
                                Vamos trabalhar para consertar isso imediatamente.
                                Enquanto isso, você pode <a href="../../index.html">volte ao painel </a> ou tente usar o formulário de pesquisa.
                            </p>

                            <form class="search-form">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.input-group -->
                            </form>
                        </div>
                    </div>
                    <!-- /.error-page -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php $render('footer');
            