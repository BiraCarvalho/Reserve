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
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                    <h5>Lago dos Cisnes</h5>
                    <span class="badge badge-success">Disponível <span>10</span></span>
                    <span class="badge badge-danger">Reservadas <span>5</span></span>
                    <span class="badge badge-warning">Total <span>50</span></span>
                </a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">O Quebra Nozes</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Romeu e Julieta</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Macbet</a>
            </div>            
        </section>
        
        <section class="col-lg-8">
            <h2>Poltronas</h2><hr>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home">                    
                    <h3>Lago do Cisnes</h3>
                    <div class="ml-auto">Arrecadação R$<span>1000,00</span></div>
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