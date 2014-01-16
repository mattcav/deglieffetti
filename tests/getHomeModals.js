module.exports = {
'Modals shows correctly': function (test) {
  test
    .open('http://www.deglieffetti.eu/?theme=deglieffetti_v3')
        .assert.exists('#contact-modal', 'modal exists')
        .assert.css('#contact-modal', 'visibility', 'hidden')
        .assert.exists('#social', 'social section exists')
        .click('.insta-pic:first-child > a')
        .waitForElement('.mfp-wrap')
        .assert.exists('.mfp-ready', 'magnific popup works')
        .assert.exists('.mfp-img', 'magnific image loads')
        .assert.exists('#mfp-info', 'more info exists')
    .done();
    },


};


'use strict';
module.exports = {

    // Testsuite name
    name: 'Home modals',

    'can open an image as popup': function (test) {
            test
                .open('http://www.deglieffetti.eu/?theme=deglieffetti_v3')
                .assert.exists('#contact-modal', 'modal exists')
                .assert.css('#contact-modal', 'visibility', 'hidden')
                .assert.exists('#social', 'social section exists')
                .click('.insta-pic:first-child > a')
                .waitForElement('.mfp-wrap')
                .assert.exists('.mfp-ready', 'magnific popup works')
                .assert.exists('.mfp-img', 'magnific image loads')
                .assert.exists('#mfp-info', 'more info exists')
            .done();
    },


    'can fill the form': function (test) {
            test
                .open('http://www.deglieffetti.eu/?theme=deglieffetti_v3')
                .query('#name')
                        .type('dalek')
                        .assert.attr('value', 'dalek', 'adding text to a form works')
                .end()
                .query('#email')
                        .type('dalek@mced.it')
                        .assert.attr('value', 'dalek@mced.it', 'adding text to a form works')
                .end()
                .query('#message')
                        .type(text)
                        .assert.attr('value', text, 'adding text to a form works')
                .end()
                .submit('#contact-form')
                
            .done();
    }

};