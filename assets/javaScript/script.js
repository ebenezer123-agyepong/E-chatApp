

/*======================SHOW MENU===================== */
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

    /*====================MENU SHOW============== */
    /*------validate if constant exists */
    if(navToggle){
        navToggle.addEventListener('click', ()=>{
            navMenu.classList.add('show-menu')
        })
    }

    
    /*====================MENU HIDDEN============== */
    /*------validate if constant exists */
    if(navClose){
        navClose.addEventListener('click', ()=>{
            navMenu.classList.remove('show-menu')
        })
    }

    /*==============REMOVE MENU MOBILE=============== */
    const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*============SKILLS================ */
const SkillsContent =document.getElementsByClassName('skills__content'),
    SkillsHeader = document.querySelectorAll('.skills__header')
function toggleSkills(){
    let itemClass = this.parentNode.className

    for(i = 0; i < SkillsContent.length; i++){
        SkillsContent[i].className = 'skills__content skills__close'
    } 
    if(itemClass === 'skills__content skills__close'){
        this.parentNode.className = 'skills__content skills__open'
    }
}

SkillsHeader.forEach((el) =>{
    el.addEventListener('click', toggleSkills)
})

/*======================== QUALIFICATIONS ================== */
const tabs =document.querySelectorAll('[data-target]'),
    tabsContent = document.querySelectorAll('[data-content]')

    tabs.forEach(tab =>{
        tab.addEventListener('click', ()=>{
            const target = document.querySelector(tab.dataset.target)

            tabContents.forEach(tabsContent =>{
                tabContent.classList.remove('qualification__active')
            })
            target.classList.add('qualification__active')

            tabs.forEach(tab =>{
                tab.classList.remove('qualification__active')
            })
            tab.classList.add('qualification__active')
        })
    })

/*==================== SERVICES MODAL ====================== */
const modalViews = document.querySelectorAll('.services__modal'),
    modalBtns = document.querySelectorAll('.service__button'),
    moddalClose = document.querySelectorAll('.services__modal-close')

let modal = function(modalClick){
    modalViews[modalClick].classList.add('active__modal')
}

modalBtns.forEach((modalBtn, i) =>{
    modalBtn.addEventListener('click', ()=>{
        modal(i)
    })
}) 

moddalClose.forEach((moddalClose) =>{
    moddalClose.addEventListener('click', ()=>{
        modalViews.forEach((modalView) =>{
            modalView.classList.remove('active__modal');
        })
    })
})

/*================ PORTFOLIO SWIPER ================= */

let swiperPortfolio = new Swiper('.portfolio__container', {
    cssMode: true,
    loop: true,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
   
  });

  /*================ TESTIMONIAL SWIPER ================= */

let swiperTestimonial = new Swiper('.testimonial__container', {
    loop: true,
    grabCursor: true,
    spaceBetween: 48,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
   breakpoints:{
    568:{
        slidesPerView: 2,
    }
   }
  });

/*================ SCROLL SECTION ACTIVE LINKS================= */
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}

window.addEventListener('scroll', scrollActive);

/*================ CHANGE BACKGROUND HEADER ================= */
function scrollHeader(){
    const nav = document.getElementById('header')

    if(this.scrollY >= 200) nav.classList.add('scrollHeader'); else nav.classList.remove('scrollHeader')
}

window.addEventListener('scroll', scrollHeader);


/*================ SHOW SCROLL Up ================= */ 
function scrollUp (){
    const scrollUp = document.getElementById('scroll-up')

    if(this.scrollY >= 80) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}

window.addEventListener('scroll', scrollUp);

/*================ DARK LIGHT THEME ================= */ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'uil-sun'

//previously selected topic(if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

//we will obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => document.body.classList.contains(lightTheme) ? 'uil-moon' : 'uil-sun'

//we validate if the user previously choose a topic
if (selectedTheme) {
    //if the validation is fulfilled, we ask what the issue was to know if we activate or deactivate the dark
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
    themeButton.classList[selectedIcon === 'uil-moon' ? 'add' : 'remove'](iconTheme) 
}

//Activate / Deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    //add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    //we save the theme and current icon that the user choose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

/*=============SCROLL REVEAL ANIMATION =================== */
const sr = scrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 2000,
    reset: true
});