<?php

echo 
    "<script>
        var resultado = window.confirm('Matéria apagada com sucesso! Essa ação não pode ser desfeita.');

        if(resultado) {
            document.location.replace('http://localhost/jornal_diario/admin/');
        } else {
            document.location.replace('http://localhost/jornal_diario/admin/');
        }
    </script>";
?>
