<?php include "pages/includes/header.php"; ?>


<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Check Prime Number </h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row form-group">
                                <label for="asf" class="col-md-4 col-form-label">Input Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="inputNumber" id="asf" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo isset($result) ? $result :  ' '; ?>" readonly class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="pBtn" class="btn btn-success btn-block" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "pages/includes/footer.php"; ?>
