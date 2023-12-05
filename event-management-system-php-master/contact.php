<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require_once 'classes/Connection.php';
        require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php';
        //check for submit
        if(filter_has_var(INPUT_POST,'submit')){
          $title = $_POST['title'];
          $message = $_POST['message'];
          //check required fields
          if(!empty($message) && !empty($title)){
              $qry = "insert into contact(title,message) values('$title','$message')";
              mysqli_query($conn,$qry);
              echo "<script>window.alert('Your message has been sent.!');</script>";
          }else{
            echo "<script>window.alert('Please fill all the fields!');</script>";
          }
        }
        ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> BATCH 15</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: rushivigneshwar@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Instagram: <a href=" https://instagram.com/rs__rishi__jack?igshid=YmMyMTA2M2Y= " target="_blank"> https://instagram.com/rs__rishi__jack?igshid=YmMyMTA2M2Y= </a><br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 7402026100 <br>
            
                        <span class="glyphicon glyphicon-envelope"></span> Email: mafazsyed35@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Instagram: <a href="https://instagram.com/__s_y_e_d__m_a_f_a_z__?igshid=YzAyZWRlMzg=" target="_blank">https://instagram.com/__s_y_e_d__m_a_f_a_z__?igshid=YzAyZWRlMzg=</a><br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 9789451865 <br>
                        <span class="glyphicon glyphicon-envelope"></span> Email: tarunadhit22@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Instagram: <a href="https://instagram.com/_.t.a.r.u.n__?igshid=YzAyZWRlMzg=" target="_blank">https://instagram.com/_.t.a.r.u.n__?igshid=YzAyZWRlMzg=</a><br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 8248581348 <br>
                        <span class="glyphicon glyphicon-envelope"></span> Email: svagheesan2003@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Instagram: <a href="https://instagram.com/_v_a_g_h_e_e_s_a_n_?igshid=YzAyZWRlMzg=" target="_blank">https://instagram.com/_v_a_g_h_e_e_s_a_n_?igshid=YzAyZWRlMzg=</a><br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 9345660173 <br>
                    </p>
                </div>
                <div class="col-md-6">
                    <form method="post">
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" name="message" class="form-control"></textarea>
                        </div>
                        <button type="submit"  name="submit" class="btn btn-default pull-right">Send</button>
                    </form>
                </div>
            </div>


        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
