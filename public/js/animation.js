gsap.registerPlugin(ScrollTrigger);

let revealContainers = document.querySelectorAll(".timeline");

revealContainers.forEach((container) => {
    let image = container.querySelector("img");
    let title = container.querySelector(".title");
    let texty = container.querySelector(".text");
    let year = container.querySelector(".year");
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: container,
            toggleActions: "play none none none",
            start:"100% bottom",
            markers:false
        }
    });

    tl.set(container, { autoAlpha: 1 });
    tl.from(container, 1.5, {
        xPercent: -100,
        ease: Power2.out
    });
    tl.from(image, 1.5, {
        xPercent: 100,
        scale: 1.3,
        delay: -1.5,
        ease: Power2.out
    });

});



let tl1 = gsap.timeline({
    scrollTrigger: {
        trigger: ".timeline-section",
        //toggleActions: "play none none none",
        start:"start 40%",
        end:"bottom 40%"
        ,
        markers:true,
        scrub: 1
    }
});
tl1.fromTo(".progress-bar",{
  height:"0",
  ease: Power0.easeNone
},{
  height:"100%",
  ease: Power0.easeNone
})
