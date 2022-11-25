<?php

echo 
    "<script>
        var resultado = window.confirm('Matéria apagada com sucesso!');

        if(resultado) {
            document.location.replace('http://localhost/jornal_diario/admin/');
        }
    </script>";
?>
