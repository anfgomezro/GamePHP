var player1 = document.querySelector('.s1');
var p1 = document.querySelector('body');

var player2 = document.querySelector('.s2');
var p2 = document.querySelector('.bg_player_2');

var fight_button = document.getElementById("button");

(function() {


    player1.addEventListener('change', function(){
        if(this.options[this.selectedIndex].value == 'Soldier') {
            p1.style.backgroundImage = 'url(../public/img/soldier.jpg)';
            p1.style.backgroundSize = '50% auto';
        }
        else if(this.options[this.selectedIndex].value == 'Archer') {
            console.log('archer');
            p1.style.backgroundImage = 'url(../public/img/archer.jpg)';
            p1.style.backgroundSize = '50% 100%';
        }
        else {
            p1.style.backgroundImage = 'url(../public/img/wizard.jpg)';
            p1.style.backgroundSize = '50% auto';
        }
    })


    player2.addEventListener('change', function(){
        if(this.options[this.selectedIndex].value == 'Soldier') {
            p2.style.backgroundImage = 'url(../public/img/soldier.jpg)';
        }
        else if(this.options[this.selectedIndex].value == 'Archer') {
            p2.style.backgroundImage = 'url(../public/img/archer.jpg)';
            p2.style.backgroundSize = '100% 100%';
        }
        else {
            p2.style.backgroundImage = 'url(../public/img/wizard.jpg)';
            p2.style.backgroundSize = '100% auto';
        }
    })


    fight_button.addEventListener('click', function(){
        player1.addEventListener('change', function(){
            if(this.options[this.selectedIndex].value == 'Soldier') {
                p1.style.backgroundImage = 'url(../public/img/soldier.jpg)';
                p1.style.backgroundSize = '50% auto';
            }
            else if(this.options[this.selectedIndex].value == 'Archer') {
                console.log('archer');
                p1.style.backgroundImage = 'url(../public/img/archer.jpg)';
                p1.style.backgroundSize = '50% 100%';
            }
            else {
                p1.style.backgroundImage = 'url(../public/img/wizard.jpg)';
                p1.style.backgroundSize = '50% auto';
            }
        })
        player2.addEventListener('change', function() {
            if (this.options[this.selectedIndex].value == 'Soldier') {
                p2.style.backgroundImage = 'url(../public/img/soldier.jpg)';
            }
            else if (this.options[this.selectedIndex].value == 'Archer') {
                p2.style.backgroundImage = 'url(../public/img/archer.jpg)';
                p2.style.backgroundSize = '100% 100%';
            }
            else {
                p2.style.backgroundImage = 'url(../public/img/wizard.jpg)';
                p2.style.backgroundSize = '100% auto';
            }
        })
    })
})();