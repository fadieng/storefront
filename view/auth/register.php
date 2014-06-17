
<!-- page content -->
    <div id="pageFullWidth">
		<form name="newuserform" id="newuserform" action="index.php?q=auth&a=processReg" onsubmit="return validateForm('myForm')" method="post">
		   	<fieldset id="loginfo">
			    <legend>Log in Information</legend>
			   	<label for="useridinput">User ID: </label>
				<input type="text" name="userid" id="useridinput" size="50" placeholder="Please enter User ID" />
				<span id="useridError" style="color: red; font-size: 12pt">*</span>
			
				

			   	<label for="passwordinput">Password: </label>
				<input type="password" name="password" id="passwordinput" size="50" placeholder="Please choose password" />
				<span id="passwordError" style="color: red; font-size: 12pt">*</span>
			
				

			   	<label for="passwordconfirminput">Confirm password: </label>
				<input type="password" name="passwordconfirm" id="passwordconfirminput" size="50" placeholder="Please confirm your password" />
				<span id="passwordconfirmError" style="color: red; font-size: 12pt">*</span>
				
			</fieldset>
		    
		    <fieldset id="contactinfo">
			    <legend><span>Contact Information</span></legend>
			    <label for="firstnameinput">First Name: </label>
				<input type="text" name="firstname" id="firstnameinput" size="50" placeholder="Please enter your first name" />
				<span id="firstnameError" style="color: red; font-size: 12pt">*</span>
				
			    <label for="lastnameinput">Last Name: </label>
				<input type="text" name="lastname" id="lastnameinput" size="50" placeholder="Please enter your Last name" />
				<span id="lastnameError" style="color: red; font-size: 12pt">*</span>
				
			    <label for="addressinput">Streat Address: </label>
				<input type="text" name="address" id="addressinput" size="75" placeholder="Street Address and apt.#" />
				
				
				<fieldset id="city">
					<label for="cityinput">City: </label>
					<input type="text" name="city" id="cityinput" size="20" placeholder="City" />
					
					
					<label for="stateinput">State: </label>
					<select id="stateinput" name="state">
						<option value="0" selected="selected">Select State</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					
					<label for="zipcodeinput">Zip Code: </label>
					<input type="text" name="zipcode" id="zipcodeinput" size="20" placeholder="Zip Code" />
					
					<span id="addressError" style="color: red; font-size: 12pt">*</span>
				</fieldset>

				<label for="phoneinput">* Phone No.: </label>
				<input type="text" name="phone" id="phoneinput" size="20" placeholder="(000)000-0000" />
				<span id="phoneError" style="color: red; font-size: 12pt">*</span>
				
			    <label for="emailinput">* Email Address: </label>
				<input type="text" name="email" id="emailinput" size="50" placeholder="name@domain.com" />
				<span id="emailError" style="color: red; font-size: 12pt">*</span>
			</fieldset>
			<fieldset id="buttons">
				<button type"reset" id="reset" name="reset">Reset</button>
				<button type"submit" id="submit" name="submit">Register</button>
			</fieldset>

		</form>
	</div>
<!-- End page content -->