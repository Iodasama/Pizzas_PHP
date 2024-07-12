<?php require_once ('../Config/Config.php'); /*lignes de debug*/
?>
<?php require_once ('../controller/contactController.php'); /*lignes de debug*/
?>
<?php  require_once ('../Partials/header.php');?>     

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<!-- pas besoin de echo en simple link html puisque balise php fermée-->


<body>
        <main>
        <form action="" method="post" class="form-examples"> 
        <!-- Pensez a toujours utiliser la method POST pour la securite  -->
            <div class="form-example">
                <label for="name">Enter your name: </label>
                <input type="text" name="name" id="name" required />
                <!-- required oblige a remplir  -->
            </div>
            <div class="form-example"></div>
                <textarea id="message" name="message" rows="4" cols="50">
            Write your message here 
                </textarea>
            </div>
            <div class="form-example">
                <label for="email">Enter your email: </label>
                <input type="email" name="email" id="email" required />
            </div>
            <div class="form-example">
                <input type="submit" value="Subscribe!" />
            </div>
  


        </form>
        <?php require_once ('../Partials/sidebar.php'); ?>
        
       

            <?php if (isset ($_REQUEST['name'])) {?>
                <?php if(checkIfFormIsValid($_REQUEST)){?> 
                    
                    <p>Thanks <?php echo($_REQUEST["name"]);?> You successfully sent a message !!! <br> We'll answer and get back to you asap !! 谢谢你的合作 ！！
                    </p>

                <?php } else { ?>

                <p> Data are not correct </p>

                <?php }?>

            <?php } ?>
           
            <!-- icon test -->
        </main>
       
        <?php  require_once ('../Partials/footer.php');?>  

        <!-- <i class="fa-solid fa-torii-gate"></i>       -->
</body>


<!-- if (isset($_REQUEST["message"]) && trim( ($_REQUEST["message"])) >0 && trim( ($_REQUEST["name"])) >0  ) -->

<!-- <form action="">
            <label>Name</label>
                <input type="text" name="name"/> 
                <input type="submit" value="Submit" /><br>
            <label for="message">Message</label><br>
            
            <label for="email">Enter your email as follow please .com:<br></label>
            <input type="email" id="email" pattern=".+@example\.com" size="30" required />
            </form> -->



            <?php 
            // function checkIfFormIsValid($request) {
            //     if ( 
            //         isset($request['lastname']) &&

            //         !empty($request['lastname']) && 
            //         !empty($request['email']) && 
            //         !empty($request['message']) &&

            //         pregmatch("/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $request['email'])

            //     ) {
            //         return true;
            //     } else {
            //         return false;
            //     }
            // }

            // ?>
