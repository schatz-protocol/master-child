<?php

//////
// This file contains the HTML for each page of the pseudo-form.
//
// When making changes here, also check the js/form-1.js file.
//
// Add "[VALI-ERR]" into each option, to show where to put the error message.
//
create_step_adv(
	$options = array(
    'step' => 1,
    'input' => '
<label>Find out how much you can borrow, your interest rate, and your monthly payment!</label>
<div>
	<select id="pseudo_input_6" name="pseudo_input_6">
		<option value="">Please Select</option>
		<option value="First Time Home Buyer">First Time Home Buyer</option>
		<option value="Have not owned property in the last 3 years">Have not owned property in the last 3 years</option>
		<option value="Current Home Owner">Current Home Owner</option>
	</select>
	[VALI-ERR]
</div>
',
    'type' => 'first',
	)
);
create_step_adv(
	$options = array(
    'step' => 2,
    'input' => '
<label>What county do you live in?</label>
<div>
	<select id="pseudo_input_7" name="pseudo_input_7" class="form-select">
		<option value="">Please Select</option>
		<option value="King County">King County</option>
		<option value="Pierce County">Pierce County</option>
		<option value="Snohomish County">Snohomish County</option>
		<option value="Adams County">Adams County</option>
		<option value="Asotin County">Asotin County</option>
		<option value="Benton County">Benton County</option>
		<option value="Chelan County">Chelan County</option>
		<option value="Clallam County">Clallam County</option>
		<option value="Clark County">Clark County</option>
		<option value="Columbia County">Columbia County</option>
		<option value="Cowlitz County">Cowlitz County</option>
		<option value="Douglas County">Douglas County</option>
		<option value="Ferry County">Ferry County</option>
		<option value="Franklin County">Franklin County</option>
		<option value="Garfield County">Garfield County</option>
		<option value="Grant County">Grant County</option>
		<option value="Grays Harbor County">Grays Harbor County</option>
		<option value="Island County">Island County</option>
		<option value="Jefferson County">Jefferson County</option>
		<option value="Kitsap County">Kitsap County</option>
		<option value="Kittitas County">Kittitas County</option>
		<option value="Klickitat County">Klickitat County</option>
		<option value="Lewis County">Lewis County</option>
		<option value="Lincoln County">Lincoln County</option>
		<option value="Mason County">Mason County</option>
		<option value="Okanogan County">Okanogan County</option>
		<option value="Pacific County">Pacific County</option>
		<option value="Pend Oreille County">Pend Oreille County</option>
		<option value="San Juan County">San Juan County</option>
		<option value="Skagit County">Skagit County</option>
		<option value="Skamania County">Skamania County</option>
		<option value="Spokane County">Spokane County</option>
		<option value="Stevens County">Stevens County</option>
		<option value="Thurston County">Thurston County</option>
		<option value="Wahkiakum County">Wahkiakum County</option>
		<option value="Walla Walla County">Walla Walla County</option>
		<option value="Whatcom County">Whatcom County</option>
		<option value="Whitman County">Whitman County</option>
		<option value="Yakima County">Yakima County</option>
	</select>
	[VALI-ERR]
</div>
',
	)
);

create_step_adv(
	$options = array(
    'step' => 3,
    'input' => '
<label>Which best describes your U.S. Military experience?</label>
<div>
	<select id="pseudo_input_16" name="pseudo_input_16">
		<option value="">Please Select</option>
		<option value="I am currently on active duty">I am currently on active duty</option>
		<option value="I am separated from service">I am separated from service</option>
		<option value="I am / was a member of the Reserve / National Guard">I am / was a member of the Reserve / National Guard</option>
		<option value="I am / was married to someone with U.S. Military experience">I am / was married to someone with U.S. Military experience</option>
		<option value="I have no U.S. Military experience">I have no U.S. Military experience</option>
	</select>
	[VALI-ERR]
</div>
'
	)
);

create_step_adv(
	$options = array(
    'step' => 4,
    'input' => '
<label>What length of service time for you (or your spouse)?</label>
<div>
	<select id="pseudo_input_17" name="pseudo_input_17">
		<option value="">Please Select</option>
		<option value="Service of at least 90 consecutive days during war time">Service of at least 90 consecutive days during war time</option>
		<option value="Service of at least 181 days during peacetime">Service of at least 181 days during peacetime</option>
		<option value="Service of at least 6 years in the Reserve / National Guard">Service of at least 6 years in the Reserve / National Guard</option>
	</select>
	[VALI-ERR]
</div>
'
	)
);

create_step_adv(
	$options = array(
    'step' => 5,
    'input' => '
<label># Of People in Household</label>
<div class="">
	<select id="pseudo_input_8" name="pseudo_input_8" class="form-select">
		<option value="">Please Select</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10+">10+</option>
	</select>
	[VALI-ERR]
</div>
',
	)
);

create_step_adv(
	$options = array(
    'step' => 6,
    'input' => '
<label>Monthly Gross Income</label>
<div class="">
	<select id="pseudo_input_9" name="pseudo_input_9" class="form-select">
		<option value="">Please Select</option>
		<option value="$0-$2,000">$0&ndash;$2,000</option>
		<option value="$2,001-$4,000">$2,001&ndash;$4,000</option>
		<option value="$4,001-$6,000">$4,001&ndash;$6,000</option>
		<option value="$6,001-$8,000">$6,001&ndash;$8,000</option>
		<option value="$8,001-$10,000">$8,001&ndash;$10,000</option>
		<option value="$10,001-$12,000">$10,001&ndash;$12,000</option>
		<option value="$12,000+">$12,000+</option>
	</select>
	[VALI-ERR]
</div>
',
	)
);

create_step_adv(
	$options = array(
    'step' => 7,
    'input' => '
<label>Credit Rating</label>
<div class="">
	<select id="pseudo_input_10" name="pseudo_input_10" class="form-select">
		<option value="">Please Select</option>
		<option value="Average (640-700)">Average (640-700)</option>
		<option value="Above Average (700+)">Above Average (700+)</option>
		<option value="Fair (580-639)">Fair (580-639)</option>
		<option value="Poor (350-579)">Poor (350-579)</option>
	</select>
	[VALI-ERR]
</div>
',
	)
);

create_step_adv(
	$options = array(
    'step' => 8,
    'input' => '
<label>Name</label>
<div class="">
	<input id="pseudo_input_2" name="pseudo_input_2" type="text">
	[VALI-ERR]
</div>
',
    'message' => 'Please provide your name.'
	)
);

create_step_adv(
	$options = array(
    'step' => 9,
    'input' => '
<label>Phone Number</label>
<div class="">
	<input id="pseudo_input_3" name="pseudo_input_3" type="text">
	[VALI-ERR]
</div>
',
    'message' => 'Please provide a phone number.'
	)
);

create_step_adv(
	$options = array(
    'step' => 10,
    'input' => '
<label>Email</label>
<div class="">
	<input id="pseudo_input_4" name="pseudo_input_4" type="text">
	[VALI-ERR]
</div>
',
    'message' => 'Please provide an email address.'
	)
);


create_step_adv(
	$options = array(
    'step' => 11,
    'input' => '
<label>Comments? (Optional)</label>
<div class="">
	<textarea id="pseudo_input_5" name="pseudo_input_5" style="height: 100px"></textarea>
</div>
',
	)
);

create_step_adv(
	$options = array(
    'step' => 12,
    'input' => '
<label>Communication Consent</label>
<div class="">
	<div style="font-size: 14px; line-height: 1.5em">By clicking on the button you are providing express written consent for us to call you (including through automated means; e.g. autodialing, text, and pre-recorded messaging) via telephone, mobile device (including SMS and MMS) and/or email, even if your telephone number is currently listed on any internal, corporate, state, federal or national Do-Not-Call (DNC) list. Consent is not required as a condition to utilize our services. You agree to our Terms of Use and Privacy Policy.</div>
	<div class="inline-checkbox-and-label">
		<input type="checkbox" id="pseudo_input_12" name="pseudo_input_12" />
		<label for="pseudo_input_12">I Agree</label>
	</div>
	[VALI-ERR]
</div>
',
    'type' => 'last',
    'message' => 'You must agree to receive communication from us.'
	)
);


/*

create_step_adv(
	$options = array(
    'step' => 1,
    'input' => '
<label>Are you a member of an organization that receives VA benefits</label>
<div>
	<select id="pseudo_input_15" name="pseudo_input_15">
		<option value="">Please Select</option>
		<option value="Yes">Yes</option>
		<option value="No">No</option>
	</select>
	[VALI-ERR]
</div>
'
	)
);

create_step_adv(
	$options = array(
		'step' => 7,
		'input' => '
<label>Please provide your contact information</label>
<div class="table-like">
	<div><span>Name:</span><span><input id="pseudo_input_8" name="pseudo_input_8" class="half-input"> <input id="pseudo_input_9" name="pseudo_input_9" class="half-input"></span></div>
	<div><span>Email:</span><span><input id="pseudo_input_10" name="pseudo_input_10"></span></div>
	<div><span>Phone:</span><span><input id="pseudo_input_11" name="pseudo_input_11"></span></div>
</div>
[VALI-ERR]
',
		'message' => 'Please fill in all the fields.',
		'type' => 'last'
	)
);
*/
