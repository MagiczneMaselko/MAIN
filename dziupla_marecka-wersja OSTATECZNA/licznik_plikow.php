<?php/*
$sciezka = './KANAŁY/KANAL_1/PLIKI';
$licznikPlikow = 0;
$katalog = opendir($sciezka);
while($plik = readdir($katalog)) 
{
   if ($plik<>'.' && $plik<>'..' && !is_dir($sciezka.$plik))
   {
       $licznikPlikow++;
   }
}
closedir($katalog);
//-----------------------------------------------------------------------------------------------------------------------

$sciezka1= './pliki';
$licznikPlikow1 = $licznikPlikow;
$katalog1 = opendir($sciezka1);
while($plik1= readdir($katalog1)) 
{
   if ($plik1<>'.' && $plik1<>'..' && !is_dir($sciezka1.$plik1))
   {
       $licznikPlikow1++;
   }
}
closedir($katalog1);
//-----------------------------------------------------------------------------------------------------------------------
$sciezka2 = './archiwum';
$licznikPlikow2 = $licznikPlikow1;
$katalog2 = opendir($sciezka2);
while($plik2 = readdir($katalog2)) 
{
   if ($plik2<>'.' && $plik2<>'..' && !is_dir($sciezka2.$plik2))
   {
       $licznikPlikow2++;
   }
}
closedir($katalog2);

//----------------------------------------
$sciezka3 = './archiwum1';
$licznikPlikow3 = $licznikPlikow2;
$katalog3 = opendir($sciezka3);
while($plik3= readdir($katalog3)) 
{
   if ($plik3<>'.' && $plik3<>'..' && !is_dir($sciezka3.$plik3))
   {
       $licznikPlikow3++;
   }
}
closedir($katalog3);
//--------------------------------------------------------------
$sciezka4 = './archiwum2';
$licznikPlikow4 = $licznikPlikow3;
$katalog4 = opendir($sciezka4);
while($plik4 = readdir($katalog4)) 
{
   if ($plik4<>'.' && $plik4<>'..' && !is_dir($sciezka4.$plik4))
   {
       $licznikPlikow4++;
   }
}
closedir($katalog4);

echo 'Łączna ilość pliczków w Dziupli: '.$licznikPlikow;
*/
?>