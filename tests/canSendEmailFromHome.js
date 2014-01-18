'use strict';
module.exports = {

    name: 'Can send email from home',

    'Can open an instagram photo popup': function (test) {
        test
            .open('http://www.deglieffetti.eu/?theme=deglieffetti_v3')
            .assert.exists('#social', 'social section exists')
            .execute(function () {
                   $('.insta-pic').addClass('come-in');
                 })
            .wait(1000)
            .click('.insta-pic:first-child > a')
            .waitForElement('.mfp-wrap')
                .assert.exists('.mfp-ready', 'magnific popup works')
                .assert.exists('.mfp-img', 'magnific image loads')
                .assert.exists('#mfp-info', 'more info button exists')
            .done();
    }, 

    'modal exists and is hidden': function (test) {
        test
            .open('http://www.deglieffetti.eu/?theme=deglieffetti_v3')
            .assert.exists('#contact-modal', 'modal exists')
            .assert.css('#contact-modal', 'visibility', 'hidden')
        .done();
    },

    'can fill the form & detect errors': function (test) {
            test
                .open('http://www.deglieffetti.eu/?theme=deglieffetti_v3')
                .execute(function () {
                   $('.insta-pic').addClass('come-in');
                 })
                .wait(1000)
                .click('.insta-pic:nth-child(2) > a')
                .waitForElement('.mfp-wrap')
                .assert.exists('.mfp-ready', 'magnific popup works')
                .wait(1000)
                .assert.visible('#mfp-info', 'more info button is visible')
                .click('#mfp-info')
                .wait(1000)
                .assert.css('#contact-modal', 'visibility', 'visible')
                .query('#name')
                            .type('TEST')
                            .assert.attr('value', 'TEST', 'adding text to a form works')
                .end()
                .click('#send')
                .wait(1000)
                .assert.visible('#form__errors', 'feedback errors is shown')
                .assert.text('#form-error__email', 'We need to know your email.', 'email error is shown')
                .assert.text('#form-error__message', 'Please, write us a message, not an empty mail.', 'message error is shown')
            .done();
    }
};