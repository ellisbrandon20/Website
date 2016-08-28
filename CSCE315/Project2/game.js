/* game.js */

var imgSprite;
var imgSprite2;
var animSprite;
var ballSprite;

var game = new Phaser.Game(676, 733, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });


var player;
var cursors;

/* most of the time you need these next 3 functions to run games */
function preload() {
    
    game.load.image('map','map.png');
    game.load.image('character','img.png');
    
    
     
    /*  loading a animated png file for animation, 
        137x130 dimension of png and 3 frames (can be left blank), 
        you can spcifiy how many frames you want to be loaded in other words
    */
    game.load.spritesheet('stickFig', 'trial.png', 137, 130, 3); // WTF!!!!!!!!!!!!!!!!!!!!!
   // game.load.spritesheet('ball','ball.png', 605, 215, 6);
    //game.load.spritesheet('wtf', 'wtf.png', 449, 183, 3);
    
    
    game.load.spritesheet('dude', 'dude.png', 32, 48);
}

function create() {
 /*create objects here*/   
    
/* load map for the background */
    var gameMap = game.add.sprite(0,0, 'map');
    
/*loading two images*/
    imgSprite = game.add.sprite(game.world.centerX, 50, 'character'); // loads the image to the 'canvas'
    imgSprite2 = game.add.sprite(game.world.centerX, 500, 'character');
   // imgSprite2.acceleration.x = 100; // supposed to make "gravity"
    
    
/*loading animated image here*/
    animSprite = game.add.sprite(300,200, 'stickFig');
    // add a new animation and give it a name
    animSprite.animations.add('walk');
    // play the animation given by name  50 = frame rate, 3rd arg = loop, 4th arg kills the sprite when animation is complete
    animSprite.animations.play('walk', 10, true);
    
     animSprite = game.add.sprite(0,0, 'wtf');
    // add a new animation and give it a name
    animSprite.animations.add('what');
    // play the animation given by name  50 = frame rate, 3rd arg = loop, 4th arg kills the sprite when animation is complete
    animSprite.animations.play('what', 10, true);
    
    //ballSprite = game.add.sprite(0,0, 'ball');
   // ballSprite.animations.add('move');
   // ballSprite.animations.play('move',10,true);
    
    
    
    
    
    
    
    
    game.physics.startSystem(Phaser.Physics.ARCADE);
    player = game.add.sprite(150, 150, 'dude');
    game.physics.arcade.enable(player);
    player.body.bounce.y = 0.2;
    player.body.gravity.y = 300;
    player.body.collideWorldBounds = true;
    player.animations.add('left', [0, 1, 2, 3], 4, true);
    player.animations.add('right', [5, 6, 7, 8], 4, true);
    cursors = game.input.keyboard.createCursorKeys();
}

function update() {

    
    
    // mimicking the zombie paths with a simple img
    if(imgSprite.x == game.world.centerX && imgSprite.y == 50) {
        imgSprite.x += .5; // simulate our zombies running down path
        console.log("1x: " +imgSprite.x);
        console.log("1y: " +imgSprite.y);
    }
    else if (imgSprite.x == 550 /*&& imgSprite.y == 50*/) {
        imgSprite.x += 0;
        imgSprite.y += .5;
        console.log("2x: " +imgSprite.x);
        console.log("2y: " +imgSprite.y);
    }
    else if (imgSprite.y == 100 /*imgSprite.x == 550 &&*/ ) {
        imgSprite.x += -.5;
        imgSprite.y += 0;
        console.log("3x: " +imgSprite.x);
        console.log("3y: " +imgSprite.y);
    }
    else {
        imgSprite.x += .5; // simulate our zombies running down path
        console.log("4x: " +imgSprite.x);
        console.log("4y: " +imgSprite.y);
    }
    
    
    
    //  Reset the players velocity (movement)
    player.body.velocity.x = 0;
    
    if (cursors.left.isDown)
    {
        //  Move to the left
        player.body.velocity.x = -50;

        player.animations.play('left');
    }
    else if (cursors.right.isDown)
    {
        //  Move to the right
        player.body.velocity.x = 50;

        player.animations.play('right');
    }
    else
    {
        //  Stand still
        player.animations.stop();

        player.frame = 4;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}