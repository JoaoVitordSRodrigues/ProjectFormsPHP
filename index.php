<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Cadastro Pessoa Física</h1>  
                <div class="divForm">                     
                    <form class="row g-3 needs-validation" novalidate action="controller/controllerPessoa.php">
                        <div class="col-md-4">
                            <label for="txtNome" class="form-label">Nome</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" name="txtNome" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Insira seu nome.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="txtEndereco" class="form-label">Endereço</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" name="txtEndereco" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Insira seu endereço.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="txtBairro" class="form-label">Bairro</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" name="txtBairro" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Insira seu bairro.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="txtCep" class="form-label">CEP</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" name="txtCep" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Insira seu cep.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>

                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (() => {
                            'use strict'

                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            const forms = document.querySelectorAll('.needs-validation')

                            // Loop over them and prevent submission
                            Array.from(forms).forEach(form => {
                                form.addEventListener('submit', event => {
                                if (!form.checkValidity()) {
                                    event.preventDefault()
                                    event.stopPropagation()
                                }

                                form.classList.add('was-validated')
                                }, false)
                            })
                            })()
                        </script>    
                    </form>                     
                </div>                                   
            </div>
        </div>        
    </body>
</html>
