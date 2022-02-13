<?php include "pages/includes/header.php"; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-3 mb-5">
                <div class="card">
                    <img src="assets/img/<?php echo $product['image']?>" alt="" class="img-h200 card-img-top">
                    <div class="card-body">
                        <h3><?php echo $product['name']?></h3>
                        <h4>TK. <?php echo $product['price']?></h4>
                        <hr/>
                        <a href="" class="btn btn-success">Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include "pages/includes/footer.php"; ?>
