<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <section id="team">
        <div class="container">
            <h1 style="text-align: center">Welcome Grand Oracle Molly</h1>
            <hr>
            <h6 class="section-title mb-5 text-center">Blackmail Database</h6>
            <h6 class="section-title mb-5 text-center">UT{BL4CK_M4I1}</h6>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/TobyToastProfilePicture.png">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Toasted Clown</h6>
                            <h5 class="card-title">Toby Toast</h5>
                            <p>Was recently hacked by one of Jex's associates. Puts on a big show, but still doesn't know how to tell Betty Butter how he feels about her.</p>
                            <p>So long as he pays his debts, we won't tell Betty the truth and Jerry that he once went out with his ex-wife. (Which is a lie of course)</p>
                            <i>Debt owed: <b>$300K</b></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/BettyButterProfilePicture.png">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">THAT ONE SKANK</h6>
                            <h5 class="card-title">Betty Butter</h5>
                            <p>I JUST KNOW SHE'S JEALOUS OF WHAT I HAVE WITH CHAD!! She keeps denying it, but I know that Betty wants a piece of the action I'll get when I tell Chad how I feel!</p>
                            <p>Somehow, she doesn't owe anything to me. But I'll be happy to make up lies about her to ruin Toby's perception of her!</p>
                            <i>Debt owed: <b>$0</b></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/JerryJamProfilePicture.png">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Sad, lonely loser</h6>
                            <h5 class="card-title">Jerry Jam</h5>
                            <p>Thinks he's so cool because he can make some killer jam! While it is pretty good, doesn't mean that I can't manipulate him!</p>
                            <p>He's been a real compulsive spender so I've had Bob keep tabs on him and continue loaning 'just a little more' each time!</p>
                            <i>Debt owed: <b>$900K</b></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Thinks AWS is Stupid. Not Wrong.</h6>
                            <h5 class="card-title">Orange Brutus</h5>
                            <p>Still trying to get his cloud startup off the ground. Of course, Chad is putting faith in him to help inact the 'master plan' with it.</p>
                            <p>Like Toby, talks a big game. But I know that he pays Citrus Cicero next to nothing! Happy to turn him into the feds for that one!</p>
                            <i>Debt owed: <b>$2M</b></i>
                            </div>
                        </div>
                    </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">As Dumb as He is Innocent</h6>
                            <h5 class="card-title">Citrus Cicero</h5>
                            <p>One of the dumbest folks I've seen in my criminal career. Last week, I literaly threatened to burn down the local farmers market (where he gets his fruit) and he broke down crying like a little child!</p>
                            <p>Needless to say, I still burned it down after he got hacked. Didn't need anything out of him, just figured why not? Kid could taste the real world for once in his life.</p>
                            <i>Debt owed: <b>$3.01 (bought him a lemon once)</b></i>
                            </div>
                        </div>
                    </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/JexMaskBlueNoise.png">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Hacker with a Stupid Hat</h6>
                            <h5 class="card-title">Jex</h5>
                            <p>Oh I'm SoOoOoOO SCAARED! What a loser, can't even use a greenscreen correctly!</p>
                            <p>I know he tried to get ahold of my ssh password <i>ChadCherrysFutureWife</i> through social engineering but I outsmarted him and his hacker friends once again by hanging up the phone!</p>
                            <p>Good thing they won't ever figure it out!
                            <i>Debt owed: <b>Why would he borrow money from us??</b></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <a style="margin-right: 50%; margin-left: 50%; padding: 20px;" href="logout.php">Logout</a>
    
</body>
</html>
