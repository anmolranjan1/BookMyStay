<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMyStay - Contact</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio vero architecto, <br> nulla unde illum cum officia cumque excepturi beatae ipsum.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113579.7697542569!2d77.98001294999999!3d27.1761745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39740d857c2f41d9%3A0x784aef38a9523b42!2sAgra%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1724983799050!5m2!1sen!2sin" height="320px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/T1YM8d4fJsoczstd6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> XYZ, Agra, Uttar Pradesh
                    </a>
                    <h5 class="mt-4">Call Us</h5>
                    <a href="tel: +1234567890" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        +1234567890
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: bookmystay@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i>
                        bookmystay@gmail.com
                    </a>

                    <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500; ">Name</Label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500; ">Email</Label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500; ">Subject</Label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500; ">Name</Label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>

</body>
</html>