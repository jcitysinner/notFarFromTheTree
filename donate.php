
<?php include("includes/header.php"); ?>

	<div class="fullWidth" id="mainContentWrapper">
		<div class="wrapper">
			<p class="breadCrumbs"><a>HOME</a> > <a>DONATE</a></p>
			<h1 class="donationPage">Donation</h1>
			<div class="leftColumn">
				<p>Your donation will be put to work immediately by stewarding Toronto’s urban orchard, building community, and making use of an existing source of fresh fruit for those who are most in need.</p>
				<img src="images/thermom.png">
			</div>
			<div class="rightColumn">
				<h2>Donate Information</h2>
				<!--SLIDER TO BE BUILT-->
				<form action="thankyou.php" method="post">
					<div class="paymentTotal">
						<p>Donation Ammount</p>
						<input class="mainCash" type="text" name="cash">
						<p><input type="radio" name="oneTime" value="One Time"> One Time</p>
						<p><input type="radio" name="monthly" value="Monthly"> Monthly</p>
					</div>
					<div class="billingInfo">
						<h3>Billing Information</h3>
						<div class="firstName">
							<p>First Name</p>
							<input type="text" name="firstName">
						</div>
						<div class="lastName">
							<p>last Name</p>
							<input type="text" name="lastName">
						</div>
						<div class="address">
							<p>Address</p>
							<input type="text" name="address">
						</div>
						<div class="province">
							<p>Province</p>
							<select name="province">
								<option value="AB">Alberta</option>
								<option value="BC">British Columbia</option>
								<option value="MB">Manitoba</option>
								<option value="NB">New Brunswick</option>
								<option value="NL">Newfoundland and Labrador</option>
								<option value="NS">Nova Scotia</option>
								<option value="ON">Ontario</option>
								<option value="PE">Prince Edward Island</option>
								<option value="QC">Quebec</option>
								<option value="SK">Saskatchewan</option>
								<option value="NT">Northwest Territories</option>
								<option value="NU">Nunavut</option>
								<option value="YT">Yukon</option>
							</select>
						</div>
						<div class="city">
							<p>City</p>
							<input type="text" name="city">
						</div>
						<div class="country">
							<p>Country</p>
							<select name="country">
								<option value="AF">Afghanistan</option>
								<option value="AX">Åland Islands</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AS">American Samoa</option>
							</select>
						</div>
						<div class="postalCode">
							<p>Postal Code</p>
							<input type="text" name="postalCode">
						</div>
						<div class="phoneNumber">
							<p>Phone Number</p>
							<input type="text" name="phone">
						</div>
						<div class="email">
							<p>Email Address</p>
							<input type="text" name="email">
						</div>
					</div>
					<div class="paymentInformation">
						<h3>Payment Information</h3>
						<div class="creditChoice">
							<p class="input"><input type="radio" name="oneTime" value="One Time"> Credit Card</p>
							<p class="input"><input type="radio" name="monthly" value="Monthly"> Paypal</p>
						</div>
						<div class="cardNumber">
							<p>Card Number</p>
							<input type="text" name="cardNumber">
						</div>
						<div class="expMonth">
							<p>Expiration Month</p>
							<input type="text" name="expireMonth">
						</div>
						<div class="expYear">
							<p>Experation Year</p>
							<input type="text" name="expireYear">
						</div>
						<input class="submitDonate" type="submit" value="Donate">
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include("includes/footer.php"); ?>