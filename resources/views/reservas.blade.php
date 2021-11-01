<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css" media="screen" />
    <title>Reservas</title>
</head>
<body class="rapadura">
    <div id="overlay">  </div>
    <div class="container calendario">
        <div class="header">
            <div class="icon arr prev">  </div>
        <div class="mes"> Outubro, 2021 </div>
        <div class="icon arr next"></div>
        </div>
        <table>
            <tr>
                <th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sab</th>
            </tr>
            <tr>
                <td class="notcurMes"> 22 </td>
                <td class="notcurMes"> 25 </td>
                <td> 1 </td>
                <td> 2 </td>
                <td class="curDia"> 3 </td>
                <td> 4 </td>
                <td> 5 </td>
            </tr>
            <tr>
                <td> 6 </td>
                <td class="feriado"> 7 </td>
                <td> 8 </td>
                <td> 9 </td>
                <td> 10 </td>
                <td> 11 </td>
                <td> 12 </td>
            </tr>
            <tr>
                <td> 13 </td>
                <td> 14 </td>
                <td> 15 </td>
                <td> 16 </td>
                <td> 17 </td>
                <td> 18 </td>
                <td> 19 </td>
            </tr>
            <tr>
                <td> 20 </td>
                <td> 21 </td>
                <td> 22 </td>
                <td class="feriado"> 23 </td>
                <td> 24 </td>
                <td> 25 </td>
                <td> 26 </td>
            </tr>
            <tr>
                <td> 27 </td>
                <td> 28 </td>
                <td> 29 </td>
                <td> 30 </td>
                <td class="notcurMes"> 1 </td>
                <td class="notcurMes"> 2 </td>
                <td class="notcurMes"> 3 </td>
            </tr>
        </table>
        <button class="button-big" id="add_event"> Confirmar </button>
    </div>
    <form action="" class="container booking" name="booking">
        <div class="header">
            <div> <h2> Hotel Royal Índigo </h2> 
                <div class="icon"> </div>
                <p>Brasil, Brasília</p>
            </div>
        </div>
        <div class="dates" data-type="none">
            <label for="checkin">Check-in</label>
            <div class="input-text">
                <input type="datetime" value="22 octuber, 2021" id="checkin" readonly>
                <div class="icon pop-up">  </div>

                <label for="checkout"> Checkout </label>
                <div class="input-text">
                    <input type="datetime" value="22 october, 2021" id="checkout" readonly>
                <div class="icon pop-up">  </div>
                </div>
                <div class="div-chck">
                    <input type="checkbox" id="check">
                    <div class="icon input-text"></div>
                    <label for="check" class="checkbox"> Outras datas </label>
                </div>
            </div>
        </div>
        <ul class="pessoas">
            <li>
                <label> Adultos </label>
                <div class="input-text">
                    <select name="adultos">
                        <option value="1"> 1 </option>
                        <option value="2" selected="selected"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                    </select>
                    <div class="icon"></div>
                </div>
            </li>

            <li>
                <label> Crianças </label>
                <div class="input-text">
                    <select name="criancas">
                        <option value="1"> 1 </option>
                        <option value="2" selected="selected"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                    </select>
                    <div class="icon"></div>
                </div>
            </li>
        </ul>
        <button class="button-big" id="search"><div class="icon"></div>Pesquisar por quartos</button>     
    </form>
</body>
</html>