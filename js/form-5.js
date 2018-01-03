//////
// This file contains the JavaScript for each page of the pseudo-form.
//
// When making changes here, also check the inc/pseudo-form-1.php file.
//



// We need to tell multi-step-core what form we're working with.
var form_id = 5;



//////
// Input Validation
//

var form_validation_array = new Array();

form_validation_array[1] = function () {
    return validatePseudoField(element = 6, '');
};

form_validation_array[2] = function () {
    return validatePseudoField(element = 7, '');
};

form_validation_array[3] = function () {
    return validatePseudoField(element = 16, '');
};

form_validation_array[4] = function () {
    return validatePseudoField(element = 17, '');
};

form_validation_array[5] = function () {
    return validatePseudoField(element = 8, '');
};

form_validation_array[6] = function () {
    return validatePseudoField(element = 9, '');
};

form_validation_array[7] = function () {
    return validatePseudoField(element = 10, '');
};

form_validation_array[8] = function () {
    return validatePseudoField(element = 2, '');
};

form_validation_array[9] = function () {
    return validatePseudoField(element = 3, 'phone');
};

form_validation_array[10] = function () {
    return validatePseudoField(element = 4, 'email');
};

form_validation_array[11] = function () {
    return true;
};

form_validation_array[12] = function () {
    return validatePseudoField(element = 12, 'check');
};


/*
 // This step has multiple items to validate.
 form_validation_array[7] = function() {
 var result = true;
 result &= validatePseudoField(element = 8, '');
 result &= validatePseudoField(element = 9, '');
 result &= validatePseudoField(element = 10, 'email');
 result &= validatePseudoField(element = 11, 'phone');
 return result;
 };
 */




//////
// Connect pseudo-form to actual form.
//

var form_population_array = new Array();

form_population_array[1] = function () {
    populateGenuineForm(element = 6);
};
form_population_array[2] = function () {
    populateGenuineForm(element = 7);
};
form_population_array[3] = function () {
    populateGenuineForm(element = 16);
};
form_population_array[4] = function () {
    populateGenuineForm(element = 17);
};

form_population_array[5] = function () {
    populateGenuineForm(element = 8);
};

form_population_array[6] = function () {
    populateGenuineForm(element = 9);
};

form_population_array[7] = function () {
    populateGenuineForm(element = 10);
};

form_population_array[8] = function () {
    populateGenuineForm(element = 2);
};

form_population_array[9] = function () {
    populateGenuineForm(element = 3);
};

form_population_array[10] = function () {
    populateGenuineForm(element = 4);
};

form_population_array[11] = function () {
    populateGenuineForm(element = 5);
};

form_population_array[12] = function () {
    populateGenuineFormAsCheckbox(element = 12);
};

/*
 form_population_array[7] = function() {
 populateGenuineForm(element = 8);
 populateGenuineForm(element = 9);
 populateGenuineForm(element = 10);
 populateGenuineForm(element = 11);
 };
 */