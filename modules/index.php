<main class="overflow-hidden">
    <div class="container text-center" style="margin-top: -5rem;">
        <img src="assets/images/logo.png" style="width: 20rem;" alt="">
    </div>
    <div class="container">
        <div class="mainInner">
            <h1>¿Qué te parecería nuestra nueva ubicación?</h1>
            <div class="question">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d6173.966024096582!2d-109.7136072205228!3d23.058182512959505!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDAzJzI1LjAiTiAxMDnCsDQyJzM5LjgiVw!5e0!3m2!1sen!2smx!4v1704492794992!5m2!1sen!2smx"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <form action="php/contact.php" method="post">
            <fieldset>
                <div class="d-flex flex-wrap align-items-center justify-content-center">
                    <div class="inputField">
                        <div class="animate radio">
                            <input type="radio" name="encuesta" value="Me gusta" />
                            <img src="assets/images/emojis/cool.png" alt="" />
                            <!-- <span class="totalvote">20k</span> -->
                        </div>
                        <label>Me gusta</label>
                    </div>
                    <div class="inputField">
                        <div class="animate delay-100 radio">
                            <input type="radio" name="encuesta" value="Suena bien" />
                            <img src="assets/images/emojis/happy.png" alt="" />
                            <!-- <span class="totalvote">10k</span> -->
                        </div>
                        <label>Suena bien</label>
                    </div>
                    <div class="inputField">
                        <div class="animate delay-200 radio">
                            <input type="radio" name="encuesta" value="No me gusta" />
                            <img src="assets/images/emojis/sad.png" alt="" />
                            <!-- <span class="totalvote">50k</span> -->
                        </div>
                        <label>No me gusta</label>
                    </div>
                    <div class="inputField">
                        <div class="animate delay-300 radio">
                            <input type="radio" name="encuesta" value="Está lejos" />
                            <img src="assets/images/emojis/shock.png" alt="" />
                            <!-- <span class="totalvote">60k</span> -->
                        </div>
                        <label>Está lejos</label>
                    </div>
                </div>
            </fieldset>
            <div class="row justify-content-center">
                <div class="col-6 col-md-8 mt-5">
                    <button type="submit" name="template-wedding-submit" style="background-color: #017394;" class="btn btn-secondary w-100 btn-lg">
                        Enviar respuesta
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>