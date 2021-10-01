<!DOCTYPE html>
<html>
    <head>
        <title>Paws Heaven</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(function(){ 
                $("#header").load("common/header.php");
                $("#footer").load("common/footer.php");
            });
        </script>
        <style>
            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }
            
            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }
            
            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }
            
            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 16px 12px;
                border: 1px solid #ccc;
                border-top: none;
                text-align: left;
            }
            #more {display: none;}
        </style>
    </head>
    <body>
    <div id="header"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <img src="image/pet-advice.jpg" width="900px">
    <br>
    <br>
    <div class="a-divider"></div>
    <div class="content-area" style="margin-top: -300px; padding: 250px">
        <div class="tab">
        <button class="tablinks" onclick="petAdvice(event, 'Dogs')" id="defaultOpen">Dogs</button>
        <button class="tablinks" onclick="petAdvice(event, 'Cats')">Cats</button>
        </div>
        <div id="Dogs" class="tabcontent">
        <h3 class="font-sora fs-2 fw-bold">Tips For Every First-Time Dog Owner</h3>
        <p class="font-sora fs-2 fw-bold">February is “Responsible Pet Owner” month, and that got us thinking: how do we view responsible pet ownership?
        While there isn’t an exact definition for it the America Kennel Club gives each of us a great starting point for how we view pet ownership: 
        “Owning a dog is not just a privilege-it's a responsibility.” Whether you own a dog or a cat one thing is for sure, owning that pet comes with great responsibility.</p>
        <p class="font-sora fs-2 fw-bold">Pets are not accessories that can be thrown aside and forgotten. Pets are companions that need love, care and devotion.
        You can find many lists that outline very specific ways to be a responsible pet owner, like the American Kennel Club’s list for dog owners, 
        but we’ve compiled a short list for you of the important rules we think all pet owners must live by.</p>
        </p>
        <br>
        <p class="font-sora fs-2 fw-bold">Make him part of the family.</p>
        <p class="font-sora fs-2 fw-bold">Pets, especially dogs, need companionship. They are traditionally pack creatures and need the warmth and love that comes with living indoors with their family.</p>
        </p>
        <br>
        <p class="font-sora fs-2 fw-bold">Pet proof your house.</p>
        <p class="font-sora fs-2 fw-bold">To keep your pet healthy you should research what household products and foods can harm your pet. Make sure these are kept in secure locations so your pet cannot get into them.</p>
        <br>
        <p class="font-sora fs-2 fw-bold">Care for your pet.</p>
        <p class="font-sora fs-2 fw-bold">Regular visits to the vet and groomer are absolutely necessary. Insuring your pet may also be important to your pet’s health. Emergencies can happen at any time. 
        Ensure your pet gets the help he needs no matter the cost with pet insurance.</p>
        <br>
        <p class="font-sora fs-2 fw-bold">Spay and neuter your pet. </p>
        <p class="font-sora fs-2 fw-bold">Studies have shown that pets that are spayed and neutered live healthier, longer lives. Plus, spayed a neutered pets are less likely to develop behavior problems.</p>
        <br>
        <p class="font-sora fs-2 fw-bold">Always keep an ID tag on your pet. </p>
        <p class="font-sora fs-2 fw-bold">Consider getting your pet microchipped as well to help identify him if he is lost or stolen.</p>
        <br>
        <p class="font-sora fs-2 fw-bold">Train your pet to understand obedience. </p>
        <p class="font-sora fs-2 fw-bold">Dogs should at least understand basic direction like “sit” and “stay.” In an emergency situation these cues could save your pet’s life.</p>
        <br>
        <p class="font-sora fs-2 fw-bold">Give him the exercise he needs. </p>
        <p class="font-sora fs-2 fw-bold">All pets need regular exercise to stay fit and to release their energy. Without it, your pet will begin to act out. 
        Young pets that do not get enough exercise are more likely to develop negative behavioral issues that lead many to give up their pet.</p>
        <br>
        <p class="font-sora fs-2 fw-bold">Feed him properly. </p>
        <p class="font-sora fs-2 fw-bold">Ask your vet what type of food and how much is right for you pet. Keeping your pet on a regular, portion controlled diet will help with weight management and prevent weight related health problems.</p>
        <br>
        <p class="font-sora fs-2 fw-bold">Socialize your pet. </p>
        <p class="font-sora fs-2 fw-bold">Meeting new people and other pets improves the confidence of your pet. Plus, having extra playmates will help relieve some of your pet’s built-up energy.</p>
        <br>
        <p class="font-sora fs-2 fw-bold">Love your pet. </p>
        <p class="font-sora fs-2 fw-bold">You are your pet’s favorite thing in the whole world. He craves your love, attention and care. So show him the love and devotion he shows you!</p>
        <br><br>
        <p class="font-sora fs-2 fw-bold">Written By: PetSafe Guest, N.d.</p>
        </div>
        <div id="Cats" class="tabcontent">
        <h3 class="font-sora fs-2 fw-bold">Tips For Every First-Time Cat Owner</h3>
        <p lass="font-sora fs-2 fw-bold"> When you're a new cat owner, you only want the best for your fur baby. 
        How can you make your home as welcoming as possible when everything's so new to both you and your cat? 
        What can you do to help your kitty feel safe, healthy, and happy? Every first-time cat owner checklist should include cat scratchers, 
        extra litter boxes, and lots of playtime. Here are 10 great tips that all new cat owners should know.</p><br>
        <p lass="font-sora fs-2 fw-bold">1. Help Your Cat Feel Safe and Secure</p>
        <p lass="font-sora fs-2 fw-bold">Your cat will be a little shy at first, so try to make your home as welcoming as possible. 
        It's perfectly normal if your cat feels nervous and hides from you. Cats don't generally like change, and she may need time to get 
        used to all the new smells and sounds in your home.You can help by giving your cat her own room or space where she can retreat to and feel safe. 
        Put a comfy bed in there so she can snuggle down. Some cats might prefer an enclosed bed they can hide away in when they feel overwhelmed. 
        Also, place a couple of catnip toys and a soft blanket inside.Set up Comfort Zone Calming Diffusers around the house, ideally plugging one into an outlet in 
        each room where your cat will spend the most time. These diffusers release a drug-free, odorless vapor that mimics the pheromones a cat releases to indicate an 
        area is safe and secure. It's kind of like sending a signal in your cat's own language to help improve her mental well being. When your kitty feels safer, 
        she's less likely to have stress responses like scratching and spraying. For households with more than one cat, try the Comfort Zone Multi-Cat Diffuser. 
        You can also choose a Comfort Zone Calming Collar that has a BreakAway safety feature.</p><br>
        <p lass="font-sora fs-2 fw-bold">2. Visit the Vet</p>
        <p lass="font-sora fs-2 fw-bold">Find your cat a great veterinarian, schedule a checkup, and make sure his vaccines are up-to-date. Consider getting him a 
        microchip too. Keep the microchip number and a photo of your new cat on your phone in case he ever escapes. You'll be glad you did.</p><br>
        <p lass="font-sora fs-2 fw-bold">3. Introduce Your Cat to Other Pets Slowly</p>
        When you bring home a new cat, slowly introduce her to your other pets, such as your dog. Keep your new cat in a separate room and feed your pets on 
        either side of a closed door. Put each pet's blanket in the other pet's room and swap rooms sometimes so they get used to each other's smells. Eventually, 
        graduate to feeding them on either side of a closed gate and then try supervised visits. Watch their body language each step of the way so you can separate 
        them if needed.</p><br>
        <p lass="font-sora fs-2 fw-bold">4. Try Different Kinds of Litter and Boxes</p>
        <p lass="font-sora fs-2 fw-bold">It's typically a good idea to have one litter box per cat, plus an extra box.1 Cats can get a little territorial about their 
        litter boxes, so make sure your new cat has enough space.You might also want to try different styles of litter and boxes. Some cats prefer softer litter, 
        while long-haired cats might prefer crystal litter that doesn't stick to their fur. Cats may like covered boxes, uncovered boxes, boxes with low edges,
        or other varieties. Keep the litter boxes away from heavy foot traffic or loud noises. Remember to spot clean your cat's litter every day and do a deeper clean once a week.If your new kitty 
        isn't burying her poop, try these steps to help encourage that behavior.</p><br>
        <p lass="font-sora fs-2 fw-bold">5. Use High-Quality Food and Keep Your Cat Away from Anything Dangerous</p>
        <p lass="font-sora fs-2 fw-bold">Cats thrive on high-quality food. AvoDerm's wet and dry food for cats is a great place to start. You'll find a lot of flavors to choose from.
        <p lass="font-sora fs-2 fw-bold">Be sure to avoid human foods that are toxic to cats, and only keep house plants that are safe for your kitty. 
        Cats are really good at getting into everything, so lock up anything that might harm your fur baby, like cleaning products.</p><br>
        <p lass="font-sora fs-2 fw-bold">6. Get Creative with Food and Water Bowls</p>
        <p lass="font-sora fs-2 fw-bold">If you have dogs, you need to know that they sometimes like to get into the cat's food. 
        Consider using a food bowl for your cat that attaches to a window. You can keep it up high, where your dog can't reach.Cats tend to drink less water than they 
        actually need. Set up water bowls in different places in your home and consider using filtered bowls. You might also want to try a water fountain bowl since 
        some cats prefer to drink running water. It's more oxygenated, so it tastes better to them, and they can hear it running which lets them know it's fresher.</p><br>
        <p lass="font-sora fs-2 fw-bold">7. Create an Enticing Indoor Environment</p>
        <p lass="font-sora fs-2 fw-bold">Although cats tend to be safer when they're indoors, they can also get bored. Create an enticing indoor environment for your new cat. 
        Set up condos and cat trees so your kitty can climb. Open the shades and set up window perches to give your cat a little "cat TV" to watch outside. 
        Put a bird feeder outside the window for extra fun. Get lots of toys (some with catnip) for your kitty to play with, including interactive toys for when you're not 
        around.</p><br>
        <p lass="font-sora fs-2 fw-bold">8. Set Up Cat Scratchers</p>
        <p lass="font-sora fs-2 fw-bold">Cats need to scratch to remove the dead outer layers of their claws, to stretch their bodies, and to help mark their territory.
        Scratching can also be a way of showing happiness or easing stress. If you don't provide scratchers, your cat will turn to your carpet or your furniture.It's 
        better to provide too many cat scratchers than not enough. Put up scratchers in different rooms where your cat likes to hang out. 
        Consider trying both vertical and horizontal scratchers, since some cats will only use one type.</p><br>
        <p lass="font-sora fs-2 fw-bold">9. Enjoy a Little Outdoor Fun</p>
        <p lass="font-sora fs-2 fw-bold">Even if you're not comfortable letting your cat roam outside, you can still have safe outdoor adventures together. Set up an 
        enclosed outdoor space for your kitty to play in, like a catio or a cat tent that's staked to the ground. You can also put your cat on a secure harness and take 
        him outside for a short walk in the backyard on a leash.Your kitty will need to get used to the harness indoors first. Some will "belly crawl" on the ground for a 
        bit before they feel comfortable with the harness, and some might not move at all for a few minutes while they get used to the feel of it. But most will learn to love it with time, 
        especially once they realize that putting on the harness means they're going outside.</p><br>
        <p lass="font-sora fs-2 fw-bold">10. Play with Your Cat</p>
        <p lass="font-sora fs-2 fw-bold">Spend lots of time playing with your new cat. This keeps her brain engaged and helps her develop good socialization skills. 
        Get her to chase a feather wand around the house, or put a treat in your hand and encourage your cat to chase you up and down the hall. Clicker training is another 
        great way to build your bond with your cat and keep her mind challenged.</p> 
        <br><br>
        <p class="font-sora fs-2 fw-bold">Written By: Stephanie Dube Dwilson, N.d.</p>
        </div>
        <script>
            function petAdvice(event, pettype) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(pettype).style.display = "block";
            event.currentTarget.className += " active";
            }
            document.getElementById("defaultOpen").click();

            function readmore() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more"; 
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less"; 
                    moreText.style.display = "inline";
                }
            }
        </script>
    </div>
    </body>
    <div id="footer" style="margin-top: -250px;"></div>
</html>
