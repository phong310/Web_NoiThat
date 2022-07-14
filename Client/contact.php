<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./test.css">
    <link rel="stylesheet" type="text/css" href="./all.css">
    <script src="js/jquery-3.6.0.js"></script>
    <script src="https://cdn.tiny.cloud/1/crde90njbl7i1iopsbtlenncwstsnluf8htdphc5vd7ek3xc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Shop</title>
</head>

<body>
    <!-- Navbar -->
    
    <hr>

    <!--new product-->
    <div class="container">
        <div class="row ">
            <div class="container-fluid text-center">
                <h2 class="section-title">LIÊN HỆ</h2>
            </div>
            <div class="container-fluid text-center">
             
            </div>
            <div class="col-md-6 col-sm-6">
                <h2 style="text-align: center;">GỬI PHẢN HỒI</h2>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Họ tên" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-user-alt"></i></span>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-envelope"></i></span>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="SĐT" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-phone-alt"></i></span>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Tiêu đề" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-file"></i></span>
                </div>

                <textarea id="basic-example">
                    
                   
                  </textarea>
                <script>
                    tinymce.init({
                        selector: 'textarea#basic-example',
                        height: 350,
                        menubar: true,
                        plugins: [
                            'advlist autolink lists link image charmap print preview anchor',
                            'searchreplace visualblocks code fullscreen',
                            'insertdatetime media table paste code help wordcount'
                        ],
                        toolbar: 'undo redo | formatselect | ' +
                            'bold italic backcolor | alignleft aligncenter ' +
                            'alignright alignjustify | bullist numlist outdent indent | ' +
                            'removeformat | help',
                        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                    });
                </script>
                <input type=submit value="Gửi" class="btn btn-danger" style="margin: 10px 0;width:200px">


            </div>
            <div class="col-md-6 col-sm-6">
                <h2 style="text-align: center;">THÔNG TIN LIÊN HỆ</h2>
                <p>Địa chỉ :Đường đua F1,Phú Đô ,Nam Từ Liêm ,Hà Nội</p>
                <p>Hotline:<a href="tel:085.949.8558">085.949.8558</a></p>
                <p>Eamil:<a href="mailto:contact.trianh@gmail.com">contact.trianh@gmail.com</a></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4548478968763!2d105.76620121512946!3d21.014478886006202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453586559bd31%3A0xad8fc1ba92750920!2zMTAgTmfDtSA4IMSQxrDhu51uZyBMw6ogUXVhbmcgxJDhuqFvLCBN4buFIFRyw6wsIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1636463999496!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>


</html>