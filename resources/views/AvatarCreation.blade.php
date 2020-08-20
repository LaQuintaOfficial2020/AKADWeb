<!DOCTYPE html>
<html lang="en">

<head>
    <title>Akda Avatar Creation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/avatar-creation.css">

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <h3 class="akadLabel">AKAD</h3>
    </nav>
    <div class="container my-container">
        <div class="row my-row justify-content-between">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-4 my-col">
                <div class="row my-row-assets">

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-4 my-col">

                <div class="row my-row-avatar text-center">

                </div>
                <div class="row d-flex justify-content-between btnRow">
                    <div class="col-sm-6 col-md-4 col-lg-5 text-center resetBtnE">
                        <button type="submit" class="btn btn-default btn-sm" id="resetBtn">Reset</button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-5 text-center confirmBtnE">
                        <button type="submit" class="btn btn-default btn-sm" data-toggle="modal" data-target="#confirmModal" id="confirmBtn">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirm Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="dialogBoxMsg1 text-center">Proceed with the chosen avatar?</h5>
                    <h6 class="dialogBoxMsg2 text-center">You can still edit this avatar</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="backBtn">Go Back</button>
                    <button type="button" class="btn btn-primary" id="goBtn">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>