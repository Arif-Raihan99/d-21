<?php include "pages/includes/header.php"; ?>

<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Calculate Even or Odd Number</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row form-group">
                                <label for="asf" class="col-md-4 col-form-label">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="number1" id="asf" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="asd" class="col-md-4 col-form-label">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" id="asd" name="number2" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-md-4 col-form-label">Option</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="type" value="even">even</label>
                                    <label for=""><input type="radio" name="type" value="odd">odd</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="number" value="<?php echo isset($result) ? $result :  ' '; ?>" readonly class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="eoBtn" class="btn btn-success btn-block" value="Submit">
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
