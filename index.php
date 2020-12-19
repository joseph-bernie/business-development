<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/forms.css" rel="stylesheet">
	<script src="javascript.js" defer></script>
	 <!--bottom 4 for sweetalert2-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src="sweetalert2.js"></script>
	<link href="css/sweetalert2.scss" rel="stylesheet" type="text/scss">
	<script src="formsubmit.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>PHP: Hypertext Preprocessor</title>
	<!--favicon-->
<link rel="shortcut icon" href="images/jm logo.JPG" type="image/x-icon"/>
</head>
	
<body>
	<header>
	<ul>
		<div class="logo">
	<img height="48px" src="MSU Honor Roll.png" alt="Logo">
		</div>

			<ul>&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; 
			&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; <li><a href="home.html"><font size="5">Home</font></a></li>
				<li><a href="css.html"><font size="5">CSS</font></a></li>
				<li><a href="js.html"><font size="5">JS</font></a></li>
				<li><a href="index.php"><font size="5">PHP</font></a></li>
				<li><a href="extensible.xml"><font size="5">XML</font></a></li>
				
				</ul>
			
</header>
			<br />
	          <br />
		
		<center><img src="images/hear-from-u.png" alt="we what to hear from you image" height="140" width="240"></center>
	
	<div id="script">


		<h1>PHP - Web Form</h1>
		<section>
	</div>
	<p>After learning how to create web forms in HTML, CSS and JS, I became deternmined to learn how to make the submission 
		button send the data to my email. After relentless research I was able to write a successful PHP script. PHP is a 
		server side language that runs on the server. 
		When the user clicks the submit button, the contactform.php is called using the action attribute. Then the values are 
		submitted via HTTP PHP super global array variable $_POST. </p>
</section>

		<section>
			
			<form class="contact-form" action="contactform.php" method="post">
				
				<fieldset id="expInfo">
			
			    <div class="formRow">
				   <label for "describe">How would you describe this website in one or two sentences?</label>
				    <input type="text" name="subject" placeholder="">
					</div>
					<br />
			
				<!--Range slider-->
				<div class="formRow">
					<label for="rangeBox">Rate the overall website<br />(0=poor; 10=great)</label> 0
					<input name="serviceRate" id="rangeBox" type="range" value="5" step="1" min="0" max="10"/> 10
				</div>
					<br />

	<!--text area control box-->
				<label for="commBox">What do you like about this site?</label>
				<textarea name="message" id="commBox"></textarea>
					<br />
                    <br />
	<!--text area control box-->
				<label for="commBox">What don't you like about this site?</label>
				<textarea name="msg" id="commBox"></textarea>
                     <br />
                    <br />
	<!--text area control box-->
				<label for="commBox">What can we do to make this site better?<br>
					Or what don't we have that you like to see on this site?</label>
				<textarea name="comment" id="commBox"></textarea>
			 </fieldset>


			<fieldset id="expInfo">
				<div class="formRow">
                  <label for="read">How often do you spend reading?</label>
					<input name="readTime" id="read" type="text" list="readTime"/>
					<datalist id="readTime">
						<option value="Seldom"/>
						<option value="Under 1 hour daily"/>
						<option value="Daily 1 hour or more"/>
						<option value="Daily 2 hours or more"/>
						<option value="Weekly about 4 hours"/>
						<option value="Weekly more than 4 hours"/>
						<option value="Weekly more than 8 hours"/>
						
					</datalist>
				</div>
				<br />

				<!--dropdown list-->
				<div class="formRow">
					<label for="order">Where did you hear about us?</label>
					<!--label for dropdown list-->
					<select name="orderType" id="order">
						<!--orderype is field name associated with selection list, id=selection list order-->
						<option value="direct">Direct</option>
						<option value="social">Social</option>
						<option value="search engine" selected>Search Engine</option>
						<!--selected= default-->
						<option value="referral">Referral</option>
					</select>
				</div>
				<br/>

				<!--radio buttons-->
				<div class="formRow">
					<label>Have you purchased any of our downloads</label> &emsp;&emsp;

					<fieldset class="optGroup">
						<label for="fYes">Yes</label>
						<input name="sFriend" id="fYes" value="yes" type="radio"/>
						<label for="fNo">No</label>
						<input name="sFriend" id="fNo" value="no" type="radio"/>
					</fieldset>
				</div>

				<br/>

	<!--text area control box-->
				<label for="commBox">If you have; are you going to purchase more in the future? <br />If you haven't; tell us why?</label>
				<textarea name="custExp" id="commBox"></textarea>
				<br/>
				<br/>
				<!--checkbox-->
				<input name="mailMe" id="mailCB" value="yes" type="checkbox"/>
				<label for="mailCB">Add my email to the list for the monthly newsletter</label>
				<br/>
				<!--checkbox-->
				<input name="respond" id="mailCB" value="yes" type="checkbox"/>
				<label for="mailCB">Email me a follow-up response to my survey submission</label><br/><br/> If you checked one or both of the above boxes; please provide your contact information below.<br /><br/><br/> Surveys are private and confidential. holymercy.com will not share your contact information with third parties, <i>ever.</i>

				<div class="formRow">
					<!--nest all labels and input boxes to create flex for (single column / mobiles) & (double column larger screens)-->
					<label for "name"> name</label>
					<!--for="" attribute associates with id=""//orig<input type="text" name="name" -->
					<input name="name" id="name" type="text" placeholder="name (optional)" required/>
					<!--gray placeholder text, required validates linked to .js script-->
				</div>

				<div class="formRow">
					<label for "mail">e-mail</label>
					<input name="mail" id="mail" type="text" placeholder="your e-mail (optional)" required/><!--required-->
					<!--required validates//orig<input type="text" name="mail"-->
				</div>
				
				</div>
				
			</fieldset>
            <!--submit and reset buttons//orig<button type="submit" name="submit">Send Mail</button>-->
			
			<!--<div id="buttons">--><button id="btnAlert" type="submit" name="submit" onClick="sweet();">submit</button>
				<!--<input type="submit" name="submit" value="submit">-->
			<div id="buttons">
				<input type="reset" value="reset"/>
			</div>

		</form>	<p>After you click submit your answers have been submitted. Thank you for your participation.</p>
	</section>
		           <br />
                   <br />
                   <br />
	
		<footer>
		<div id="footmargin">Stay in touch!</div>
        <div id="footmargin1"> © Copyright 2021 - All Rights Reserved </div>
		<br />
		<ul>
		<li><a href="terms.html">Terms and Conditions</a></li>
		<li><a href="contact.html">support@cis 3030</a></li>
		</ul>
    </footer>
</body>
</html>