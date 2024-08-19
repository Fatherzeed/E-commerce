$(document).ready(function () {
    // Toggle modal on button click
    $("[data-modal-target]").on("click", function () {
        var targetModal = $(this).attr("data-modal-target");
        $(targetModal).removeClass("hidden");
    });

    // Close modal on close button click
    $(".close-modal").on("click", function () {
        $(this).closest("#modalAddress").addClass("hidden");
    });

    // Close modal on clicking outside the modal content
    $("#modalAddress").on("click", function (e) {
        if ($(e.target).is("#modalAddress")) {
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
                $(rule.selector).removeClass("text-red-500").addClass("text-green-500");
                $(rule.selector + " i").removeClass("fa-times-circle").addClass("fa-check-circle");
            } else {
                $(rule.selector).removeClass("text-green-500").addClass("text-red-500");
                $(rule.selector + " i").removeClass("fa-check-circle").addClass("fa-times-circle");
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
        {
            input: "#addressLabel",
            validationDiv: "#addressLabelValidation",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#fullAdress",
            validationDiv: "#fullAdressValidation",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#noteOptional",
            validationDiv: "#noteOptionalValidation",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#receiverName",
            validationDiv: "#receiverNameValidation",
            rules: [{ selector: "#ruleEmpty", condition: (value) => value.length > 0 }],
        },
        {
            input: "#phoneNumber",
            validationDiv: "#phoneNumberValidation",
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
