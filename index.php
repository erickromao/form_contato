<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Formulário Contato</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./src/View/style.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="./src/View/script.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="errorMessages" style="display: none;" class="alert alert-danger">
        Por favor, preencha todos os campos.
    </div>
    <div class="container contact">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                    <h2>Contato</h2>
                    <h4>Se houver dúvidas, não hesite em entrar em contato conosco !</h4>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contact-form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="fnameID">Nome Completo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fnameID" placeholder="Insira o Nome Completo" name="fname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="emailID">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="emailID" placeholder="Insira o Email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="commentID">Comentário:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="commentID" name="comment" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" id="btnEnviar">
                                <style>
                                    #btnEnviar {
                                        transition: transform 0.3s ease, opacity 0.3s ease;
                                    }

                                    #btnEnviar:hover {
                                        opacity: 0.9;

                                    }

                                    #btnEnviar:active {
                                        transform: scale(1.1);
                                        transition: transform 0.1s ease;
                                    }
                                </style>
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>
</body>

</html>