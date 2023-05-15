<?php
setcookie("visited", "1", time()+3600*3);
 //Wysyła cookie na komputer użytkownika
?>
<?php
if(file_exists("counter.n"))
{
 //Sprawdza czy plik istnieje
   $file=fopen("counter.n", "r"); // otwiera plik
   flock($file, 1); // blokuje plik
    $ile=fgets($file, 100);
 //Odczytuje wartość z pliku counter.n

   flock($file, 3); // odblokowywuje plik
    fclose($file); //zamyka plik
     if($_COOKIE["visited"]!="1")
 //Sprawdza, czy użytkownik był na stronie
 {
$ile++;
 //Zwiększa wartość o jeden tylko po pierwszym wejściu
 }
}
 else
{
$ile=1; //jeśli plik nie istnieje, wyświetli się 1
}

 $file=fopen("counter.n", "w"); // otwiera plik do zapisu
  flock($file, 2); // blokuje do zapisu
   fwrite($file, $ile); //zapisuje wartość
  flock($file, 3); // odblokowuje plik
 fclose($file); //zamyka plik

echo("Ilość osób które odwiedziły Dziuple: <b> $ile </b>"); //Wyświetla wartość
?>