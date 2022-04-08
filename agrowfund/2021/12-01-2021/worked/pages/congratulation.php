<!doctype html>
<html>

<head>
    <title>Congratulation! — Agrow Fund</title>
    <?php require_once 'includes/site-master.php'; ?>
</head>

<body id="home-page">
    <?php require_once 'includes/header.php'; ?>
    <main congrats>


        <section id="congrats">
            <div class="contain text-center">
                <div class="content" data-aos="fade" data-aos-duration="1000">
                    <h1 class="bold">Félicitations !</h1>
                    <p>Félicitations pour le parainage que vous venez de réaliser. Les informations relatives à votre transaction vous ont été envoyées par e-mail. Si vous n'avez pas reçu d'e-mail, vérifiez les courriers indésirables.</p>
                    <div class="bTn formBtn">
                        <a href="?" class="webBtn simpleBtn borderBtn beforeBtn icoBtn"><img src="images/chev-left.svg" alt=""> Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- congrats -->


    </main>
    <script type="text/javascript">
        $(window).on("load", function() {
            $("#congrats .content").delay(1000).addClass("leafy");
        });
    </script>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>