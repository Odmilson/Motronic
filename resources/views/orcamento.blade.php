<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motronic</title>

    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="d-inline-flex w-100">
        <div>
            <div class="d-flex flex-column flex-shrink-0 bg-black" style="width: 4.5rem;">
                <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                    <img width="40" height="32" src="{{url('/img/Logo.png')}}" alt="logo">
                    <span class="visually-hidden">Icon-only</span>
                </a>
                <ul class="nav nav-pills nav-flush flex-column mb-auto text-center my-4">
                    <li class="nav-item">
                        <a href="{{url('cliente')}}" class="nav-link py-3 my-3 text-warning" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                            <i class="bi bi-headset fs-2"></i>
                            <span class="visually-hidden">Atendimento</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link active py-3 my-3 bg-warning" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                            <i class="bi bi-card-checklist fs-2"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 my-3 text-warning" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                            <i class="bi bi-tools fs-2"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 my-3 text-warning" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                            <i class="bi bi-gear-fill fs-2"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 my-3 text-warning" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                        <i class="bi bi-door-open-fill fs-2"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid bg-dark">
            <div class="col">
                <div class="row">
                    <div class="container-fluid d-flex justify-content-center my-2 pt-2">
                        <div class="w-75">
                            <form class="w-100 d-inline-block" action="">
                                <select class="select-pesquisa" name="" id="">
                                    <option value="">Codigo</option>
                                    <option value="">Nome</option>
                                    <option value="">E-mail</option>
                                    <option value="">Status</option>
                                </select>
                                <input class="input-pesquisa" type="text">
                                <button class="button-pesquisa btn-warning" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid d-flex justify-content-center my-2">
                        <div class="w-75">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <button class="btn btn-warning" type="button">Novo Orçamento</button>
                                </div>
                                <div>
                                    <input type="checkbox" id="todos" name="todos" value="todos">
                                    <label class="text-white" for="todos"> Aguardando resposta</label>
                                    <input class="ms-3" type="checkbox" id="finalizado" name="finalizado" value="finalizado">
                                    <label class="text-white" for="finalizado"> Finalizado</label>
                                    <input class="ms-3" type="checkbox" id="aguardando" name="aguardando" value="aguardando">
                                    <label class="text-white" for="aguardando"> Aguardando resposta</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid d-flex justify-content-center my-2">
                        <div class="w-75">
                            <table class="bg-light w-100 bg-white table min-w">
                                <thead>    
                                    <tr>
                                        <th id="tb-nome">Nome</th>
                                        <th id="tb-cpf">CPF</th>
                                        <th id="tb-email">E-mail</th>
                                        <th id="tb-codigo">Códiogo</th>
                                        <th id="tb-celular">Celular</th>
                                        <th id="tb-btn"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>