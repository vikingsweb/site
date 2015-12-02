
<!-- Contact Section -->
<div id="contact-section" class="text-center">
  <div class="container">
    <div class="section-title wow fadeInDown">
      <h2><strong>CONTATO VIKINGS</strong></h2>
      <hr>
      <p></p>
    </div>
    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
        <p>321 Awesome Street<br>
          Maceió, AL </p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>contato@vikingsweb.com.br</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p> (82) 9 9999 - 0099</p>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="400ms">
	<h3>ENVIE SUA MENSAGEM</h3>
      {!! Form::open(array('route' => 'contatos')) !!}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="Nome" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" name="message" class="form-control" rows="4" placeholder="Mensagem" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Enviar</button>
      {!! Form::close() !!}
      <div class="social">
        <ul>
          <li><a href="https://www.facebook.com/Vikings-Solu%C3%A7%C3%B5es-Web-963893863697983/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
          <li><a href="https://github.com/vikingsweb" target="_blank"><i class="fa fa-github"></i></a></li>
           <!-- <li><a href="https://instagram.com/vikingsweb" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
        </ul>
      </div>
    </div>
  </div>
</div>