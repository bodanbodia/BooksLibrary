<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2>Книжкова бібліотека</h2></center>
    <br>
 
    <?php
        include("DBConnection.php");
 
        $isbn=$_POST["isbn"];
        $title=$_POST["title"];
        $author=$_POST["author"];
        $edition=$_POST["edition"];
        $publication=$_POST["publication"];
 
        $query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
        $result = mysqli_query($db,$query);
    ?>
    <h3> Інформація про книгу успішно додана </h3>
 
    <a href="SearchBooks.php"> Для пошуку інформації про книги натисніть тут </a>
 
</body>
</html>