@extends('master')
@section('title','Contact')
@section('content')
<div class="page-header d-flex align-items-center">
  <div class="container position-relative">


    <div class="row d-flex justify-content-center">
      <div class="col-lg-6 text-center">
        <h2>Contact</h2>
        <p>Si vous avez des questions sur l'astronomie, la science, ou tout autre sujet, n'hésitez pas à les poser, et
          je ferai de mon mieux pour fournir des informations et des réponses basées sur les connaissances actuelles.
        </p>

      </div>
    </div>
  </div>
</div><!-- End Page Header -->

<!--=======Contact Section======= -->
<sec tion id="contact" class="contact">
  <d iv class="container">

    <div class="row gy-4 justify-content-center">

      <div class="col-lg-3">
        <div class="info-item d-flex">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h4>Localisation:</h4>
            <p>B7E Mario Street, Kioa ville, Mars 001</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3">
        <div class="info-item d-flex">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h4>Couriel:</h4>
            <p>info@balouk.mrs</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3">
        <div class="info-item d-flex">
          <i class="bi bi-phone flex-shrink-0"></i>
          <div>
            <h4>Telephone:</h4>
            <p>+00000125</p>
          </div>
        </div>
      </div><!-- End Info Item -->

    </div>

    <d iv class="row justify-content-center mt-4">


      <div class="col-lg-9">

        @isset($data)
        <!-- si le champ  est vide J'affiche 'VALUE'  -->
        <p>Nom: <strong>{{ optional($data)->nom ?? 'ANONYME' }}</strong></p>
        <p>Couriel: <strong>{{ optional($data)->email ?? 'Couriel REQUIS' }}</strong></p>
        <p>Objet: <strong>{{ optional($data)->subject ?? 'AUCUN OBJET' }}</strong></p>
        <p>Message: <strong>{{ optional($data)->message ?? 'MESSAGE VIDE' }}</strong></p>

        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Couriel</th>
              <th scope="col">Objet</th>
              <th scope="col">Message</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{ optional($data)->nom ?? 'ANONYME' }}</th>
              <td>{{ optional($data)->email ?? 'Couriel REQUIS' }}</td>
              <td>{{ optional($data)->subject ?? 'AUCUN OBJET' }}</td>
              <td>{{ optional($data)->message ?? 'MESSAGE VIDE' }}</td>
            </tr>

          </tbody>
        </table>


        @else
        <form method="post" role="form" class="php-email-form">
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="nom" class="form-control" id="name" placeholder="Your Name">

            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre message a été envoyé, Merci!</div>
          </div>
          <div class="text-center"><button type="submit">Envoyer</button></div>
        </form>

      </div><!-- End Contact Form -->

      </div>

      </div>
      </section><!-- End Contact Section -->

      </main><!-- End #main -->
      @endisset

      @section('js_form')
      <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
      @endsection

      @endsection