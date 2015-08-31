<!--make a variable called Article-->
<?php $article = "Article V";?>


    <!DOCTYPE html>
    <html>

    <head>
        <title>The United States Constitution:
            <?php echo ($article); ?>
        </title>
        <meta charset="utf-8" />
        <meta name=viewport content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
        <link rel="stylesheet" href="css/constitution.css" />
    </head>

    <body id="body5">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <?php include("includes/header.php"); ?>
                </div>
            </div>
            <div class="row">
                <div class="three columns">
                    <?php include("includes/navigation.php"); ?>
                </div>
                <div class="nine columns">
                    <main role="main">
                        <h2><?php echo ($article); ?></h2>
                        <p>The Congress, whenever two thirds of both Houses shall deem it necessary, shall propose Amendments to this Constitution, or, on the Application of the Legislatures of two thirds of the several States, shall call a Convention for proposing Amendments, which, in either Case, shall be valid to all Intents and Purposes, as Part of this Constitution, when ratified by the Legislatures of three fourths of the several States, or by Conventions in three fourths thereof, as the one or the other Mode of Ratification may be proposed by the Congress; Provided that no Amendment which may be made prior to the Year One thousand eight hundred and eight shall in any Manner affect the first and fourth Clauses in the Ninth Section of the first Article; and that no State, without its Consent, shall be deprived of its equal Suffrage in the Senate.</p>
                    </main>
                </div>
            </div>

            <div class="row">
                <div class="twelve columns">
                    <?php include("includes/footer.php"); ?>
                </div>
            </div>

        </div>
    </body>

    </html>
