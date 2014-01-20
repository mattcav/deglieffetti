'use strict';
module.exports = {

    name: 'Can navigate from mobile',

    'can open offcanvas menu': function (test) {
            test
                .open('http://www.deglieffetti.eu/?theme=deglieffetti_v3')
                .resize({width: 320, height: 480})
                .assert.exists('a.left-off-canvas-toggle', 'open menu button exists')
                .assert.exists('.left-off-canvas-menu', 'OffCanvas menu exists')
                .assert.css('.left-off-canvas-menu', '-webkit-transform', 'matrix(1, 0, 0, 1, -250, 0)')
                .click('a.left-off-canvas-toggle')
                .wait(500)
                .assert.css('.inner-wrap', '-webkit-transform', 'matrix(1, 0, 0, 1, 250, 0)')        
            .done();
    }
};