<html>
<head>
    <title>Reserve</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de reservas para espetáculos">
    <meta name="author" content="Ubiratã Carvalho">
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <style>
        h1{
            font-size: 2em;
            color:#666666;
        }
        .list-group-item.active{
            background-color:#cccccc;
            border-color:#cccccc;
            color:#333333;
        }
        .list-group-item .badges{
            font-size:1.3em;
            border-bottom: 1px solid #666666;
        }
        .poltronasGrid{
            text-align: center;
        }
        .poltronasGrid a{
            font-weight: bold;
            font-size: 1.2em;
            color:#666666;
        }
        .poltronasGrid a.bg-secondary{
            color:#ffffff;
        }
    </style>
</head>
<body>
    <header class="mb-3">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <h1>Reserve</h1>
        </nav>
    </header>
    <main class="container-fluid">
        <div class="row">
        
        <section class="col-lg-2">
            <h2>Espetáculos</h2><hr>
            <div class="list-group mb-3" id="list-tab">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                    <h5>Lago dos Cisnes</h5>
                    <div class="badges mb-2 p-2">
                        <span class="badge badge-light">Disponíveis <span>50</span></span>
                        <span class="badge badge-secondary">Reservadas <span>1</span></span>
                    </div>
                    <div class="buttons text-center">
                        <button type="button" class="btn btn-light btn-sm btn-block" data-toggle="modal" data-target="#exampleModal">Editar Espetaculo</button>
                        <button type="button" class="btn btn-danger btn-sm btn-block">Remover Espetáculo</button>                        
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">O Quebra Nozes</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Romeu e Julieta</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Macbet</a>
            </div>
            
            <button class="btn btn-lg btn-block btn-light" data-toggle="modal" data-target="#exampleModal">Adicionar Espetáculo</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Espetáculo</h5>
                            <button type="button" class="close" data-dismiss="modal" >
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <input class="form-control" name="titulo" id="espetaculo-titulo" value="" placeholder="Titulo">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="poltronas" id="espetaculo-poltronas" value="" placeholder="Poltronas">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="valor" id="espetaculo-valor" value="" placeholder="Valor">
                                </div>
                                <button class="btn btn-block btn-dark" type="submit">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
        <section class="col-lg-10">
            <h2>Poltronas</h2><hr>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home">                    
                    <h3>Lago do Cisnes</h3>
                    <div class="ml-auto mb-3">Arrecadação R$<span>1000,00</span></div>
        
                    <div class="poltronasGrid bg-width">
                        <div class="container-fluid">
                            <div class="row">
                                <a href="#!" data-poltrona="p_A1"  class="col p-5 m-1 bg-secondary rounded">A1</a>
                                <a href="#!" data-poltrona="p_A2"  class="col p-5 m-1 bg-light rounded">A2</a>
                                <a href="#!" data-poltrona="p_A3"  class="col p-5 m-1 bg-light rounded">A3</a>
                                <a href="#!" data-poltrona="p_A4"  class="col p-5 m-1 bg-light rounded">A4</a>
                                <a href="#!" data-poltrona="p_A5"  class="col p-5 m-1 bg-light rounded">A5</a>
                                <a href="#!" data-poltrona="p_A6"  class="col p-5 m-1 bg-light rounded">A6</a>
                                <a href="#!" data-poltrona="p_A7"  class="col p-5 m-1 bg-light rounded">A7</a>
                                <a href="#!" data-poltrona="p_A8"  class="col p-5 m-1 bg-light rounded">A8</a>
                                <a href="#!" data-poltrona="p_A9"  class="col p-5 m-1 bg-light rounded">A9</a>
                                <a href="#!" data-poltrona="p_A10" class="col p-5 m-1 bg-light rounded">A10</a>
                            </div>
                            <hr class="clearfix">
                            <div class="row">
                                <a href="#!" data-poltrona="p_B1"  class="col p-5 m-1 bg-light rounded">B1</a>
                                <a href="#!" data-poltrona="p_B2"  class="col p-5 m-1 bg-light rounded">B2</a>
                                <a href="#!" data-poltrona="p_B3"  class="col p-5 m-1 bg-light rounded">B3</a>
                                <a href="#!" data-poltrona="p_B4"  class="col p-5 m-1 bg-light rounded">B4</a>
                                <a href="#!" data-poltrona="p_B5"  class="col p-5 m-1 bg-light rounded">B5</a>
                                <a href="#!" data-poltrona="p_B6"  class="col p-5 m-1 bg-light rounded">B6</a>
                                <a href="#!" data-poltrona="p_B7"  class="col p-5 m-1 bg-light rounded">B7</a>
                                <a href="#!" data-poltrona="p_B8"  class="col p-5 m-1 bg-light rounded">B8</a>
                                <a href="#!" data-poltrona="p_B9"  class="col p-5 m-1 bg-light rounded">B9</a>
                                <a href="#!" data-poltrona="p_B10" class="col p-5 m-1 bg-light rounded">B10</a>                        
                            </div>
                            <hr class="clearfix">
                            <div class="row">
                                <a href="#!" data-poltrona="p_C1"  class="col p-5 m-1 bg-light rounded">C1</a>
                                <a href="#!" data-poltrona="p_C2"  class="col p-5 m-1 bg-light rounded">C2</a>
                                <a href="#!" data-poltrona="p_C3"  class="col p-5 m-1 bg-light rounded">C3</a>
                                <a href="#!" data-poltrona="p_C4"  class="col p-5 m-1 bg-light rounded">C4</a>
                                <a href="#!" data-poltrona="p_C5"  class="col p-5 m-1 bg-light rounded">C5</a>
                                <a href="#!" data-poltrona="p_C6"  class="col p-5 m-1 bg-light rounded">C6</a>
                                <a href="#!" data-poltrona="p_C7"  class="col p-5 m-1 bg-light rounded">C7</a>
                                <a href="#!" data-poltrona="p_C8"  class="col p-5 m-1 bg-light rounded">C8</a>
                                <a href="#!" data-poltrona="p_C9"  class="col p-5 m-1 bg-light rounded">C9</a>
                                <a href="#!" data-poltrona="p_C10" class="col p-5 m-1 bg-light rounded">C10</a>                        
                            </div>
                            <hr class="clearfix">
                            <div class="row">
                                <a href="#!" data-poltrona="p_D1"  class="col p-5 m-1 bg-light rounded">D1</a>
                                <a href="#!" data-poltrona="p_D2"  class="col p-5 m-1 bg-light rounded">D2</a>
                                <a href="#!" data-poltrona="p_D3"  class="col p-5 m-1 bg-light rounded">D3</a>
                                <a href="#!" data-poltrona="p_D4"  class="col p-5 m-1 bg-light rounded">D4</a>
                                <a href="#!" data-poltrona="p_D5"  class="col p-5 m-1 bg-light rounded">D5</a>
                                <a href="#!" data-poltrona="p_D6"  class="col p-5 m-1 bg-light rounded">D6</a>
                                <a href="#!" data-poltrona="p_D7"  class="col p-5 m-1 bg-light rounded">D7</a>
                                <a href="#!" data-poltrona="p_D8"  class="col p-5 m-1 bg-light rounded">D8</a>
                                <a href="#!" data-poltrona="p_D9"  class="col p-5 m-1 bg-light rounded">D9</a>
                                <a href="#!" data-poltrona="p_D10" class="col p-5 m-1 bg-light rounded">D10</a>
                            </div>
                            <hr class="clearfix">
                            <div class="row">
                                <a href="#!" data-poltrona="p_E1"  class="col p-5 m-1 bg-light rounded">E1</a>
                                <a href="#!" data-poltrona="p_E2"  class="col p-5 m-1 bg-light rounded">E2</a>
                                <a href="#!" data-poltrona="p_E3"  class="col p-5 m-1 bg-light rounded">E3</a>
                                <a href="#!" data-poltrona="p_E4"  class="col p-5 m-1 bg-light rounded">E4</a>
                                <a href="#!" data-poltrona="p_E5"  class="col p-5 m-1 bg-light rounded">E5</a>
                                <a href="#!" data-poltrona="p_E6"  class="col p-5 m-1 bg-light rounded">E6</a>
                                <a href="#!" data-poltrona="p_E7"  class="col p-5 m-1 bg-light rounded">E7</a>
                                <a href="#!" data-poltrona="p_E8"  class="col p-5 m-1 bg-light rounded">E8</a>
                                <a href="#!" data-poltrona="p_E9"  class="col p-5 m-1 bg-light rounded">E9</a>
                                <a href="#!" data-poltrona="p_E10" class="col p-5 m-1 bg-light rounded">E10</a>
                            </div>                            
                        </div>
                    </div>



                </div>
                <div class="tab-pane fade" id="list-settings">O Quebra Nozes</div>
                <div class="tab-pane fade" id="list-profile">Romeu e Julieta</div>
                <div class="tab-pane fade" id="list-messages" >Macbet</div>
            </div>
        </section>

        </div>
    </main>
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>