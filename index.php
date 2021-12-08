<?php
    $p_1 = ['OPPO A53','5,499 บาท','https://cdn.siamphone.com/spec/oppo/images/a53/oppo_a53_1.jpg'];
    $p_2 = ['Xiaomi 11T Pro','16,990 บาท','https://cdn.siamphone.com/spec/xiaomi/images/11t_pro/xiaomi_11t_pro_1.jpg'];
    $p_3 = ['Samsung Galaxy A03s','4,299 บาท','https://cdn.siamphone.com/spec/samsung/images/galaxy_a03s/samsung_galaxy_a03s_1.jpg'];
    $p_4 = ['Redmi 10','4,999  บาท','https://cdn.siamphone.com/spec/redmi/images/10/redmi_10_1.jpg'];
    $p_5 = ['Apple iPhone 13 Pro Max ','42,900 0 บาท','https://cdn.siamphone.com/spec/apple/images/iphone_13_pro_max/apple_iphone_13_pro_max_1.jpg'];
    $p_6 = ['Vivo Y33s','7,999 บาท','https://cdn.siamphone.com/spec/vivo/images/y33s/vivo_y33s_1.jpg'];
     // $compare = ["phone-A","1999","phone-B","2999","phone-C","3999"];
    // $compare = ["","","","","",""];
?>
<script>
    let p_1 = ['OPPO A53','5,499 บาท','https://cdn.siamphone.com/spec/oppo/images/a53/oppo_a53_1.jpg'];
    let p_2 = ['Xiaomi 11T Pro','16,990 บาท','https://cdn.siamphone.com/spec/xiaomi/images/11t_pro/xiaomi_11t_pro_1.jpg'];
    let p_3 = ['Samsung Galaxy A03s','4,299 บาท','https://cdn.siamphone.com/spec/samsung/images/galaxy_a03s/samsung_galaxy_a03s_1.jpg'];
    let p_4 = ['Redmi 10','4,999  บาท','https://cdn.siamphone.com/spec/redmi/images/10/redmi_10_1.jpg'];
    let p_5 = ['Apple iPhone 13 Pro Max ','42,900 0 บาท','https://cdn.siamphone.com/spec/apple/images/iphone_13_pro_max/apple_iphone_13_pro_max_1.jpg'];
    let p_6 = ['Vivo Y33s','7,999 บาท','https://cdn.siamphone.com/spec/vivo/images/y33s/vivo_y33s_1.jpg'];

    let count = 0;


    // let myList = document.querySelector('#myProductName');
    // let myEl = document.createElement('td');

    function addProduct(name, price, img){
            count++;
            if(count <= 3){
                alert(`เพิ่มสินค้า ${name} ${img} ในตารางเปรียบเทียบสำเร็จ` );

                let myTName = document.querySelector('#myProductName');
                let myName = document.createElement('td');
                myName.innerText = `${name}`;
                myTName.appendChild(myName);

                let myTPrice = document.querySelector('#myProductPrice');
                let myPrice = document.createElement('td');
                myPrice.innerText = `${price}`;
                myTPrice.appendChild(myPrice);

                let myTImg = document.querySelector('#myProductImage');
                let myImage = document.createElement('td');
                myImage.innerHTML = `<img src="${img}" width="100">`;
                myTImg.appendChild(myImage);

                



            }else{
                alert('ตารางเปรียบเทียบเต็มแล้ว กรุณาล้างตารางเปรียบเทียบก่อน');
            }
            
    }

</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
<body class="mb-5">

    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Bootstrap
        </a>
    </div>
    </nav>
    <div class="container mb-5 ">

        <ul id="myList">
        </ul>
        
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เปรียบเทียบสินค้า</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">สินค้าที่ 1 </th>
                                <th scope="col">สินค้าที่ 2 </th>
                                <th scope="col">สินค้าที่ 3 </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="myProductImage">
                                <th scope="row">รูปภาพ</th>
                                <!-- <td><img src="https://via.placeholder.com/200"></td>
                                <td><img src="https://via.placeholder.com/200"></td>
                                <td><img src="https://via.placeholder.com/200"></td> -->
                            </tr>
                            <tr id="myProductName">
                                <th scope="row">ชื่อสินค้า</th>
  
                            </tr>
                            <tr id="myProductPrice">
                                <th scope="row">ราคาสินค้า</th>
         
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><button type="button" class="btn btn-warning">สั่งซื้อ</button></td>
                                <td><button type="button" class="btn btn-warning">สั่งซื้อ</button></td>
                                <td><button type="button" class="btn btn-warning">สั่งซื้อ</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                </div>
            </div>
        </div>


        <div class="row mt-5 ">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $p_1[2] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>ชื่อสินค้า : <?php echo $p_1[0]?> </h4>
                        <h5>ราคา : <?php echo $p_1[1]?></h4>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">สั่งซื้อ</button>
                            <button onclick="addProduct(p_1[0],p_1[1],p_1[2])"  class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">เปรียบเทียบ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $p_2[2] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>ชื่อสินค้า : <?php echo $p_2[0]?> </h4>
                        <h5>ราคา : <?php echo $p_2[1]?></h4>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">สั่งซื้อ</button>
                            <button onclick="addProduct(p_2[0],p_2[1],p_2[2])" class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">เปรียบเทียบ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $p_3[2] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>ชื่อสินค้า : <?php echo $p_3[0]?> </h4>
                        <h5>ราคา : <?php echo $p_3[1]?></h4>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">สั่งซื้อ</button>
                            <button onclick="addProduct(p_3[0],p_3[1],p_3[2])" class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">เปรียบเทียบ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $p_4[2] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>ชื่อสินค้า : <?php echo $p_4[0]?> </h4>
                        <h5>ราคา : <?php echo $p_4[1]?></h4>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">สั่งซื้อ</button>
                            <button onclick="addProduct(p_4[0],p_4[1],p_4[2])" class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">เปรียบเทียบ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $p_5[2] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>ชื่อสินค้า : <?php echo $p_5[0]?> </h4>
                        <h5>ราคา : <?php echo $p_5[1]?></h4>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">สั่งซื้อ</button>
                            <button onclick="addProduct(p_5[0],p_5[1],p_5[2])" class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">เปรียบเทียบ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $p_6[2] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>ชื่อสินค้า : <?php echo $p_6[0]?> </h4>
                        <h5>ราคา : <?php echo $p_6[1]?></h4>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">สั่งซื้อ</button>
                            <button onclick="addProduct(p_6[0],p_6[1],p_6[2])" class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">เปรียบเทียบ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    
</body>
</html>