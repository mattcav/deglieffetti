'use strict';
module.exports = {

    name: 'Can send email from Paul Harnden',

    'can fill the form & detect errors': function (test) {
            test
                .open('http://www.deglieffetti.eu/designers/carol-christian-poell/?theme=deglieffetti_v3')
                .assert.css('#nl-form', 'visibility', 'visible')
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