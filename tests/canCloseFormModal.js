'use strict';
module.exports = {

    // Testsuite name
    name: 'Close reveal modal',

    'Can close reveal modal': function (test) {
         test
            .open('http://www.deglieffetti.eu/?theme=deglieffetti_v3')
            .execute(function () {
               $('#contact-modal').foundation('reveal', 'open');
             })
            .wait(1000)
            .assert.css('#contact-modal', 'visibility', 'visible')
            .assert.visible('#close-reveal-modal', 'close button is visible')
            .assert.enabled('#close-reveal-modal', 'close button is enabled')
            .click('#close-reveal-modal')
            .wait(1000)
            .assert.css('#contact-modal', 'visibility', 'hidden')
        .done();
    }
};