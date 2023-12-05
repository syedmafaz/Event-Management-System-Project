<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What's On</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/s.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Symposium</h1><!--event content title-->
                            <p class="definition"><!--event content definition-->
                            a meeting or conference for the discussion of some subject, especially a meeting at which several speakers talk on or discuss a topic before an audience.a collection of opinions expressed or articles contributed by several persons on a given subject or topic
                            </p>
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            </div>
            </div>
<br>
            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/c.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Culturals </h1><!--event content title-->
                            <p class="definition"><!--event content definition-->
                            It's the combination of language, behavior, values,and philosophy or outlook that are part of a college education. It's the "rules," usually unspoken, that college students learn to fit into a college. College cultures differ from campus to campus, but there are some similarities.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            <br>
            <div class="row"><!--event content-->
                  <section>
                      <div class="container">
                          <div class="col-md-5"><!--image holder with 5 grid column-->
                              <img src="images/sp.jpg" class="img-responsive">
                          </div>
                          <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                              <h1 class="title">Sports Day</h1><!--event content title-->
                              <p class="definition"><!--event content definition-->
                              a day with great preparation and full of joy. The day which gives everyone a great pleasure.
                              </p>
                              <hr class="customline2"><!--css modified horizontal line-->
                              <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                              View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                              </button>
                          </div><!--subcontent div-->
                      </div><!--container div-->
                  </section>
              </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            </div>
            </div>
<br>
            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/tl.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Talentia</h1><!--event content title-->
                            <p class="definition"><!--event content definition-->
                            Talentia is an annual cultural festival of VES College of Arts, Science & Commerce,. The primary objective therefore is to provide the right platform for students to exhibit their talents in a variety of cultural events that fall under the Categories of Performing Arts, Fine arts & Literary arts.                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
