<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  


<?php 


echo "<pre>";
var_dump($_POST);
echo "</pre>";
if( isset($_POST) && !empty($_POST) ) {
  foreach ($_POST as $key => $number){
  if (isset($number) && !empty($number) ){
   echo "<pre>"; 
   echo  $key."-". " Quantité" ." : ".$number; 
   echo "</pre>";
  }
  else {
    // echo "<pre>"; 
    echo '<div class="alert-danger alert-success" role="alert">
    <h4 class="alert-heading">ATTENTION !</h4>
    <p>Le Panier est Vide mon petit Pote </p>
  </div>';
    break;
  }
}
}


//  {
    // var_dump($number);

  ?> 
</body>
</html>
<?php

echo '<div class="col-md-5">
<div class="card border-0 ">
    <div class="card-header card-2">
        <p class="card-text text-muted mt-md-4 mb-2 space">YOUR ORDER <span class=" small text-muted ml-2 cursor-pointer">EDIT SHOPPING BAG</span> </p>
        <hr class="my-2">
    </div>
    <div class="card-body pt-0">
        <div class="row justify-content-between">
            <div class="col-auto col-md-7">
                <div class="media flex-column flex-sm-row"> <img class=" <?php afficheImg($product) " width="62" height="62">
                    <div class="media-body my-auto">
                        <div class="row ">
                            <div class="col-auto">
                                <p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">1 Week Subscription</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" pl-0 flex-sm-col col-auto my-auto">
                <p class="boxed-1">2</p>
            </div>
            <div class=" pl-0 flex-sm-col col-auto my-auto ">
                <p><b>179 SEK</b></p>
            </div>
        </div>
        <hr class="my-2">
        <div class="row justify-content-between">
            <div class="col-auto col-md-7">
                <div class="media flex-column flex-sm-row"> <img class=" img-fluid " src="https://i.imgur.com/9MHvALb.jpg" width="62" height="62">
                    <div class="media-body my-auto">
                        <div class="row ">
                            <div class="col">
                                <p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">2 Week Subscription</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-0 flex-sm-col col-auto my-auto">
                <p class="boxed">3</p>
            </div>
            <div class="pl-0 flex-sm-col col-auto my-auto">
                <p><b>179 SEK</b></p>
            </div>
        </div>
        <hr class="my-2">
        <div class="row justify-content-between">
            <div class="col-auto col-md-7">
                <div class="media flex-column flex-sm-row"> <img class=" img-fluid " src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                    <div class="media-body my-auto">
                        <div class="row ">
                            <div class="col">
                                <p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">2 Week Subscription</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-0 flex-sm-col col-auto my-auto">
                <p class="boxed-1">2</p>
            </div>
            <div class="pl-0 flex-sm-col col-auto my-auto">
                <p><b>179 SEK</b></p>
            </div>
        </div>
        <hr class="my-2">
        <div class="row ">
            <div class="col">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <p class="mb-1"><b>Subtotal</b></p>
                    </div>
                    <div class="flex-sm-col col-auto">
                        <p class="mb-1"><b>179 SEK</b></p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col">
                        <p class="mb-1"><b>Shipping</b></p>
                    </div>
                    <div class="flex-sm-col col-auto">
                        <p class="mb-1"><b>0 SEK</b></p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <p><b>Total</b></p>
                    </div>
                    <div class="flex-sm-col col-auto">
                        <p class="mb-1"><b>537 SEK</b></p>
                    </div>
                </div>
                <hr class="my-0">
            </div>
        </div>';  
                                ?>