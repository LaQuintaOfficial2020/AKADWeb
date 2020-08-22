<!DOCTYPE html>
<html lang="en">

<head>
    <title>Akda Avatar Creation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/avatar-creation.css">
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <h3 class="akadLabel">AKAD</h3>
    </nav>
    <div class="container my-container" style="position: relative; top: -70px;">
        <div class="row justify-content-between">
        
            <div class="col-5 asset-tab" >
            <ul class="nav nav-tabs">
                <li class="nav-item">
                <a class="nav-link active" id="skin-color-tab" data-toggle="tab" href="#skin-color" role="tab"
                    aria-controls="" aria-selected="true">Skin Color</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="hair-tab" data-cat-tab="hair" data-toggle="tab" href="#hair" role="tab"
                    aria-controls="semestral-grade" aria-selected="true">Hair</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="eyes-tab" data-cat-tab="eyes" data-toggle="tab" href="#eyes" role="tab"
                    aria-controls="eyes" aria-selected="true">Eyes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="brow-tab" data-cat-tab="brow" data-toggle="tab" href="#brow" role="tab"
                    aria-controls="brow" aria-selected="true">Brow</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="mouth-tab" data-cat-tab="mouth" data-toggle="tab" href="#mouth" role="tab"
                    aria-controls="mouth" aria-selected="true">mouth</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="nose-tab" data-cat-tab="nose" data-toggle="tab" href="#nose" role="tab"
                    aria-controls="nose" aria-selected="true">nose</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="top-tab" data-cat-tab="top" data-toggle="tab" href="#top" role="tab"
                    aria-controls="top" aria-selected="true">top</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="bottom-tab" data-cat-tab="bottom" data-toggle="tab" href="#bottom" role="tab"
                    aria-controls="bottom" aria-selected="true">bottom</a>
                </li>
            </ul>
            <div class="tab-content p-2">
                <div class="tab-pane fade show active" id="skin-color" role="tabpanel" aria-labelledby="skin-color-tab">
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="skinColor" data-id="1">1</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="skinColor" data-id="2">2</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="skinColor" data-id="3">3</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="skinColor" data-id="4">4</button>
                </div>
                <div class="tab-pane fade" id="brow" role="tabpanel" aria-labelledby="brow-tab">
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="brow" data-id="1">1</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="brow" data-id="2">2</button>
                </div>
                <div class="tab-pane fade" id="eyes" role="tabpanel" aria-labelledby="eyes-tab">
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="eyes" data-id="1">1</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="eyes" data-id="2">2</button>
                </div>
                <div class="tab-pane fade" id="mouth" role="tabpanel" aria-labelledby="mouth-tab">
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="mouth" data-id="1">1</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="mouth" data-id="2">2</button>
                </div>
                <div class="tab-pane fade" id="nose" role="tabpanel" aria-labelledby="nose-tab">
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="nose" data-id="1">1</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="nose" data-id="2">2</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="nose" data-id="3">3</button>
                </div>
                <div class="tab-pane fade" id="top" role="tabpanel" aria-labelledby="top-tab">
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="top" data-id="1">1</button>
                </div>
                <div class="tab-pane fade" id="bottom" role="tabpanel" aria-labelledby="bottom-tab">
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="bottom" data-id="1">1</button>
                </div>
                <div class="tab-pane fade" id="hair" role="tabpanel" aria-labelledby="hair-tab">
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="hair" data-id="1">1</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="hair" data-id="2">2</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="hair" data-id="3">3</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="hair" data-id="4">4</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="hair" data-id="5">5</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="hair" data-id="6">6</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="hair" data-id="7">7</button>
                <button class="btn btn-primary col-2 p-2 mb-2 avtasst" data-category="hair" data-id="8">8</button>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center mt-5">
                <button class="btn btn-primary col-2 mr-2 pos" data-align="left">Left</button>
                <button class="btn btn-primary col-2 mr-2 pos" data-align="right">Right</button>
                <button class="btn btn-primary col-2 mr-2 pos" data-align="up">Up</button>
                <button class="btn btn-primary col-2 mr-2 pos" data-align="down">Down</button>
            </div>
            <div class="row justify-content-center mt-2">
                <button class="btn btn-primary col-4 mr-2 size" data-change="increase">Increase Size</button>
                <button class="btn btn-primary col-4 mr-2 size" data-change="decrease">Decrease Size</button>
        
            </div>
            </div>
            <!-- avatar -->
            <div class="col-5">
                <div class="row justify-content-center">
                    <div style="position: fixed;margin-top: 50px;">
            
                    <div class="img-skin-color">
                        <img src="/img/avatar-assets/skin-color/ST-1.png" style="height: 470px;z-index: 0;position: fixed;" alt="">
                    </div>
                    <div class="img-eyes" style="max-height: 150px;">
                        <img src="/img/avatar-assets/eyes/eyesset3a.png" alt="" style="height: 34px;top: 95px;position: relative;right: -65px;">
                    </div>
                    <div class="img-brow" style="max-height: 150px;">
                        <img src="/img/avatar-assets/brow/brow1b.png" alt="" style="height: 13px;top: 45px;position: relative;right: -55px;">
                    </div>
                    <div class="img-mouth" style="max-height: 150px;">
                        <img src="/img/avatar-assets/mouth/mouth1.png" alt="" style="height: 13px;top: 111px;position: relative;right: -88px;">
                    </div>
                    <div class="img-nose" style="max-height: 150px;">
                        <img src="/img/avatar-assets/nose/nose1.png" alt="" style="height: 30px;top: 45px;position: relative;right: -104px;">
                    </div>
                    <div class="img-hair" style="max-height: 150px;">
                        <img src="/img/avatar-assets/hair/malehairbg3.png" alt="" style="height: 157px;top: -145px;position: relative;right: -6px;">
                    </div>
                    <div class="img-clothing-top" style="max-height: 150px;">
                        <img src="/img/avatar-assets/clothing/basketball-top/bstop.png" alt="" style="height: 110px;top: -20px;position: relative;right: -53px;z-index: 999;">
                    </div>
                    <div class="img-clothing-bottom" style="max-height: 150px;">
                        <img src="/img/avatar-assets/clothing/default-pants/pants2.png" alt="" style="height: 116px;top: -22px;position: relative;right: -63px;z-index: 999;">
                    </div>
            
                    </div>
                </div>
                <hr>

            </div>

        </div>

        <div class="row justify-content-center mt-5">
            {{-- <button type="submit" class="btn btn-primary btn-sm col-3" id="resetBtn">Reset</button> --}}
            <button type="submit" class="btn btn-primary btn-sm col-3" data-toggle="modal" data-target="#confirmModal" id="confirmBtn">Confirm</button>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="/js/jquery.slimscroll.min.js"></script>
    <script src="/js/avatarScript.js"></script>
</body>

</html>