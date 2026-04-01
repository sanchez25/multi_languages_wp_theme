window.addEventListener('load', function () {

    document.querySelector('.scroll-top').addEventListener('click', function() {		
        window.scrollTo({ top: 0, behavior: 'smooth' });	
    })
		
    window.addEventListener('scroll', function(){
        if ( this.scrollY > 1000) {
            document.querySelector('.scroll-top').style.opacity = '1';
        } else {
            document.querySelector('.scroll-top').style.opacity = '0';
        }
    })

    let questions = document.querySelectorAll('.faq__item');
    for(question of questions){

        question.addEventListener('click', function(){
            this.classList.toggle('open');
            this.querySelector('.faq__answer').classList.toggle('active');
        })
    }

    function toggleMenu(){
        document.querySelector('.menu_mobile').classList.toggle('show');
        document.querySelector('header .overlay').classList.toggle('active');
    }

    let burgerBtn = document.querySelector('.burger img');
    let closeBtn = document.querySelector('.menu_mobile .close');
	
    if (burgerBtn) {
		burgerBtn.addEventListener('click', toggleMenu);
	} 
	if (closeBtn) {
    	closeBtn.addEventListener('click', toggleMenu);
	}

    document.querySelector('.overlay').addEventListener('click', function() {
        document.querySelector('.menu_mobile').classList.remove('show');
        this.classList.remove('active');
    })
    
	let langChoose = document.querySelector('.lang_choose');

	if (langChoose) {
		langChoose.addEventListener('click', function(){
			document.querySelector('.lang_choose .submenu').classList.toggle('show');
			document.querySelector('.choose').classList.toggle('show');
		})
	}
})








