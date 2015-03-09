<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h2>Portada</h2>
<?php echo $this->titulo ?>
<?php if(isset($this->post) and count($this->post)){ ?>
    <table border="1">
        <tr>
            <td>id post</td>
            <td>titulo</td>
            <td>cuerpo</td>
        </tr>

        <?php foreach($this->post as $key){ ?>

            <tr>
                <td><?php echo $key['id_post']; ?></td>
                <td><?php echo $key['titulo']; ?></td>
                <td><?php echo $key['cuerpo']; ?></td>
            </tr>

        <?php } ?>
    </table>

<?php }else{ ?>

    <p><strong>No se encontraron post</strong></p>

<?php } ?>
</body>
</html>