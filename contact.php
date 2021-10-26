<!DOCTYPE html>
<html lang="ro">
  
  <?php
  include("./head.php");
  ?>

  <body>
    
    <?php
      include("./nav.php");
    ?>

    <section class="main_section heigth-100vh">
      <div class="container">
        <div id="content">
          <h1 style="text-align: center">Contacteazăne</h1>
          <br />
          <br />
          <div class="table">
            <br />
            <br />
            <br />

              <form class="contact_form">
                <label for="fname">FirstName</label>
                <input
                  type="text"
                  id="fname"
                  name="firstname"
                  placeholder="Prenumele"
                />

                <label for="lname">LastName</label>
                <input
                  type="text"
                  id="lname"
                  name="lastname"
                  placeholder="Numele"
                />

                <label for="email">Email</label>
                <input
                  type="text"
                  id="email"
                  name="email"
                  placeholder="Emailul tau"
                />

                <label for="subject">Subject</label>
                <textarea
                  id="subject"
                  name="subject"
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
