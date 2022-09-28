<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2>Книжкова бібліотека</h2></center>
    <!--Після надсилання форми всі дані форми пересилаються до InsertBooks.php -->
    <form action="InsertBooks.php" method="post">
 
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
            <td> Унікальний номер книги ISBN:</td>
            <td> <input type="text" name="isbn" size="28"> </td>
            </tr>
            <tr>
            <td> Назва книги:</td>
            <td> <input type="text" name="title" size="28"> </td>
            </tr>
            <tr>
            <td> Автор:</td>
            <td> <input type="text" name="author" size="28"> </td>
            </tr>
            <tr>
            <td> Видання:</td>
            <td> <input type="text" name="edition" size="28"> </td>
            </tr>
            <tr>
            <td> Дата публікації: </td>
            <td> <input type="text" name="publication" size="28"> </td>
            </tr>
            <tr>
            <td></td>
            <td>
            <input type="submit" value="Додати">
            <input type="reset" value="Очистити">
            </td>
            </tr>
        </table>
    </form>
</body>
</html>