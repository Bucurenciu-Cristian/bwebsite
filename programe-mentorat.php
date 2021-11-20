<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <!-- css -->
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <title>Hello, world!</title>
    <style rel="stylesheet">
        .black-border {
            border-radius: 20px;
            padding: 10px;
        }

        .bg-cert {
            background-color: var(--pink);
            color: white;

        }
        input[type="checkbox"] {
            background-color: var(--black);
        }

    </style>
</head>


<body>
<?php include('mainNavbar.html'); ?>


<div class="container">
    <div class="row my-5">

    </div>
    <div class="row">
        <div class="col-sm-3">
            <form action="">
                <div id="certificări" class="row mb-3 py-2 bg-cert black-border">
                    <div class="container">
                        <div class="row ml-0 black-border h3" >Certificări</div>
                        <div class="row">
                            <div class="container">
                                <div class="black-border" name="certificări">
                                    <div class="form-check ">
                                        <input class="form-check-input bg-dark" id="Decide IT" name="" type="checkbox"
                                               value="Decide IT">
                                        <label class="form-check-label" for="Decide IT">Decide IT</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="" id="Vanzari" type="checkbox"
                                               value="Vanzari 5X">
                                        <label class="form-check-label" for="Vanzari">Vanzari 5X</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="BVC" name="" type="checkbox" value="BVC">
                                        <label class="form-check-label" for="BVC">BVC</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="limba" class="row mb-3">
                    <div class="container">
                        <div class="row ml-0">Limba</div>
                        <div class="row">
                            <div class="container">
                                <div class="form-check">
                                    <input class="form-check-input" id="Română" name="" type="checkbox" value="Română">
                                    <label class="form-check-label" for="Română">Română</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="Engleză" type="checkbox"
                                           value="Engleză">
                                    <label class="form-check-label" for="Engleză">Engleză</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="experientă" class="row mb-3">
                    <div class="container">
                        <div class="row ml-0">Experiență în <br> antreprenoriat:</div>
                        <div class="row">
                            <div class="container">
                                <div class="form-check">
                                    <input class="form-check-input" id="5-10 ani" name="" type="checkbox"
                                           value="5-10 ani">
                                    <label class="form-check-label" for="5-10 ani">5-10 ani</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="11-15 ani" type="checkbox"
                                           value="11-15 ani">
                                    <label class="form-check-label" for="11-15 ani">11-15 ani</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="16-20 ani" type="checkbox"
                                           value="16-20 ani">
                                    <label class="form-check-label" for="16-20 ani">16-20 ani</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="nothing" type="checkbox"
                                           value="nothing">
                                    <label class="form-check-label" for="nothing"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="business" class="row mb-3">
                    <div class="container">
                        <div class="row ml-0">Business-uri active:</div>
                        <div class="row">
                            <div class="container">
                                <div class="form-check">
                                    <input class="form-check-input" id="1-2" name="" type="checkbox" value="1-2">
                                    <label class="form-check-label" for="1-2">1-2</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="3-5" type="checkbox" value="3-5">
                                    <label class="form-check-label" for="3-5">3-5</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="6-10" type="checkbox" value="6-10">
                                    <label class="form-check-label" for="6-10">6-10</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="nothing" type="checkbox"
                                           value="nothing">
                                    <label class="form-check-label" for="nothing"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="poziții" class="row mb-3">
                    <div class="container">
                        <div class="row ml-0">Poziții în companie:</div>
                        <div class="row">
                            <div class="container">
                                <div class="form-check">
                                    <input class="form-check-input" id="CEO" name="" type="checkbox" value="CEO">
                                    <label class="form-check-label" for="CEO">CEO</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="CTO" type="checkbox" value="CTO">
                                    <label class="form-check-label" for="CTO">CTO</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="CFO" type="checkbox" value="CFO"
                                           checked>
                                    <label class="form-check-label" for="CFO">CFO</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="nothing" type="checkbox"
                                           value="nothing">
                                    <label class="form-check-label" for="nothing"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="angajați" class="row mb-3">
                    <div class="container">
                        <div class="row ml-0">Nr. angajați:</div>
                        <div class="row">
                            <div class="container">
                                <div class="form-check">
                                    <input class="form-check-input" id="1 - 10" name="" type="checkbox" value="1 - 10">
                                    <label class="form-check-label" for="1 - 10">1 - 10</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="11 - 50" type="checkbox"
                                           value="11 - 50">
                                    <label class="form-check-label" for="11 - 50">11 - 50</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="51 - 100" type="checkbox"
                                           value="51 - 100"
                                           checked>
                                    <label class="form-check-label" for="51 - 100">51 - 100</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="nothing" type="checkbox"
                                           value="nothing">
                                    <label class="form-check-label" for="nothing"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cifraAfaceri" class="row mb-3">
                    <div class="container">
                        <div class="row ml-0">Cifra de afaceri:</div>
                        <div class="row mb-3">
                            <div class="container">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           id="cifraAfaceri"
                                           type="text"
                                           placeholder="exemplu 1.000.000"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="zileDisponibile" class="row mb-3">
                    <div class="container">
                        <div class="row ml-0">Zile disponibile:</div>
                        <div class="row">
                            <div class="container">
                                <div class="form-check">
                                    <input class="form-check-input" id="Luni" name="" type="checkbox" value="Luni">
                                    <label class="form-check-label" for="Luni">Luni</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="Marți" type="checkbox" value="Marți">
                                    <label class="form-check-label" for="Marți">Marți</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="Miercuri" type="checkbox"
                                           value="Miercuri"
                                           checked>
                                    <label class="form-check-label" for="Miercuri">Miercuri</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="Joi" type="checkbox" value="Joi">
                                    <label class="form-check-label" for="Joi">Joi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="Vineri" type="checkbox" value="Vineri"
                                           checked>
                                    <label class="form-check-label" for="Vineri">Vineri</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="Sâmbătă" type="checkbox"
                                           value="Sâmbătă">
                                    <label class="form-check-label" for="Sâmbătă">Sâmbătă</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="Duminică" type="checkbox"
                                           value="Duminică">
                                    <label class="form-check-label" for="Duminică">Duminică</label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="oreDisponibile" class="row mb-3">
                    <div class="container">
                        <div class="row ml-0">Ore disponibile:</div>
                        <div class="row">
                            <div class="container">
                                <div class="form-check">
                                    <input class="form-check-input" id="08:00 - 13:00" name="" type="checkbox"
                                           value="08:00 - 13:00">
                                    <label class="form-check-label" for="08:00 - 13:00">08:00 - 13:00</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="13:00 - 18:00" type="checkbox"
                                           value="13:00 - 18:00">
                                    <label class="form-check-label" for="13:00 - 18:00">13:00 - 18:00</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="" id="18:00 - 21:00" type="checkbox"
                                           value="18:00 - 21:00" checked>
                                    <label class="form-check-label" for="18:00 - 21:00">18:00 - 21:00</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm">
            Main Content
        </div>
    </div>

</div>
</div>


<!-- jQuery,Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
<?php include('mainFooter.html'); ?>
</html>