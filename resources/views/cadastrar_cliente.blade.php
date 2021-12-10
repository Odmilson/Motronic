<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

    <header>
        <div class="container">
            <div>
                <a href="{{url('cliente')}}"><i class="bi bi-chevron-compact-left"></i></a>
            </div>
            <div>
                <img src="{{url('/img/Logo.png')}}" alt="logo">
            </div>
        </div>
    </header>

    <div class="container-fluid text-center">
        <div class="container-lg">
            <div class="container">
                    <form name="formCliente" id="formCliente" method="post" action="{{url('Cliente')}}">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-9 d-flex flex-column text-start">
                                    <div>
                                        <label for="nome">Nome*:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="text" name= "nome" id= "nome" required= "true" maxlength= "100">
                                    </div>
                                </div>                          
                                <div class="col-3 w-25 d-flex flex-column text-start">
                                    <div>
                                        <label for="cpf">CPF*:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="text" name= "cpf" id= "cpf" required= "true" maxlength= "11">
                                    </div>
                                </div>                                   
                            </div>
                            <div class="row">
                                <div class="col w-100 d-flex flex-column text-start">
                                    <div>
                                        <label for="email">E-MAIL*:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="email" name= "email" id= "email" required= "true" maxlength= "100">
                                    </div>
                                </div>
                                <div class="col w-100 d-flex flex-column text-start">
                                    <div>
                                        <label for="celular">Celular*:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="text" name= "celular" id= "celular" required= "true" maxlength= "11">
                                    </div>
                                </div>
                                <div class="col w-100 d-flex flex-column text-start">
                                    <div>
                                        <label for="telefone">Telefone*:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="text" name= "telefone" id= "telefone" required= "true" maxlength= "10">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col w-100 d-flex flex-column text-start">
                                    <div>
                                        <label for="uf">UF*:</label>
                                    </div>
                                    <div>
                                        <select class="form-control w-100" name="uf" id="uf" required= "true">
                                            <option value="" disabled selected>Selecione...</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                            <option value="DF">Distrito Federal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col w-100 d-flex flex-column text-start">
                                    <div>
                                        <label for="cep">CEP*:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="text" name= "cep" id= "cep" required= "true" maxlength= "8">
                                    </div>
                                </div>
                                <div class="col w-100 d-flex flex-column text-start">
                                    <div>
                                        <label for="cidade">Cidade*:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="text" name= "cidade" id= "cidade" required= "true" maxlength= "80">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col w-100 d-flex flex-column text-start">
                                    <div>
                                        <label for="bairro">Bairro*:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="text" name= "bairro" id= "bairro" required= "true" maxlength= "80">
                                    </div>
                                </div>
                                <div class="col w-100 d-flex flex-column text-start">
                                    <div>
                                        <label for="logradouro">Logradouro*:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="text" name= "logradouro" id= "logradouro" required= "true" maxlength= "100">
                                    </div>
                                </div>
                                <div class="col w-100 d-flex flex-column text-start">
                                    <div>
                                        <label for="numero">Numero*:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="number" name= "numero" id= "numero" required= "true" maxlength= "11">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col w-100 d-flex flex-column text-start">
                                    <div>
                                        <label for="complemento">Complemento:</label>
                                    </div>
                                    <div>
                                        <input class="form-control w-100" type="text" name= "complemento" id= "complemento" maxlength= "150">
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit" value="Cadastra">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>