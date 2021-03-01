<!-- Includo il file dischi  -->
<?php include 'dischi.php' ?>

<!-- Lavoro sul main  -->
<main>

    <!-- box dischi  -->
    <div class="box-dischi">

        <!-- ciclo su array dischi per stamparli tutti  -->
        <?php foreach ($disc as $disco) {?>

            <!-- box disco  -->
            <div class="disco">
                <img src="<?php echo $disco['poster']  ?>" alt="<?php echo $disco['title'] ?>">
                <h3><?php echo $disco['title'] ?></h3>
                <span><? echo $disco['author'] ?></span>
                <span><? echo $disco['year']?></span>
                <i class="far fa-play-circle"></i>
            </div>
            <!-- box disco fine -->

        <?php }?>
        <!-- fine ciclo  -->
        
    </div>         
    <!-- box dischi fine  -->

</main>
<!-- Fine main -->