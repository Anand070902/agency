
                <div class="row">
                    <?php
                    $callingproduct = callingData("products JOIN category ON products.category = category.cat_id");

                    if(isset($_GET['cat'])){
                        $cat = $_GET['cat'];
                        $callingproduct = callingData("products JOIN category ON products.category = category.cat_id where category='$cat'");
                       
                    }
                    elseif(isset($_GET['find'])){
                        $search = $_GET['search'];
                        $callingproduct = callingData("products JOIN category ON products.category = category.cat_id where title LIKE '%$search%'");
                   
                    }
                    foreach ($callingproduct as $value){
                        ?>
                        <div class="col-4">
                            <div class="card ms-1 mt-1 mb-3 border-info">
                            <img src="productimages/<?= $value['image'];?>" alt="" class="card-img-top" style="object-fit:cover; height:170px;"><hr class="text-info">
                            <div class="card-body p-2">
                                <h2 class="h4">
                                    <span class="text-dark ms-2 ">₹ <?= $value['discount_price'];?></span>
                                    <del class="small text-danger lead"> ₹ <?= $value['price'];?></del ></h2>
                                <h6 class='m-0 p-0 text-truncate text-small text-warning ms-1'><?= $value['title'];?></h6>
                                <small><b class='m-0 p-0 text-dark  ms-2'><?= $value['cat_title'];?></b></small>
                                 <a href="?del=<?= $value['id'];?>" class="btn btn-danger float-end">x</a>
                                
                            </div>         
                            </div>
                        </div>
                   <?php } ?>

                </div>
                <?php
if(isset($_GET['del'])){
    $id = $_GET['del'];

    delete("products", "id='$id'");
    echo "<script>window.open('insert.php','_self')</script>";
}
?>