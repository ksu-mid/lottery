<html >
<head>

<body>
    <div> Заповніть поля числами вказаними в білеті </div>
    <form id = "lottery_form" action="" method="POST">
        <input id="number_1" type="number" name="number_1" required min="1" max="52">
        <input id="number_2" type="number" name="number_2" required min="1" max="52">
        <input id="number_3" type="number" name="number_3" required min="1" max="52">
        <input id="number_4" type="number" name="number_4" required min="1" max="52">
        <input id="number_5" type="number" name="number_5" required min="1" max="52">
        <input id="number_6" type="number" name="number_6" required min="1" max="52">
        <input id="btn" type="submit" value="Отправить" onclick="validate()">
    </form>
    <script type="text/javascript" src="index.js"></script>
</body>
</html> 
<table>
        <thead>
            <tr>За результатами 538 розіграшів</tr>
            <tr>
                <th>Вгадано</th>
                <th>Кількість разів</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>6x6</td>
                <td id="td_1"></td>
            </tr>
            <tr>
                <td>5x6</td>
                <td id="td_2"></td>
            </tr>
            <tr>
                <td>4x6</td>
                <td id="td_3"></td>
            </tr>
            <tr>
                <td>3x6</td>
                <td id="td_4"></td>
            </tr>
            <tr>
                <td>2x6</td>
                <td id="td_5"></td>
            </tr>
        </tbody>
    </table>