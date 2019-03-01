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
        Services = {
            geocoder: {
                url: function(input) {
                    const encInput = encodeURIComponent(input)
                    return '//api.phila.gov/ais/v1/search/{encInput}'.replace('{encInput}', encInput)
                },
                params: {
                    gatekeeperKey: GATEKEEPER_KEY
                }
            },
            address_completer: {
                url: function(input) {
                    const encInput = encodeURIComponent(input)
                    return '//apis.philadelphiavotes.com/autocomplete/{encInput}'.replace('{encInput}', encInput)
                }
            }
        }

    function getElement(id) {
        if (typeof Elements[id] == 'undefined') {
            Elements[id] = $('#' + id)
        }
        return Elements[id]
    }

    function getHome(input) {
        console.log('getHome(input)', input)
        var deferred = $.Deferred(),
            service = Services.geocoder
        $.getJSON(service.url(input), service.params).done(function(response) {
            console.log(response)
            if (response.features) {
                deferred.resolve({
                    coordinates: [response.features[0].geometry.coordinates[1], response.features[0].geometry.coordinates[0]],
                    data: response.features[0].properties,
                    name: input
                })
            } else {
                deferred.reject()
            }
        })
        return deferred.promise()
    }

    // begin ajax functions
    function onHomeAddress() {
        // independant services
        getElement('candidate_ward').val(Data.precinct.padStart(4, '0').substring(0, 2))
        getElement('candidate_division').val(Data.precinct.padStart(4, '0').substring(2, 4))
        getElement('sigform_address').val(Data.label)
        getElement('candidate_zip').val(Data.zip)
        getElement('sigform_address').trigger('keyup')
    }

    // functions
    function addressComplete() {
        if (!getElement('candidate_address')) return false
        getElement('candidate_address').autocomplete({
            minLength: 3,
            source: function(request, callback) {

                var service = Services.address_completer,
                    space = request.term.indexOf(' ')
                // let's not run until we've entered a street number
                // and the first letter of the street
                if (space > 0 && space < request.term.length - 1) {
                    $.getJSON(service.url(request.term), service.params, function(response) {
                        if (response.status == 'success') {
                            var addresses = $.map(response.data, function(datum) {
                                return {
                                    label: datum.address,
                                    value: datum.address,
                                    precinct: datum.precinct,
                                    zip: datum.zip
                                }
                            })
                            callback(addresses)
                        } else {
                            callback([])
                        }
                    })
                }
            },
            select: function(evt, ui) {
                Data = ui.item
                onHomeAddress()
            }
        })
    }

    function rehide(id) {
        getElement(id).hide()
        getElement(id).removeClass('hidden')
    }

    function unhide(id) {
        getElement(id).show()
    }

    function require(id) {
        console.log(id)
        if (!getElement(id).get(0).tagName == "select") {
            getElement(id).addClass('required')            
        } else {
            getElement(id).attr('required','required')
        }
    }

    function unrequire(id) {
            if (id=='candidate_district') {
                getElement(id).val('0')
            }
            getElement(id).removeClass('required')
            getElement(id).removeAttr('required')
    }

    function setInitialFormState() {
        // these two actions we don't need to repeat
        rehide('sigform_address_row')
        rehide('sigform_address_label_row')

        hideForm()
        // FORCE COMMITTEPERSON TEMPORARILY
        // If there are only 2, then we only have one office available
        if (getElement('display_id option').size() === 2) {
            getElement('display_id option:last').attr('selected', 'selected')
            getElement('display_id').trigger('change')
        }
    }

    function hideForm() {

//        rehide('candidate_name_tr')
//        rehide('candidate_occupation_tr')
//        unrequire('candidate_address')
//        rehide('candidate_address_tr')
//        unrequire('candidate_zip')
//        rehide('candidate_address2_tr')
        unrequire('candidate_district')
        rehide('candidate_district_tr')
//        unrequire('candidate_ward')
//        unrequire('candidate_division')
//        rehide('candidate_precinct_tr')
//        rehide('candidate_phone_tr')
//        unrequire('candidate_ballot_name_approved')
//        rehide('candidate_sigform_tr')
        unrequire('candidate_self_circulating_no')
        unrequire('candidate_self_circulating_yes')
        rehide('candidate_circulation_tr')
//        rehide('candidate_double_side_tr')
//        rehide('candidate_instructions_tr')
//        rehide('candidate_recaptcha_tr')
//        rehide('candidate_submit_tr')        
    }

    function basicForm() {
        hideForm();
/*        unhide('sigform_address_row')
        unhide('sigform_address_label_row')*/
//        unhide('candidate_name_tr')
//        unhide('candidate_occupation_tr')
//        unhide('candidate_double_side_tr')
//        unhide('candidate_instructions_tr')
//        unhide('candidate_recaptcha_tr')
//        unhide('candidate_submit_tr')
    }

    function basicFormPlus() {
        basicForm()
        unhide("candidate_district_tr")        
        require('candidate_district')
    }

    function deluxeForm() {
        basicForm()
//        unhide('candidate_address_tr')
//        require('candidate_address')
//        unhide('candidate_address2_tr')
//        require('candidate_zip')
//        unhide('candidate_precinct_tr')
//        require('candidate_ward')
//        require('candidate_division')
//        unhide('candidate_phone_tr')
//        unhide('candidate_sigform_tr')
//        rehide('sigform_address_row')
//        rehide('sigform_address_label_row')
//        require('candidate_ballot_name_approved')

        unhide('candidate_circulation_tr')        
        require('candidate_self_circulating_no')
        require('candidate_self_circulating_yes')
    }

    function selectAddressMessage() {
        if (getElement('sigform_address').val().length < 31 && getElement('sigform_address_msg2').hasClass('hidden')) {
            getElement('sigform_address_msg1').addClass('hidden')
            getElement('sigform_address_msg2').removeClass('hidden')
        } else if (getElement('sigform_address').val().length > 30 && getElement('sigform_address_msg1').hasClass('hidden')) {
            getElement('sigform_address_msg2').addClass('hidden')
            getElement('sigform_address_msg1').removeClass('hidden')
        }
    }

    // settings and initialization
    $.support.cors = true

    // element-event based actions
    // split 
    $(D).on('keyup', '#candidate_name', function() {
        var parts = (this.value.replace(/[^A-Za-z -]/gi, '').replace(/ +/gi, ' ')),
            $sigformFirstMiddle = getElement('sigform_first_middle')
            $sigformFirstMiddle.val(parts)
        getElement('fm_current_length').text(getElement('sigform_first_middle').val().length)
    })

    $(D).on('blur', '#candidate_address', function() {
        // var address = getHome(this.value)
        // $.when(address, function() {})
    })

    $(D).on('keyup', '#sigform_first_middle', function() {
        var temp = (this.value.replace(/[^A-Za-z -]/gi, '').replace(/-/gi, ' ').replace(/ +/gi, ' '))
        this.value=temp
        getElement('fm_current_length').text(getElement('sigform_first_middle').val().length)
    })

    $(D).on('keyup', '#sigform_last', function() {
        var temp = (this.value.replace(/[^A-Za-z -]/gi, '').replace(/-/gi, ' ').replace(/ +/gi, ' '))
        this.value=temp
        getElement('l_current_length').text(getElement('sigform_last').val().length)
    })

    $(D).on('keyup', '#candidate_address, #candidate_address2', function() {
        if (!getElement('candidate_sigform_tr').hasClass('hidden')) {
            getElement('sigform_address').val(((getElement('candidate_address').val() + ' ' + getElement('candidate_address2').val()).trim()).replace(/[^A-Za-z0-9 ]/gi, '').replace(/ +/gi, ' '))
            getElement('sa_current_length').text(getElement('sigform_address').val().length)

            if (!getElement('candidate_sigform_tr').hasClass('hidden') && getElement('sigform_address').val().length > 30 && !getElement('sigform_address').hasClass('required')) {
                getElement('sigform_address_row, #sigform_address_label_row').fadeIn(FADETIME)
                getElement('sigform_address').addClass('required')
                getElement('sigform_address').addClass('required')
                getElement('current_length').text(getElement('sigform_address').val().length)
            }
            selectAddressMessage()
        }
    })

    $(D).on('keyup', '#sigform_address', function() {
        getElement('sa_current_length').text(getElement('sigform_address').val().length)
        selectAddressMessage()
    })

    $(D).on('change', 'input[name=candidate_self_circulating]', function() {
        getElement('candidate_self_circulating_no, #candidate_self_circulating_yes').removeClass('required')
        getElement('candidate_self_circulating_no_msg, #candidate_self_circulating_yes_msg').removeClass('invalid')
    })

    $(D).on('change', '#display_id', function() {
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
                basicForm();
            break;
            // this adds district
            case "District City Council":
                basicFormPlus();
            break;
            // these add a crapload of stuff...
            case "Committeeperson":
            case "Inspector of Election":
            case "Judge of Election":
                deluxeForm();
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

        $('#display_id').trigger('change');
        // start up the address service
        // addressComplete()
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