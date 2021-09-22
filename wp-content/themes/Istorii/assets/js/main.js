if ($(window).width() < 501){
	var lazyLoadInstance = new LazyLoad({
	  threshold: 500
	})
	} else {
	var lazyLoadInstance = new LazyLoad({
	  threshold: 1000
	})
}




window.addEventListener('DOMContentLoaded', function() {
  //Табы блок 6 
  let tabs=document.querySelectorAll('.tabheader_item'),
      tabsContent=document.querySelectorAll('.tabcontent_item'),
      tabsParent=document.querySelector('.tabheader');

  function hideTabContent(){
    tabsContent.forEach(item=>{
      item.classList.add('hide');
      item.classList.remove('show','fade')
    });
    
    tabs.forEach(item=>{
      item.classList.remove('tabheader_item_active')
    })

  }

  function showTabContent(i=3){
    tabsContent[i].classList.add('show','fade');
    tabsContent[i].classList.remove('hide');
    tabs[i].classList.add('tabheader_item_active');
  }

  hideTabContent();
  showTabContent();

  tabsParent.addEventListener('click', function(event){
    const target=event.target;
    if(target && target.classList.contains('tabheader_item')){
      tabs.forEach((item,i)=>{
        if(target==item){
          hideTabContent();
          showTabContent(i);
        }
      })
    }
  })

//Табы 2 блок

  let itemsContent=document.querySelectorAll('#block_2 .item_content '),
      itemParent=document.querySelector('#block_2 .main-slide');



  function showItem(i=1){
    itemsContent[i].classList.add('active','fade');
   
  
  }

  function hideItem(){
    itemsContent.forEach(item=>{
      item.classList.remove('active', 'fade')
    })}
  
    

    itemsContent.forEach((item,i)=>{
      
      item.addEventListener('click', ()=>{
        hideItem();
        showItem(i);
      })
    } )


  hideItem();
  showItem();

 

});


//Слайдер 7 блок


const swiper = new Swiper('#block_7 .swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 3,


  // Navigation arrows
  navigation: {
    nextEl: '.next',
    prevEl: '.prev',
  },
  breakpoints: {

            320: {
                    slidesPerView: 1
                  },
			 599: {
                    slidesPerView: 2
                  },
			1279: {
			slidesPerView: 3
			},
        }

  
});


//Слайдер 8 блок


const swiper1 = new Swiper('#block_8 .swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 1,
  // Navigation arrows
  navigation: {
    nextEl: '.next1',
    prevEl: '.prev1',
  },
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",

  },
  scrollbar: {
    el: ".swiper-scrollbar",
    clickable: true,
  },
 
  
});


//Слайдер 2 блок


const swiper2 = new Swiper('#block_2 .swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: .9,


  // Navigation arrows
  navigation: {
    nextEl: '.next2',
    prevEl: '.prev2',
  },
  

  
});
	






	