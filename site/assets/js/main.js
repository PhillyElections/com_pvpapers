jQuery.noConflict()

(function(scoped) {
    scoped(window.jQuery, window, document)
}(function($, W, D) {
    'use strict'

    // true init
    $(function() {
        initialize()
    })

    // module shared variables
    var GATEKEEPER_KEY = 'f2e3e82987f8a1ef78ca9d9d3cfc7f1d',
        FADETIME = 250,
        Elements = {},
        Data,
        sigformLimit = 35

    function getElement(id) {
        if (typeof Elements[id] == 'undefined') {
            Elements[id] = $('#' + id)
        }
        return Elements[id]
    }

    // functions
    function rehide(id) {
        getElement(id).hide()
        getElement(id).removeClass('hidden')
    }

    function unhide(id) {
        getElement(id).show()
    }

    function require(id) {
        if (typeof getElement(id).get(0) != 'undefined' && !getElement(id).get(0).tagName == "select") {
            getElement(id).addClass('required')
        } else {
            getElement(id).attr('required', 'required')
        }
    }

    function disable(id) {
        getElement(id).attr('disabled', 'disabled')
    }

    function enable(id) {
        getElement(id).attr('disabled', '')
    }

    function unrequire(id, segment) {
        if (id == 'candidate_district' + segment) {
            getElement(id).val('0')
        }
        if (id == 'display_id' + segment) {
            getElement(id).val('0')
        }
        getElement(id).removeClass('required')
        getElement(id).removeAttr('required')
    }

    function unrequireRow(segment, district) {
        unrequire("display_id" + segment, segment)
        unrequire("candidate_district" + segment, segment)
        unrequire("candidate_office" + segment, segment)
        unrequire("candidate_name" + segment, segment)
        unrequire("candidate_address" + segment, segment)
        unrequire("candidate_occupation" + segment, segment)
    }

    function requireRow(segment, district) {
        require("display_id" + segment, segment)
        if (district) {
            require("candidate_district" + segment, segment)
        } else {
            disable("candidate_district" + segment, segment)
        }
        require("candidate_office" + segment, segment)
        require("candidate_name" + segment, segment)
        require("candidate_address" + segment, segment)
        require("candidate_occupation" + segment, segment)
    }

    function setInitialFormState() {
        unrequireRow('_7', true)
        rehide('candidate_row_7')
        unrequireRow('_6', true)
        rehide('candidate_row_6')
        unrequireRow('_5', true)
        rehide('candidate_row_5')
        unrequireRow('_4', true)
        rehide('candidate_row_4')
        unrequireRow('_3', true)
        rehide('candidate_row_3')
        unrequireRow('_2', true)
        rehide('candidate_row_2')
        unrequireRow('_1', true)
        rehide('candidate_row_1')
    }

    // settings and initialization
    $.support.cors = true

    // element-event based actions
    // split 
    $(D).on('click', '#add_candidate', function() {
        console.log('let\'s add a candidate')
        var base, id, segment
        base = 'candidate_row'
        for (var i = 1; i < 8; i++) {
            segment = "_" + i
            id = base + segment
            if (!getElement(id).is(':visible')) {
                getElement(id).show()
                requireRow(segment)
                return
            }
        }
    })

    $(D).on('keyup', '#candidate_party', function() {
        if ( this.value.toLowerCase() == 'democrat' || this.value.toLowerCase() == 'republican' ) {
            alert("Democratic and Republican candidates must fill out Nomination Petitions not Nomination Papers.")
        }
    })

    $(D).on('click', '#remove_candidate', function() {
        console.log('let\'s remove a candidate')
        var base, id, segment
        base = 'candidate_row'
        for (var i = 7; i > 0; i--) {
            segment = "_" + i
            id = base + segment
            console.log(id)
            if (getElement(id).is(':visible')) {
                unrequireRow(segment, true)
                rehide(id)
                return
            }
        }
    })

    $(D).on('change', 'input[name=candidate_self_circulating]', function() {
        getElement('candidate_self_circulating_no, #candidate_self_circulating_yes').removeClass('required')
        getElement('candidate_self_circulating_no_msg, #candidate_self_circulating_yes_msg').removeClass('invalid')
    })

    $(D).on('change', '#display_id_1,#display_id_2,#display_id_3,#display_id_4,#display_id_5,#display_id_6,#display_id_7', function() {
        var office=$(this).find('option:selected').text()
        console.log(office)
        switch (office) {
            // these get the basic form
            case "Mayor":
            case "City Commissioner":
            case "Register of Wills":
            case "Sheriff":
            case "City Council At-Large":
            case "City Controller":
            case "District Attorney":
            break;
            // this adds district
            case "District City Council":
                console.log(this)
            break;
            // these add a crapload of stuff...
            case "Committeeperson":
            case "Inspector of Election":
            case "Judge of Election":
            break;
        }
    })

    /* see above */
    function initialize() {
        // set optional elements correct visibility
        setInitialFormState()
        // set the form validation
        D.formvalidator = null;
        D.formvalidator = new JFormValidator()
    }
}))
var gAllowSubmit = false;
//Then you need a function which gets executed when the user fills the reCapcha correctly:

function capcha_filled() {
    gAllowSubmit = true;
}
//... and a function that gets executed when the reCapcha session expires:

function capcha_expired() {
    gAallowSubmit = false;
}

var JFormValidator = new Class({
    initialize: function() {
        this.handlers = Object();
        this.custom = Object();
        this.setHandler("username", function(b) {
            regex = new RegExp("[<|>|\"|'|%|;|(|)|&]", "i");
            return !regex.test(b)
        });
        this.setHandler("password", function(b) {
            regex = /^\S[\S ]{2,98}\S$/;
            return regex.test(b)
        });
        this.setHandler("numeric", function(b) {
            regex = /^(\d|-)?(\d|,)*\.?\d*$/;
            return regex.test(b)
        });
        this.setHandler("email", function(b) {
            regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;
            return regex.test(b)
        });
        this.setHandler("ward", function(b) {
            return (b > 0 && b < 67)
        });
        this.setHandler("division", function(b) {
            return (b > 0 && b < 52)
        });
        this.setHandler("phone", function(b) {
            regex = /^1?(\()?[2-9]\d{2}(\))?(-|\s)?\d{3}(-|\s)?\d{4}$/;
            return regex.test(b)
        });
        var a = $$("form.form-validate");
        a.each(function(b) {
            this.attachToForm(b)
        }, this)
    },
    setHandler: function(b, c, a) {
        a = (a == "") ? true : a;
        this.handlers[b] = {
            enabled: a,
            exec: c
        }
    },
    attachToForm: function(a) {
        $A(a.elements).each(function(b) {
            b = $(b);
            if ((b.getTag() == "input" || b.getTag() == "button") && b.getProperty("type") == "submit") {
                if (b.hasClass("validate")) {
                    b.onclick = function() {
                        return document.formvalidator.isValid(this.form)
                    }
                }
            } else {
                b.addEvent("blur", function() {
                    return document.formvalidator.validate(this)
                })
            }
        })
    },
    validate: function(b) {
        // 2018.01.24 MMurphy enforce lengths on required fields
        if ($(b).hasClass("required") && $(b).getProperty('maxlength') > 0 && $(b).getProperty('maxlength') < $(b).getProperty('value').length) {
            this.handleResponse(false, b);
            return false
        }
        if ($(b).hasClass("required")) {
            if (!($(b).getValue())) {
                this.handleResponse(false, b);
                return false
            }
        }

        var a = (b.className && b.className.search(/validate-([a-zA-Z0-9\_\-]+)/) != -1) ? b.className.match(/validate-([a-zA-Z0-9\_\-]+)/)[1] : "";
        if (a == "") {
            this.handleResponse(true, b);
            return true
        }
        if ((a) && (a != "none") && (this.handlers[a]) && $(b).getValue()) {
            if (this.handlers[a].exec($(b).getValue()) != true) {
                this.handleResponse(false, b);
                return false
            }
        }
        this.handleResponse(true, b);
        return true
    },
    isValid: function(c) {
        var b = true;
        for (var a = 0; a < c.elements.length; a++) {
            if (this.validate(c.elements[a]) == false) {
                b = false
            }
        }
        $A(this.custom).each(function(d) {
            if (d.exec() != true) {
                b = false
            }
        });
        return b
    },
    handleResponse: function(b, a) {
        if (!(a.labelref)) {
            var c = $$("label");
            c.each(function(d) {
                if (d.getProperty("for") == a.getProperty("id")) {
                    a.labelref = d
                }
            })
        }
        if (b == false) {
            a.addClass("invalid");
            if (a.labelref) {
                $(a.labelref).addClass("invalid")
            }
        } else {
            a.removeClass("invalid");
            if (a.labelref) {
                $(a.labelref).removeClass("invalid")
            }
        }
    }
});
document.formvalidator = null;