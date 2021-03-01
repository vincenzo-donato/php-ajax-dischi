<!-- CODE: HEADER  -->
<header>
    <!-- CONTENITORE: Img logo + select  -->
    <div class="container">
        <img src="img/logo.png" alt="logo" />
        <h1>Bootify-PHP</h1>
        <select name="" id="">
            <?php include 'header-generi.php' ?>
            <?php foreach($generi as $genere){?>
                <option value="<?php echo $genere?>"><?php echo $genere?></option>
            <?php } ?>
        </select>
    </div>
    <!--FINE CONTENITORE: Img logo + select  -->
</header>