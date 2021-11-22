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

    <section class="main_section heigth-100vh">
      <div class="container">
        <div id="content">
          <h1 style="text-align: center">Contacteazăne</h1>
          <br/>
          <br/>
          <div class="table">
            <br/>
            <br/>
            <br/>

              <form action="./contactAction.php" method="POST" class="contact_form" name="contactForm">
                <!-- <label for="contactFname">FirstName</label> -->
                <input
                  type="text"
                  name="contactFname"
                  placeholder="Prenumele"
                />

                <!-- <label for="contactLname">LastName</label> -->
                <input
                  type="text"
                  name="contactLname"
                  placeholder="Numele"
                />

                <!-- <label for="contactEmail">Email</label> -->
                <input
                  type="text"
                  name="contactEmail"
                  placeholder="Emailul tau"
                />

                <!-- <label for="contactSubject">Subject</label> -->
                <textarea
                  name="contactSubject"
                  placeholder="Scrie mesajul tau"
                  style="height: 200px"
                ></textarea>

                <input type="submit" value="Submit" />
              </form>
            
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
