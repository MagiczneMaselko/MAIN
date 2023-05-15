<?php
    $pol = mysqli_connect('localhost','root','', 'rejestracja');
    if(!empty($_POST['login'])){
        $login = $_POST['login'];                                                                                           #
        $haslo = $_POST['haslo'];                                                                                           #defniowanie formularza
        $sprawdz = "SELECT '$login' , '$haslo' FROM zarejestrowani WHERE `haslo`= '$haslo' AND `login` = '$login'";         #zapytanie czy haslo lub login zgadzaja sie  z baza danych
        $wynik = mysqli_query($pol, $sprawdz);
        if(mysqli_num_rows($wynik) == 1) {                                                                                  #warunek czy haslo lub login zgadzaja sie  z baza danych
            header("Location: /7obcu/REJESTRACJA/zalogowany.html");                                                         #przekierowanie na inna strone
        } else {
            echo "nie prawidlowy login lub haslo!";
        } 
    }
    mysqli_close($pol);
?>