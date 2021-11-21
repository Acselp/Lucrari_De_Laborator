<!DOCTYPE html>
<html lang="ro">
  
  <?php
  include("./head.php");
  ?>

  <body>
    
    <?php
      $activePage = "contact";
      include("./nav.php");
    ?>

    <section class="main_section heigth-100vh" id="contactPage">
      <div class="container">
        <div id="content">
          <h1 style="text-align: center">Contacteazăne</h1>
          <br/>
          <br/>
          <div class="table">
            <br/>
            <br/>
            <br/>

              <form class="contact_form" id="contactForm">
                <input type="text" name="contactFname" placeholder="Prenumele"/>
                <input type="text" name="contactLname" placeholder="Numele"/>
                <input type="text" name="contactEmail" placeholder="Emailul tau"/>
                <textarea name="contactSubject" placeholder="Scrie mesajul tau" style="height: 200px"></textarea>
                <button type="submit" id="contactBtn">Submit</button>
              </form>
            
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
