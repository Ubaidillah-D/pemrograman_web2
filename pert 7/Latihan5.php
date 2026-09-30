<HTML>
    <HEAD>
        <TITle>Penggunaan list</TITle>
    </HEAD>
    <Body>
        <?php
        $program =
        array('Bobo','Doraemon','Spiderman');
        list($Majalah,$Komik,$Film)=
        $program;
        echo "Jenis Buku & Hiburan :";
        echo "<br/>";
        echo "Cerpen : $Majalah";
        echo "<br />";
        echo "Cerita Bergambar : $Komik";
        echo "<br />";
        echo "Bioskop : $Film";
        ?>
    </Body>
</HTML>