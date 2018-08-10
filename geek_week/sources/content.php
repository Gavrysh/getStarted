
    <div class="container">
        <header>
            <div class="logo">
                Flat Mate
            </div>
            <div class="center_header">
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
				<p>
				<?php
					$content = "";
					if(isset($_GET['content_type'])){
						$type = (int)$_GET['content_type'];
					
						if($type == 1){
							$content = "<p>Content type number 1</p>";
						}
						else if($type == 2){
							$content = "<h1>Content type number 2</h1>";
						}
						else if($type == 3){
							$content = "<table><tr><td>Content type number 3</td></tr></table>";
						}
						else{
							$content = "<p>No content</p>";
						  }
					}
					else{
						$content = "<p>No content</p>";
					}

				echo $content;
?>
				</p>
                <a href="#">Read More</a>
            </div>
        </header>
        <section class="about_us">
            <div class="center_about_us">
                <?php
				$buttons = [ 1, 2, 3 ];
				/*
				0 => 1,
				1 => 2,
				2 => 3
				*/
				
				/*
				$button1 = "<p><button formaction='index.php' name='content_type' value='1'>Content 1</button></p>";
				$button2 = "<p><button formaction='index.php' name='content_type' value='2'>Content 2</button></p>";
				$button3 = "<p><button formaction='index.php' name='content_type' value='3'>Content 3</button></p>";

				echo "<form method=\"get\">" . $button1 . $button2 . $button3 . "</form>";*/
				
				$result = "<form method=\"get\">";
				for($i = 0; $i < count($buttons); $i++){	
				   $result .= "<p><button formaction='index.php' name='content_type' value='" . $buttons[$i] . "'>Content " . $buttons[$i] . "</button></p>";
				}
				$result .= "</form>";

				echo $result;
				?>

            </div>
            <div class="icons">
                <div class="pencil">
                    <i class="fa fa-pencil fa-3x" aria-hidden="true"></i>
                </div>
                <div class="facebook">
                    <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                </div>
            </div>
        </section>
        <section class="modern">
            <h2>The Modern Era of Web Designing</h2>
            <p>We make wireframe ultra fast,leak proof</p>
            <div class="google">
                <div class="google_left"></div>
                <div class="google_right"></div>
            </div>
        </section>
        <section class="mail">
            <div class="message"></div>
            <form action="receiveform.php" method="post">
                <div class="form_left">
                    <label>Name<sup>*</sup><br>
                    <input type="text" name="name"><br></label>
                    E-Mail<sup>*</sup><br>
                    <input type="email" name="email">
                </div>
                <div class="form_right">
                    Message<sup>*</sup><br>
                    <textarea name="text"></textarea><br>
                    <input type="submit" value="SEND">
                </div>
            </form>
        </section>