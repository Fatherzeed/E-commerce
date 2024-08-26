$(document).ready(function () {
    // Toggle modal on button click
    $("[data-modal-target]").on("click", function () {
        const targetModal = $(this).attr("data-modal-target");
        $(targetModal).removeClass("hidden");
    });

    // Close modal on close button click
    $(".close-modal").on("click", function () {
        $(this).closest("#editAddress").addClass("hidden");
    });

    // Close modal on clicking outside the modal content
    $("#editAddress").on("click", function (e) {
        if ($(e.target).is("#editAddress")) {
            $(this).addClass("hidden");
        }
    });

    // Function to validate fields
    function validateField(input, validationDiv, validationRules) {
        let value = $(input).val().trim();
        let allRulesValid = true;
    
        // Iterate over validation rules
        validationRules.forEach(function (rule) {
            if (rule.condition(value)) {
                $(rule.selector).removeClass("text-red-500 focus:border-red-600").addClass("text-green-500 focus:border-green-500");
                $(rule.selector + " i").removeClass("fa-times-circle").addClass("fa-check-circle");
                $(input).removeClass("focus:border-red-600").addClass("focus:border-green-500");
            } else {
                $(rule.selector).removeClass("text-green-500 focus:border-green-500").addClass("text-red-500 focus:border-red-600");
                $(rule.selector + " i").removeClass("fa-check-circle").addClass("fa-times-circle");
                $(input).removeClass("focus:border-green-500").addClass("focus:border-red-600");
                allRulesValid = false;
            }
        });
    
        if (allRulesValid) {
            $(validationDiv).addClass("hidden");
        } else {
            $(validationDiv).removeClass("hidden");
        }
    
        return allRulesValid;
    }

    // List of fields to validate
    const fields = [
        // Validasi untuk Edit Address
        {
            input: "#ed_addressLabel",
            validationDiv: "#ed_addressLabelV",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#ed_fullAdress",
            validationDiv: "#ed_fullAdressV",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#ed_noteOptional",
            validationDiv: "#ed_noteOptionalV",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#ed_receiverName",
            validationDiv: "#ed_receiverNameV",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#ed_phoneNumber",
            validationDiv: "#ed_phoneNumberV",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        // Validasi untuk Add Address
        {
            input: "#add_addressLabel",
            validationDiv: "#add_addressLabelV",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#add_fullAdress",
            validationDiv: "#add_fullAdressV",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#add_noteOptional",
            validationDiv: "#add_noteOptionalV",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#add_receiverName",
            validationDiv: "#add_receiverNameV",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#add_phoneNumber",
            validationDiv: "#add_phoneNumberV",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        }
    ];

    // Attach focus and input event handlers for each field
    fields.forEach(function (field) {
        $(field.input).on("focus", function () {
            // Check validation on focus only if the field is not empty
            if ($(this).val().trim() === "") {
                $(field.validationDiv).removeClass("hidden");
            }
        });

        $(field.input).on("input", function () {
            validateField(field.input, field.validationDiv, field.rules);
        });

        $(field.input).on("blur", function () {
            validateField(field.input, field.validationDiv, field.rules);
        });
    });
});

$(document).ready(function () {
    // Toggle modal on button click
    $("[data-modal-target]").on("click", function () {
        const targetModal = $(this).attr("data-modal-target");
        $(targetModal).removeClass("hidden");
    });

    // Close modal on close button click
    $(".close-modal").on("click", function () {
        $(this).closest("#addAddress").addClass("hidden");
    });

    // Close modal on clicking outside the modal content
    $("#addAddress").on("click", function (e) {
        if ($(e.target).is("#addAddress")) {
            $(this).addClass("hidden");
        }
    });
});