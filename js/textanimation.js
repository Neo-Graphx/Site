var wrapper = document.getElementById('wrapper');

var typewriter = new Typewriter(wrapper,{
    loop: true
});

typewriter.typeString('Digital Marketing')
    .pauseFor(3000)
    .deleteAll()
    .typeString('Graphic Design')
    .pauseFor(3000)
    .deleteAll()
    .typeString('Software Solution')
    .pauseFor(3000)
    .start();