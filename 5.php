<html>

<head>
<title>Matrix 3x3</title>
</head>
<body bgcolor="#FFFFFF">

<?php 
         $Angka[0][0]=1;
        $Angka[0][1]=2;
        $Angka[0][2]=3;
        $Angka[1][0]=4;
        $Angka[1][1]=5;
        $Angka[1][2]=6;
        $Angka[2][0]=7;
        $Angka[2][1]=8;
        $Angka[2][2]=9;

       

        tampilmatriks($Angka);
        print"<br><br>";
       

        function tampilmatriks($A){
        for ($i=0;$i<=2;$i++)
        {
            if ($i>0){print"<br>";}
            for ($j=0;$j<=2;$j++)
             {
               Print " | ".$A[$i][$j]." | ";
             }
        } 
        }

        $hasil = $Angka[0][0]+$Angka[1][1]+$Angka[2][2]+$Angka[0][2]+$Angka[1][1]+$Angka[2][0];

        echo "Total : $hasil";





 ?>
</body>

</html>