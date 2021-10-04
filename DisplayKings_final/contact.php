<?php include("header.php")?>


<div class="container mt-5 pt-3">
    <div class="row">
        <div class="col-md-6 mb-5 pb-3">
            <div class="page-header">
                <h2>Contact Us</h2>
            </div>
            <form><br>
                <div class="form-group">
                    <label for="inputName">Name and Surname</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Your First and Last Name">
                </div><br>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="example@gmail.com">
                </div><br>
                <div class="form-group">
                    <label for="inputTel">Phone Number</label>
                    <input type="tel" class="form-control" id="inputTel" placeholder="060 000 00 00">
                </div><br>
                <div class="form-group">
                    <label for="inputSubject">Subject</label>
                    <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                </div><br>
                <div class="form-group">
                    <label for="inputText">Your message</label>
                    <textarea class="form-control" placeholder="Your message/complaint/compliment" id="inputText" cols="30" rows="5"></textarea>
                </div><br>
                <button type="submit" class="btn btn-danger btn-lg btn-block">Send</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="page-header">
                <h2>Where are we?</h2>
            </div>
            <p><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Knez Mihajlova 15a </p>
            <p><i class="fas fa-phone" aria-hidden="true"></i> 060 501 78 27</p>
            <p><i class="fas fa-envelope" aria-hidden="true"></i> nikola21318@its.edu.rs</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1682.8411070758564!2d20.45608379744348!3d44.81769154616817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6e056c9bb357%3A0x58b1f0ecae30d7a1!2z0JrQvdC10LfQsCDQnNC40YXQsNC40LvQsCwg0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1631209137008!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>



<?php include("footer.php")?>