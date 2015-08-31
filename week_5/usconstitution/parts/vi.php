<!--make a variable called Article-->
<?php $article = "Article VI";?>

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

    <body id="body6">
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
                        <p>Clause 1: All Debts contracted and Engagements entered into, before the Adoption of this Constitution, shall be as valid against the United States under this Constitution, as under the Confederation.</p>
                        <p>Clause 2: This Constitution, and the Laws of the United States which shall be made in Pursuance thereof; and all Treaties made, or which shall be made, under the Authority of the United States, shall be the supreme Law of the Land; and the Judges in every State shall be bound thereby, any Thing in the Constitution or Laws of any State to the Contrary notwithstanding.</p>
                        <p>Clause 3: The Senators and Representatives before mentioned, and the Members of the several State Legislatures, and all executive and judicial Officers, both of the United States and of the several States, shall be bound by Oath or Affirmation, to support this Constitution; but no religious Test shall ever be required as a Qualification to any Office or public Trust under the United States.</p>
                    </main>
                </div>
            </div>

            <div class="row">
                <div class="twelve columns">
                    <div class="twelve columns">
                        <?php include("includes/footer.php"); ?>
                    </div>
                </div>
            </div>

        </div>
    </body>

    </html>
